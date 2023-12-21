<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use SebastianBergmann\Diff\Exception;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getTopProducts(string $time): JsonResponse
    {
        try {
            $user = Auth::user();
            [$start_date, $end_date] = $this->getDateRange($time);

            $products = Product::select('name as type', 'sold_count as value')
                ->where('shop_id', $user->shop_id)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->orderBy('sold_count', 'desc')
                ->limit(5)
                ->get();

            return jsonResponse($products, 200, 'Get data successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    private function getDateRange(string $time): array
    {
        $end_date = Carbon::now();

        $start_date = match ($time) {
            '7days'    => $end_date->copy()->subDays(7),
            '1month'   => $end_date->copy()->subMonth(),
            '1quarter' => $end_date->copy()->subMonths(4),
            '1year'    => $end_date->copy()->subYear(),
            default    => throw new InvalidArgumentException('Invalid time parameter'),
        };

        return [$start_date, $end_date];
    }

    public function getOrderStatus(string $time): JsonResponse
    {
        try {
            $user = Auth::user();
            [$start_date, $end_date] = $this->getDateRange($time);

            $productCount = Product::where('shop_id', $user->shop_id)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->count();

            $totalPrice = Order::where('shop_id', $user->shop_id)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->sum('total_price');


            $orderCount = Order::where('shop_id', $user->shop_id)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->count();

            $data = [
                [
                    'id'         => 1,
                    'meta_title' => "admin_shop.reports.sales.piechart.return_refund",
                    'title'      => "admin_shop.reports.sales.order_status_data.return",
                    'value'      => $productCount,
                    'unit'       => "admin_shop.reports.sales.piechart.return_refund",
                ],
                [
                    'id'         => 2,
                    'meta_title' => "admin_shop.reports.sales.order_status_data.paid",
                    'title'      => "admin_shop.reports.sales.order_status_data.payment",
                    'value'      => $totalPrice,
                    'unit'       => "currency",
                ],
                [
                    'id'         => 3,
                    'meta_title' => "admin_shop.reports.sales.order_status_data.qty_orders",
                    'title'      => "admin_shop.reports.sales.order_status_data.orders_uppercase",
                    'value'      => $orderCount,
                    'unit'       => "admin_shop.reports.sales.order_status_data.orders_lowercase",
                ],
            ];

            return jsonResponse($data, 200, 'Get data successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function getRevenue(string $time): JsonResponse
    {
        try {
            $user = Auth::user();

            $format = 'Y-m-d';
            $orders = Order::where('shop_id', $user->shop_id)->get();

            $groups = $orders->groupBy(function ($order) use ($format) {
                return Carbon::parse($order->created_at)->format($format);
            });

            $groups = $groups->map(function ($group) {
                return $group->sum('total_price');
            });

            $data = [];
            foreach ($groups as $time => $value) {
                $object = [
                    'time'  => $time,
                    'value' => $value,
                ];
                $data[] = $object;
            }

            $data         = collect($data);
            $totalRevenue = $data->sum('value');
            $data         = $data->values();

            $chart_data = [
                'total_revenue' => $totalRevenue,
                'chart'         => $data,
            ];

            return jsonResponse($chart_data, 200, 'Get data successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');

        }
    }

    public function getOrderShipping(string $time): jsonResponse
    {
        try {
            $user = Auth::user();
            [$start_date, $end_date] = $this->getDateRange($time);

            $orderStatuses = [
                1 => 'Chờ xác nhận',
                2 => 'Đang xử lý',
                3 => 'Đang vận chuyển',
                4 => 'Đã hủy',
                5 => 'Đã giao',
            ];

            $orderCounts = Order::where('shop_id', $user->shop_id)
                ->whereIn('order_status_id', array_keys($orderStatuses))
                ->whereBetween('created_at', [$start_date, $end_date])
                ->select('order_status_id', DB::raw('COUNT(*) as count'))
                ->groupBy('order_status_id')
                ->pluck('count', 'order_status_id')
                ->all();

            $data = collect($orderStatuses)->map(function ($label, $status) use ($orderCounts) {
                return (object)[
                    'type'  => $label,
                    'sales' => $orderCounts[$status] ?? 0,
                ];
            })->values();

            return jsonResponse($data, 200, 'Get data successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function getOrdersPending(string $time): JsonResponse
    {
        try {
            $user = Auth::user();
            [$start_date, $end_date] = $this->getDateRange($time);


            $total_order_waiting    = Order::where('shop_id', $user->shop_id)
                ->where('order_status_id', 1)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->count();
            $total_order_processing = Order::where('shop_id', $user->shop_id)
                ->where('order_status_id', 2)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->count();
            $total_order_shipping   = Order::where('shop_id', $user->shop_id)
                ->where('order_status_id', 3)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->count();
            $total_order_canceled   = Order::where('shop_id', $user->shop_id)
                ->where('order_status_id', 4)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->count();
            $total_order_delivered  = Order::where('shop_id', $user->shop_id)
                ->where('order_status_id', 5)->whereBetween('created_at', [$start_date, $end_date])
                ->count();

            $data = [
                (object)[
                    'id'    => 1,
                    'icon'  => 'faFileCircleCheck',
                    'title' => "admin_shop.dashboard.title.awaiting_confirmation",
                    'value' => $total_order_waiting,
                    'link'  => "awaiting_confirmation",
                ],
                (object)[
                    'id'    => 2,
                    'icon'  => 'faBoxOpen',
                    'title' => "admin_shop.dashboard.title.in_progress",
                    'value' => $total_order_processing,
                    'link'  => "processing",
                ],
                (object)[
                    'id'    => 3,
                    'icon'  => 'faTruck',
                    'title' => "admin_shop.dashboard.title.in_transit",
                    'value' => $total_order_shipping,
                    'link'  => "shipping",
                ],
                (object)[
                    'id'    => 4,
                    'icon'  => 'faHandHoldingDollar',
                    'title' => "admin_shop.dashboard.title.delivered",
                    'value' => $total_order_delivered,
                    'link'  => "delivered",
                ],
                (object)[
                    'id'    => 5,
                    'icon'  => 'faSackXmark',
                    'title' => "admin_shop.dashboard.title.cancelled",
                    'value' => $total_order_canceled,
                    'link'  => "cancelled",
                ],
            ];

            return jsonResponse($data, 200, 'Get data successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function getBusinessResult(string $time): JsonResponse
    {
        try {
            $user = Auth::user();
            [$start_date, $end_date] = $this->getDateRangeMulti($time);


            $total_order_canceled = Order::where('shop_id', $user->shop_id)
                ->where('order_status_id', 4)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->count();

            $revenue = Order::where('shop_id', $user->shop_id)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->sum('total_price');


            $orderNew = Order::where('shop_id', $user->shop_id)
                ->whereBetween('created_at', [$start_date, $end_date])
                ->count();

            $data = [
                (object)[
                    'id'         => 1,
                    'icon'       => 'faHandHoldingDollar',
                    'title'      => 'admin_shop.dashboard.title.revenue',
                    'value'      => (int)$revenue,
                    'type'       => 'currency',
                    'background' => 'linear-gradient( 102.1deg,  rgba(96,221,142,1) 8.7%, rgba(24,138,141,1) 88.1% )'
                ],
                (object)[
                    'id'         => 2,
                    'icon'       => 'faPeopleCarryBox',
                    'title'      => 'admin_shop.dashboard.title.new_orders',
                    'value'      => $orderNew,
                    'type'       => null,
                    'background' => 'radial-gradient( circle farthest-corner at 92.3% 71.5%,  rgba(83,138,214,1) 0%, rgba(134,231,214,1) 90% )'
                ],
                (object)[
                    'id'         => 3,
                    'icon'       => 'faSackXmark',
                    'title'      => 'admin_shop.dashboard.title.cancelled_orders',
                    'value'      => $total_order_canceled,
                    'type'       => null,
                    'background' => 'linear-gradient( 112.5deg,  rgba(236,62,98,1) 1.5%, rgba(235,108,108,1) 17.9%, rgba(241,163,163,1) 57.8%, rgba(254,217,217,1) 89.9% )'
                ]
            ];

            return jsonResponse($data, 200, 'Get business result successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    private function getDateRangeMulti(string $time): array
    {
        $end_date = Carbon::now();

        $start_date = match ($time) {
            'today'      => $end_date->copy()->startOfDay(),
            'this_month' => $end_date->copy()->startOfMonth(),
            'this_year'  => $end_date->copy()->startOfYear(),
            default      => throw new InvalidArgumentException('Invalid time parameter'),
        };

        return [$start_date, $end_date];
    }
}
