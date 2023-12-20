<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class VNPayPayment extends Controller
{
    public mixed $expires;

    protected string $vnp_TmnCode;

    protected string $vnp_HashSecret;

    protected string $vnp_Url;

    protected string $vnp_Returnurl;

    public function __construct()
    {
        $this->expires         = date('YmdHis', strtotime('+15 minutes', strtotime(date("YmdHis"))));
        $this->vnp_TmnCode    = env('VNP_TMN_CODE');
        $this->vnp_HashSecret = env('VNP_HASH_SECRET');
        $this->vnp_Url        = env('VNP_URL');
        $this->vnp_Returnurl  = env('VNP_RETURN_URL');
    }


    public function generateUrl(string $order_code, int $total): array
    {
        $inputData = $this->buildInputData($order_code, $total, '', $this->expires, $_SERVER['REMOTE_ADDR']);

        $result = $this->buildHashData($inputData);
        return $this->buildRedirectUrl($result[0], $result[1]);
    }

    public function buildHashData($inputData): array
    {
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        return [$query, $hashdata];
    }

    public function buildRedirectUrl($query, $hashdata): array
    {
        isset($this->vnp_HashSecret) ? $vnpSecureHash = hash_hmac('sha512', $hashdata, $this->vnp_HashSecret) : $vnpSecureHash = '';
        return ['url' => $this->vnp_Url, 'query' => $query, 'hash' => 'vnp_SecureHash=' . $vnpSecureHash];
    }

    public function buildInputData($vnp_TxnRef, $amount, $bankCode, $expire, $ip): array
    {
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $this->vnp_TmnCode,
            "vnp_Amount" => $amount * 100,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $ip,
            "vnp_Locale" => 'vn',
            "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef,
            "vnp_OrderType" => "other",
            "vnp_ReturnUrl" => $this->vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $expire
        );

        if (isset($bankCode) && $bankCode != "") {
            $inputData['vnp_BankCode'] = $bankCode;
        }

        return $inputData;
    }


}
