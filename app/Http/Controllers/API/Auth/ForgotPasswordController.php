<?php

namespace App\Http\Controllers\API\Auth;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\VerifyOTPRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Requests\Auth\SendVerificationRequest;
use Illuminate\Http\JsonResponse;

class ForgotPasswordController extends Controller
{
    private int $otpExpiredTime = 5;

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Gửi mã OTP đến email hoặc số điện thoại của người dùng
     *
     * @param SendVerificationRequest $request
     *
     * @return JsonResponse
     */
    public function sendVerificationToReceiver(SendVerificationRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $address_receiver = $data["address_receiver"];

            $this->generateOTP($address_receiver);

            return jsonResponse(null, 200, "Ok");
        } catch (Exception $e) {
            return jsonResponse(null, 400, $e->getMessage());
        }
    }

    /**
     * Tạo mã OTP và gửi đến email hoặc số điện thoại của người dùng
     *
     * @param string|int $receiverAddress
     *
     * @return void
     */
    private function generateOTP(string | int $receiverAddress): void
    {
        try {
            $otp = random_int(100000, 999999);

            if (filter_var($receiverAddress, FILTER_VALIDATE_EMAIL)) {
                $user = User::where("email", $receiverAddress)->first();
                if (!$user) {
                    throw new Exception("User not found");
                }

                $user->update([
                    "otp"         => $otp,
                    "otp_send_at" => now()
                ]);

                $user->sendEmailVerification($receiverAddress, $user);
            } else {
                if (str_starts_with($receiverAddress, "0")) {
                    $formatedPhoneNumberSend = "+84" . substr($receiverAddress, 1);
                    $formatedPhoneNumberFind = $receiverAddress;
                } else {
                    $formatedPhoneNumberSend = $receiverAddress;
                    $formatedPhoneNumberFind = "0" . substr($receiverAddress, 3);
                }

                $user = User::where("phone", $formatedPhoneNumberFind)->first();
                if (!$user) {
                    throw new Exception("User not found");
                }

                $user->update([
                    "otp"         => $otp,
                    "otp_send_at" => now()
                ]);

                $user->sendSmsVerification($formatedPhoneNumberSend, "Nhap ma OTP " . $otp . " de xac nhan. Quy khach KHONG CUNG CAP OTP cho bat ky ai.");
            }
        } catch (Exception $e) {
            jsonResponse(null, 400, $e->getMessage());
            return;
        }
    }

    /**
     * Kiểm tra mã OTP của người dùng đã nhập có đúng hay không
     *
     * @param VerifyOTPRequest $request
     *
     * @return JsonResponse
     */
    public function verifiedOTP(VerifyOTPRequest $request): JsonResponse
    {
        try {
            $data    = $request->validated();
            $otpData = $data['otp'];

            $user = User::where('otp', $otpData)->first();

            if (!$user) {
                return jsonResponse(null, 404, 'Bạn đã nhập sai mã OTP');
            }

            $otpSentTime             = Carbon::parse($user->otp_send_at);
            $currentTime             = now();
            $timeDifferenceInMinutes = $otpSentTime->diffInMinutes($currentTime);

            if ($timeDifferenceInMinutes > $this->otpExpiredTime) {
                return jsonResponse(null, 422, 'Mã OTP đã hết hạn');
            }

            $user->update([
                'otp'         => null,
                'otp_send_at' => null
            ]);

            return jsonResponse(null, 200, "Verification successful");
        } catch (Exception $e) {
            return jsonResponse(null, 400, $e->getMessage());
        }
    }

    /**
     * Reset lại mật khẩu của người dùng
     *
     * @param ResetPasswordRequest $request
     *
     * @return JsonResponse
     */
    public function resetPassword(ResetPasswordRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $receiverAddress = $data['address_receiver'];

            if (filter_var($receiverAddress, FILTER_VALIDATE_EMAIL)) {
                $user = User::where('email', $receiverAddress)->first();
            } else {
                if (substr($receiverAddress, 0, 1) == "0") {
                    $formatedPhoneNumberFind = $receiverAddress;
                } else {
                    $formatedPhoneNumberFind = "0" . substr($receiverAddress, 3);
                }

                $user = User::where('phone', $formatedPhoneNumberFind)->first();
            }

            if (!$user) {
                return jsonResponse(null, 404, 'User not found');
            }

            $user->update([
                'password' => bcrypt($data['password'])
            ]);

            return jsonResponse(null, 200, "Reset password successful");
        } catch (Exception $e) {
            return jsonResponse(null, 400, $e->getMessage());
        }
    }
}
