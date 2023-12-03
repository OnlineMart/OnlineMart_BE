<?php

namespace App\Models;

use Exception;
use Carbon\Carbon;
use App\Models\Product;
use Jenssegers\Agent\Agent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ViewCount extends Model
{
    use HasFactory;

    public const DESKTOP = 'desktop';
    public const MOBILE  = 'mobile';
    public const TABLET  = 'tablet';

    public const PRODUCT = 'product';
    public const SHOP    = 'shop';

    protected $table = 'view_count';

    protected $fillable = [
        'shop_id',
        'product_id',
        'device_type',
        'page_type',
        'count',
        'date_viewed',
        'expired_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function handleViewCount(string $pageType, int $pageId, $isBuy)
    {
        $instance = new self();

        if ($pageType === self::PRODUCT) {
            $instance->handleViewDetailPage($pageId, $isBuy);
        } else if ($pageType === self::SHOP) {
            $instance->handleViewShopPage($pageId);
        }
    }

    private function handleViewDetailPage($shopId, $isBuy)
    {
        $currentDeviceType = $this->getDeviceType();
        $currentDate       = $this->getCurrentDate();

        $existingRecord = self::where('page_type', self::PRODUCT)
            ->where('shop_id', $shopId)
            ->where('device_type', $currentDeviceType)
            ->where('date_viewed', $currentDate)
            ->first();

        if ($existingRecord) {
            $existingRecord->increment('count');

            if ($isBuy) {
                $existingRecord->increment('is_buy');
            }
        } else {
            self::updateOrCreate(
                [
                    'page_type'   => self::PRODUCT,
                    'shop_id'     => $shopId,
                    'device_type' => $currentDeviceType,
                    'date_viewed' => $currentDate
                ],
                [
                    'expired_at' => Carbon::now()->addHour(1)->format('Y-m-d H:i:s'),
                    'count'      => 1,
                    'is_buy'     => 1
                ]
            );
        }
    }

    private function handleViewShopPage($shopId)
    {
        $currentDeviceType = $this->getDeviceType();
        $currentDate       = $this->getCurrentDate();

        $existingRecord = self::where('page_type', self::SHOP)
            ->where('shop_id', $shopId)
            ->where('device_type', $currentDeviceType)
            ->where('date_viewed', $currentDate)
            ->first();

        if ($existingRecord) {
            $existingRecord->increment('count');
        } else {
            self::updateOrCreate(
                [
                    'page_type'   => self::SHOP,
                    'shop_id'     => $shopId,
                    'device_type' => $currentDeviceType,
                    'date_viewed' => $currentDate
                ],
                [
                    'expired_at' => Carbon::now()->addDays(1)->format('Y-m-d'),
                    'count'      => 1
                ]
            );
        }
    }

    private function getDeviceType()
    {
        try {
            $agent = new Agent();

            if ($agent->isDesktop()) {
                return self::DESKTOP;
            }

            if ($agent->isMobile()) {
                return self::MOBILE;
            }

            if ($agent->isTablet()) {
                return self::TABLET;
            }

            return self::DESKTOP;
        } catch (Exception $e) {
            throw $e;
        }
    }

    private function getCurrentDate()
    {
        try {
            return Carbon::now()->format('Y-m-d');
        } catch (Exception $e) {
            throw $e;
        }
    }
}
