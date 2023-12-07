<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Shop;
use App\Models\Product;
use Exception;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();
        $totalRecords = 1000;
        $chunkSize = 100;
    
        DB::beginTransaction();
    
        try {
            $orderDetail = [];
            $order = collect(Order::all()->modelKeys());
            $shop = collect(Shop::all()->modelKeys());
            $product = collect(Product::all()->modelKeys());
            $product_name = ['[Bảo hành 6 năm tại nhà] Ghế Massage Toàn Thân Đa Năng Toshiko T21 Pro điều khiển giọng nói, Công Nghệ Nhiệt Hồng Ngoại Tiên Tiến, Hỗ Trợ giảm tình trạng đau mỏi người, ghế massage toàn thân, ghế massage giá rẻ','NEVER GIVE UP, mã G112. Áo thun nam nữ in chữ siêu đẹp, form unisex. Áo phông GOKING hàng hiệu, quà tặng cao cấp cho gia đình, cặp đôi, hội nhóm, doanh nghiệp','Gia đình là số 1, mã LV2. Áo thun hàng hiệu GOKING, form unisex cho nam nữ, trẻ em, bé trai gái. Áo phông in hình chữ đẹp. Quà tặng cao cấp cho gia đình, cặp đôi, hội nhóm, doanh nghiệp','Áo Thun Nam Ngắn Tay 5S PREMIUM, Chất Liệu Cotton Siêu Mềm, Mát, Thấm Hút Tốt, Thiết Kế Thể Thao, Khỏe Khoắn (TSO23008)','Quần Túi Hộp Tháo Ống US ARMY U880 Chuyên Phượt Chất Vải Gió Cao Cấp Mau Khô Ống Có Thể Tháo Rời Làm Quần Short -HÀNG CHÍNH HÃNG','Áo khoác dù 2 mặt chống Nước LADOS - 2027 , Form đẹp, chống nắng, chống nước tốt','Quần short nam big size quần sọt nam thể thao chống nóng quần đùi nam mặc nhà quần thun nam cotton 4 chiều co giãn cao cấp WSB2','Áo Sơ Mi Nam Dài Tay Sọc Chữ Mã GM11 Thời Trang EMEY LUXURY Thiết Kế Nam Tính Lịch Lãm Chuẩn Form','[ Có Ảnh Thật ] Áo thun trơn tay lỡ form rộng unisex - Phông trơn','PARIS, mã G108. Áo phông GOKING hàng hiệu, form unisex cho nam nữ, trẻ em, bé trai gái. Áo thun in hình siêu đẹp, quà tặng cao cấp cho gia đình, cặp đôi, hội nhóm, doanh nghiệp.','Áo thun nam dài tay Julido, Chất thun cotton xịn bo tay và hông mẫu thu đông AT1357','Dép Đi Trong Nhà, Văn Phòng, Nhà Tắm Chống Trơn Đúc Liền DP03','Bộ 2 cặp lót giày 4D bảo vệ gót chân và chống tuột gót giày (loại vuông) - buybox - BBPK53','Dép Quai Ngang Nam Nữ Siêu Nhẹ Tăng Chiều Cao Chống Trơn DP02','Chai xịt tạo bọt vệ sinh giày cao cấp, chất tẩy rửa giày, làm sạch, trắng sáng và khử mốc giày hiệu quả - Hàng chính hãng','Giày thể thao nữ ZAVAS đế cao 3cm màu trắng bằng da không bong tróc mang êm chân S411 - Giày Sneaker Nữ Chính Hãng','Chai xịt giày khử mùi hôi giày hôi chân Nano Xclean For Shoes 100ml - Hương Trà Xanh - Nano Bạc AHT Corp (AHTC)','Combo 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2','Sét 2 miếng lót gót chân cao su mềm bảo vệ gót chân khi mang giày ,chống nứt gót ,bảo vệ mắt cá ,chống đau chân'];           
            $product_image = ['images/products/2023/11/516ddca92e4280238ff235f4f90dca2f.png.webp','images/products/2023/11/567b8853602c8ac65e53dc5a12bfdc9f.png.webp','images/products/2023/11/e47cc2c17cb6cbb14887382f125a94b1.jpg.webp','images/products/2023/11/835362872ccb08137e86b0e0409bbed7.jpg.webp','images/products/2023/11/079d405fad16002f40a7f4206ab9ce5d.jpg.webp'];
            $product_price =  [11590000,99000,69000,119000,523000,1203000,59000,160000,69000,269000,414000,185000];
            $product_quantity = [1,2,3,5,6,1,2];
            for ($j = 1; $j <= $totalRecords; $j++) {
    
                $orderDetail[] = [
                    'product_name' => $product_name[array_rand($product_name)],
                    'product_image' => $product_image[array_rand($product_image)],
                    'product_price' => $product_price[array_rand($product_price)],
                    'product_quantity' => $product_quantity[array_rand($product_quantity)],
                    'product_id' => $product->random(),
                    'shop_id' => $shop->random(),
                    'order_id' => $order->random(),
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString()
                ];
            }
    
            $chunks = array_chunk($orderDetail, $chunkSize);
            foreach ($chunks as $chunk) {
                DB::table('order_detail')->insert($chunk);
                $orderDetail = [];
            }
    
            DB::commit();
        } catch (Exception $e) {
            echo $e->getMessage();
            DB::rollBack();
        }
    }
}
