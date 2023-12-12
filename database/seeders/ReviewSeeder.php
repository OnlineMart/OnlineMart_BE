<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use App\Models\Shop;
use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $content = [
            "Áo đẹp đóng gói kỹ sẽ ủng hộ shop 5 sao",
            "Vãi mịn, mát, co giãn tốt",
            "Vãi mịn, mát, co giãn tốt",
            "Hàng đẹp chất lượng ok lắm đường may mũi chỉ đẹp chỉnh chu chuyên nghiệp tương đương hàng shop lớn ngoài cửa hàng, tem mạc đầy đủ, đóng gói chắc chắn, đặc biệt hỗ trợ đổi size nhanh gọn lẹ phản hồi nhanh",
            "Đóng gói đẹp, giao hàng nhanh, sản phẩm chất lượng từ chất vải đến đường may, phôm dáng, chồng mình rất thích, sẽ ủng hộ shop nữa, sản phẩm đáng để mua nhé, à quan trọng là giá cả cũng hợp lý nữa",
            "Nên mua nhé mn ơi , vải mặc mát . Đúng với hình ảnh shop thân thiện dễ thương nên cho 5sao . Chất vải quá mong đợi của mình so với giá tiền . Mn nên đặt tăng 1 size nhé shop 5 sao ⭐️",
            "Quần jean nam này thực sự ấn tượng với chất lượng và đường may tinh tế, tạo nên sự sang trọng tương đương hàng shop lớn.",
            "Áo thun nữ có chất liệu vô cùng thoải mái, đường may chuyên nghiệp, và sự chăm sóc đặc biệt trong từng chi tiết.",
            "Bộ đồ thể thao nam không chỉ nổi bật với thiết kế hiện đại mà còn chinh phục với chất lượng đỉnh cao, đảm bảo độ co giãn tốt.",
            "Đôi giày dép nữ đẹp mắt, chất liệu êm ái và đế giày thoải mái, thích hợp cho mọi hoạt động hàng ngày.",
            "Áo sơ mi nam với đường may chỉnh chu và chất liệu cao cấp, tạo nên vẻ lịch lãm và chuyên nghiệp.",
            "Quần short nữ không chỉ thời trang mà còn linh hoạt với độ co giãn, phù hợp cho nhiều dịp khác nhau.",
            "Đôi giày sneaker nam không chỉ là một phụ kiện thời trang mà còn là sự kết hợp hoàn hảo giữa phong cách và thoải mái.",
            "Bộ đồ công sở nữ với chất liệu mềm mại và form dáng đẹp, giúp bạn tỏa sáng ở mọi nơi.",
            "Áo khoác nam không chỉ ấn tượng với chất liệu chống nước mà còn với sự tiện ích khi có thể thay đổi size nhanh chóng.",
            "Đôi giày cao gót nữ là sự lựa chọn hoàn hảo cho những buổi tiệc, với chất liệu chất lượng và độ bền cao.",
            "Áo len nữ không chỉ ấm áp mà còn tạo nên vẻ dễ thương và thoải mái cho mùa đông.",
            "Quần jogger nam với chất liệu co giãn tốt và đường may đẹp, mang lại sự thoải mái trong mọi hoạt động.",
            "Áo polo nữ với chất liệu thoáng khí và form dáng thoải mái, phù hợp cho cả những ngày nắng nóng.",
            "Quần kaki nam không chỉ lịch lãm mà còn thoải mái, đem lại sự tự tin trong mọi tình huống.",
            "Áo khoác denim nữ với sự đa dạng về kiểu dáng, phối màu và chất liệu đảm bảo đáp ứng mọi sở thích thời trang.",
            "Đôi giày slip-on nam không chỉ tiện lợi mà còn thời trang, là sự lựa chọn hoàn hảo cho những ngày bận rộn.",
            "Áo thun crop top nữ không chỉ cá tính mà còn thoải mái, phù hợp cho những buổi dạo phố.",
            "Quần legging nam với chất liệu co giãn tốt, không chỉ thoải mái mà còn giúp tôn lên vóc dáng.",
            "Áo khoác da nữ không chỉ ấn tượng với vẻ ngoại hình mà còn với độ bền và chống nước.",
            "Áo ba lỗ nam với chất liệu co giãn và form dáng thoải mái, là sự lựa chọn hoàn hảo cho những buổi tập luyện.",
            "Bộ đồ đôi nam nữ không chỉ đẹp mắt mà còn thoải mái, tạo nên sự hòa quyện và thân thiện.",
            "Áo khoác bomber nữ với thiết kế hiện đại và chất liệu chống nước, giữ ấm và thoải mái.",
            "Áo thun henley nam với sự chăm sóc đặc biệt ở từng chi tiết, mang lại sự thoải mái và phong cách.",
            "Quần áo đôi nam nữ với sự kết hợp hài hòa giữa thời trang và tình cảm.",
            "Đầm maxi nữ không chỉ sang trọng mà còn thoải mái, là sự lựa chọn hoàn hảo cho những dịp quan trọng.",
            "Áo thun polo nam với chất liệu cao cấp và form dáng thoải mái, phù hợp cho cả những buổi gặp gỡ quan trọng.",
            "Quần áo công sở nữ với sự tinh tế và chất liệu thoải mái, giúp bạn tự tin hơn trong công việc.",
            "Áo khoác dù nam không chỉ chống gió mà còn với sự nhẹ nhàng và thuận tiện khi đổi size.",
            "Áo thun basic nữ với thiết kế đơn giản nhưng vô cùng tinh tế, phù hợp cho nhiều hoàn cảnh.",
            "Quần áo thể thao nam không chỉ thoải mái mà còn với chất liệu thoáng khí, giúp bạn tỏa sáng trong mọi hoạt động.",
            "Áo khoác trench coat nữ với sự lịch lãm và chất liệu chống nước, phù hợp cho mọi thời tiết.",
            "Áo đồng phục nam với chất liệu bền bỉ và đường may chắc chắn, làm nổi bật tinh thần đồng đội.",
            "Áo thun oversized nữ không chỉ thoải mái mà còn với sự năng động và trẻ trung.",
            "Giày boot nam với sự mạnh mẽ và đẳng cấp, làm tăng phần nam tính cho bản thân.",
            "Áo khoác nỉ nữ với chất liệu mềm mại và form dáng thoải mái, phù hợp cho những ngày se lạnh.",
            "Áo thun raglan nam với sự khéo léo trong thiết kế và chất liệu thoải mái, làm nổi bật phong cách.",
            "Bộ đồ đôi nữ không chỉ tạo nên sự đồng điệu mà còn với chất liệu thoải mái, giúp bạn và đối tác thân thiện hơn.",
            "Áo phông nam với chất liệu cotton cao cấp và form dáng thoải mái, phù hợp cho những ngày dạo phố và giải trí.",
        ];

        $shops    = collect(Shop::all()->modelKeys());
        $user = collect(User::all()->modelKeys());
        $order = collect(Order::all()->modelKeys());

        $parentId = null;

        $agree = [
            "Êm chân",
            "Kiểu dáng đẹp, năng động",
            "Thoáng khí",
            "Trọng lượng nhẹ",
            "Chất liệu bền bỉ",
            "Phối màu hài hòa",
            "Hỗ trợ đầu gối tốt",
            "Nâng cao độ thoải mái",
            "Thiết kế ergonomics",
            "Đế giày linh hoạt",
            "Cảm giác êm ái như đi trên đám mây",
            "Dễ dàng vệ sinh và chùi rửa",
            "Độ co giãn tốt",
            "Khả năng chống trơn trượt",
            "Phủ lớp chống thấm nước",
            "Dáng đi tự tin",
            "Phản hồi đàn hồi tốt",
            "Thấm hút mồ hôi hiệu quả",
            "Phù hợp với mọi loại trang phục"
        ];

        $disagree = [
            "Xấu",
            "Không đẹp",
            "Gây khó chịu khi mang",
            "Không thoáng khí",
            "Trọng lượng nặng",
            "Chất liệu kém chất lượng",
            "Phối màu không hài hòa",
            "Không hỗ trợ đầu gối",
            "Giữ nhiệt quá mức",
            "Thiết kế không thoải mái",
            "Đế giày cứng và không linh hoạt",
            "Cảm giác đau chân sau thời gian dài sử dụng",
            "Khó vệ sinh và chùi rửa",
            "Độ co giãn kém",
            "Nguy cơ trơn trượt cao",
            "Không chống thấm nước",
            "Dáng đi không tự tin",
            "Phản hồi đàn hồi kém",
            "Thấm hút mồ hôi kém",
            "Không phù hợp với mọi loại trang phục"
        ];

        $createdAt = Carbon::parse(now()->subYears(rand(1, 5))->subDays(rand(1, 365))->subHours(rand(1, 24))->subMinutes(rand(1, 60))->subSeconds(rand(1, 60))->toDateTimeString());

        $updatedAt = Carbon::parse(now()->subYears(rand(0, 5))->subDays(rand(0, 365))->subHours(rand(0, 24))->subMinutes(rand(0, 60))->subSeconds(rand(0, 60))->toDateTimeString());

        $finalUpdatedAt = max($createdAt, $updatedAt)->toDateTimeString();



        for ($i = 1; $i <= 100; $i++) {
            $numReviews = rand(0, 4);

            for ($j = 0; $j < $numReviews; $j++) {
                $reviewData = [
                    'content'    => $content[array_rand($content)],
                    'user_id'    => $user->random(),
                    'product_id' => $i,
                    'rating'     => (rand(2, 10) / 2),
                    'like_count' => rand(0, 500),
                    'parent_id'  => $parentId,
                    'shop_id'    => $shops->random(),
                    'order_id'   => $order->random(),
                    'agree'      => implode(', ', collect($agree)->random(rand(0, 4))->all()),
                    'disagree'   => implode(', ', collect($disagree)->random(rand(0, 4))->all()),
                    'created_at' => $createdAt,
                    'updated_at' => $finalUpdatedAt,
                ];
                Review::create($reviewData);
            }
        }
    }
}