<?php

namespace App\Http\Controllers\API\Admin;

use Exception;
use Carbon\Carbon;
use App\Models\ViewCount;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class TrafficWebsiteController extends Controller
{
    private int $limitNumDate  = 7;
    private string $formatDate = 'd/m/Y';

    private string $totalView;
    private string $conversionRate;
    private string $totalBuyer;

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $deviceType = $request->device_type;
        $pageType   = $request->page_type;

        $startDate = $request->start_date;
        $endDate   = $request->end_date;

        $startDate = Carbon::createFromFormat('d/m/Y', $startDate);
        $endDate   = Carbon::createFromFormat('d/m/Y', $endDate);

        $this->limitNumDate = $endDate->diffInDays($startDate) + 1;

        try {
            $response = [
                $this->responseTotalViews($deviceType, $pageType, $startDate, $endDate),
                $this->responseConversionRate($deviceType, $pageType, $startDate, $endDate),
                $this->responseTotalBuyers($deviceType, $pageType, $startDate, $endDate)
            ];

            return jsonResponse($response, 200, 'Success');

        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    private function responseTotalViews($deviceType, $pageType, $startDate, $endDate): array
    {
        $totalView = ViewCount::where('shop_id', $this->getShopId())
            ->when($pageType && $pageType !== 'all', function ($query) use ($pageType) {
                $query->where('page_type', $pageType);
            })
            ->when($deviceType && $deviceType !== 'all', function ($query) use ($deviceType) {
                $query->where('device_type', $deviceType);
            })
            ->whereDate('date_viewed', ">=", $startDate)
            ->whereDate('date_viewed', "<=", $endDate)
            ->sum('count');

        $totalViewByDate = ViewCount::where('shop_id', $this->getShopId())
            ->when($deviceType && $deviceType !== 'all', function ($query) use ($deviceType) {
                $query->where('device_type', $deviceType);
            })
            ->when($pageType && $pageType !== 'all', function ($query) use ($pageType) {
                $query->where('page_type', $pageType);
            })
            ->whereDate('date_viewed', ">=", $startDate)
            ->whereDate('date_viewed', "<=", $endDate)
            ->selectRaw('date_viewed, sum(count) as total_count')
            ->groupBy('date_viewed')
            ->orderByDesc('date_viewed')
            ->take($this->limitNumDate)
            ->pluck('total_count', 'date_viewed')
            ->transform(function ($count, $date) {
                return [
                    'year'  => Carbon::parse($date)->format($this->formatDate),
                    'value' => (int) $count
                ];
            })
            ->values()
            ->toArray();

        return $this->getResponseData(
            1,
            'totalView',
            (int) $totalView,
            125.3,
            'primary_box',
            $this->gapDateValue($startDate, $endDate, $deviceType, $pageType, 'count'),
            $totalViewByDate
        );
    }

    private function responseConversionRate($deviceType, $pageType, $startDate, $endDate): array
    {
        $totalView  = $this->responseTotalViews($deviceType, $pageType, $startDate, $endDate)['value'];
        $totalBuyer = $this->responseTotalBuyers($deviceType, $pageType, $startDate, $endDate)['value'];

        $conversionRate = $totalView > 0 ? ($totalBuyer / $totalView) * 100 : 0;

        $totalConversionRateByDate = ViewCount::groupBy('date_viewed')
            ->where('shop_id', $this->getShopId())
            ->when($deviceType && $deviceType !== 'all', function ($query) use ($deviceType) {
                $query->where('device_type', $deviceType);
            })
            ->when($pageType && $pageType !== 'all', function ($query) use ($pageType) {
                $query->where('page_type', $pageType);
            })
            ->selectRaw('date_viewed, sum(is_buy) as total_buyer, sum(count) as total_count')
            ->orderBy('date_viewed', 'desc')
            ->take($this->limitNumDate)
            ->get(['date_viewed', 'total_buyer', 'total_count'])
            ->transform(function ($item) {
                $conversionRate = $item->total_count > 0 ? round(($item->total_buyer / $item->total_count) * 100, 2) : 0;

                return [
                    "year"    => Carbon::parse($item->date_viewed)->format($this->formatDate),
                    "percent" => true,
                    "value"   => (int) $conversionRate
                ];
            })
            ->values()
            ->toArray();

        return $this->getResponseData(
            2,
            "conversionRate",
            $conversionRate,
            100,
            "orange_box",
            0,
            $totalConversionRateByDate
        );
    }

    private function responseTotalBuyers($deviceType, $pageType, $startDate, $endDate): array
    {
        $totalBuyer = ViewCount::where('shop_id', $this->getShopId())
            ->when($deviceType && $deviceType !== 'all', function ($query) use ($deviceType) {
                $query->where('device_type', $deviceType);
            })
            ->when($pageType && $pageType !== 'all', function ($query) use ($pageType) {
                $query->where('page_type', $pageType);
            })
            ->whereDate('date_viewed', ">=", $startDate)
            ->whereDate('date_viewed', "<=", $endDate)
            ->sum('is_buy');

        $this->totalBuyer = $totalBuyer;

        $totalBuyerByDate = ViewCount::groupBy('date_viewed')
            ->where('shop_id', auth()->user()->shop->id)
            ->when($deviceType && $deviceType !== 'all', function ($query) use ($deviceType) {
                $query->where('device_type', $deviceType);
            })
            ->when($pageType && $pageType !== 'all', function ($query) use ($pageType) {
                $query->where('page_type', $pageType);
            })
            ->whereDate('date_viewed', ">=", $startDate)
            ->whereDate('date_viewed', "<=", $endDate)
            ->selectRaw('date_viewed, sum(is_buy) as total_buyer')
            ->orderBy('date_viewed', 'desc')
            ->take($this->limitNumDate)
            ->pluck('total_buyer', 'date_viewed')
            ->transform(function ($count, $date) {
                return [
                    "year"  => Carbon::parse($date)->format($this->formatDate),
                    "value" => (int) $count
                ];
            })
            ->values()
            ->toArray();

        return $this->getResponseData(
            3,
            "buyer",
            $totalBuyer,
            94.8,
            "purple_box",
            $this->gapDateValue($startDate, $endDate, $deviceType, $pageType, 'is_buy'),
            $totalBuyerByDate
        );
    }

    private function getResponseData($id, $title, $value, $percent, $fill_color, $gap, $data): array
    {
        return [
            'id'         => $id,
            'title'      => $title,
            'value'      => $value,
            'percent'    => $percent,
            'fill_color' => $fill_color,
            'gap'        => $gap,
            'data'       => $data
        ];
    }

    private function getShopId()
    {
        return auth()->user()->shop->id;
    }

    private function gapDateValue($startDate, $endDate, $deviceType, $pageType, $count)
    {
        $startDate = ViewCount::where('shop_id', $this->getShopId())
            ->when($deviceType && $deviceType !== 'all', function ($query) use ($deviceType) {
                $query->where('device_type', $deviceType);
            })
            ->when($pageType && $pageType !== 'all', function ($query) use ($pageType) {
                $query->where('page_type', $pageType);
            })
            ->whereDate('date_viewed', $startDate)
            ->sum($count);

        $endDate = ViewCount::where('shop_id', $this->getShopId())
            ->when($deviceType && $deviceType !== 'all', function ($query) use ($deviceType) {
                $query->where('device_type', $deviceType);
            })
            ->when($pageType && $pageType !== 'all', function ($query) use ($pageType) {
                $query->where('page_type', $pageType);
            })
            ->whereDate('date_viewed', $endDate)
            ->sum($count);

        $dateValue = $startDate > 0 ? round((($endDate - $startDate) / $startDate) * 100, 2) : 0;

        return $dateValue;
    }
}
