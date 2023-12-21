<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'name'          => 'Đồ Chơi - Mẹ & Bé',
                'slug'          => 'do-choi-me-be',
                'thumbnail_url' => 'images/products/2023/11/226301adcc7660ffcf44a61bb6df99b7.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 2,
                'name'          => 'Điện Thoại - Máy Tính Bảng',
                'slug'          => 'dien-thoai-may-tinh-bang',
                'thumbnail_url' => 'images/products/2023/11/fe98a4afa2d3e5142dc8096addc4e40b.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 3,
                'name'          => 'NGON',
                'slug'          => 'ngon',
                'thumbnail_url' => 'images/products/2023/11/d8b02f8a0d958c74539316e8cd437cbd.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 4,
                'name'          => 'Làm Đẹp - Sức Khỏe',
                'slug'          => 'lam-dep-suc-khoe',
                'thumbnail_url' => 'images/products/2023/11/d7ca146de7198a6808580239e381a0c8.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 5,
                'name'          => 'Điện Gia Dụng',
                'slug'          => 'dien-gia-dung',
                'thumbnail_url' => 'images/products/2023/11/e6ea3ffc1fcde3b6224d2bb691ea16a2.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 6,
                'name'          => 'Thời trang nữ',
                'slug'          => 'thoi-trang-nu',
                'thumbnail_url' => 'images/products/2023/11/48cbaafe144c25d5065786ecace86d38.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 7,
                'name'          => 'Thời trang nam',
                'slug'          => 'thoi-trang-nam',
                'thumbnail_url' => 'images/products/2023/11/384ca1a678c4ee93a0886a204f47645d.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 8,
                'name'          => 'Giày - Dép nữ',
                'slug'          => 'giay-dep-nu',
                'thumbnail_url' => 'images/products/2023/11/96216aae6dd0e2beeb5e91d301649d28.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 9,
                'name'          => 'Túi thời trang nữ',
                'slug'          => 'tui-thoi-trang-nu',
                'thumbnail_url' => 'images/products/2023/11/6524d2ecbec216816d91b6066452e3f2.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 10,
                'name'          => 'Giày - Dép nam',
                'slug'          => 'giay-dep-nam',
                'thumbnail_url' => 'images/products/2023/11/5d53b60efb9448b6a1609c825c29fa40.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 11,
                'name'          => 'Túi thời trang nam',
                'slug'          => 'tui-thoi-trang-nam',
                'thumbnail_url' => 'images/products/2023/11/669e6a133118e5439d6c175e27c1f963.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 12,
                'name'          => 'Balo và Vali',
                'slug'          => 'balo-va-vali',
                'thumbnail_url' => 'images/products/2023/11/1110651bd36a3e0d9b962cf135c818ee.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 13,
                'name'          => 'Phụ kiện thời trang',
                'slug'          => 'phu-kien-thoi-trang',
                'thumbnail_url' => 'images/products/2023/11/49c6189a0e1c1bf7cb91b01ff6d3fe43.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 14,
                'name'          => 'Đồng hồ và Trang sức',
                'slug'          => 'dong-ho-va-trang-suc',
                'thumbnail_url' => 'images/products/2023/11/5924758b5c36f3b1c43b6843f52d6dd2.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 15,
                'name'          => 'Laptop - Máy Vi Tính - Linh kiện',
                'slug'          => 'laptop-may-vi-tinh-linh-kien',
                'thumbnail_url' => 'images/products/2023/11/3ffdb7dbfafd5f8330783e1df20747f6.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 16,
                'name'          => 'Nhà Cửa - Đời Sống',
                'slug'          => 'nha-cua-doi-song',
                'thumbnail_url' => 'images/products/2023/11/7e2185d2cf1bca72d5aeac385a865b2b.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 17,
                'name'          => 'Cross Border - Hàng Quốc Tế',
                'slug'          => 'cross-border-hang-quoc-te',
                'thumbnail_url' => 'images/products/2023/11/eeee1801c838468d94af9997ec2bbe42.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 18,
                'name'          => 'Bách Hóa Online',
                'slug'          => 'bach-hoa-online',
                'thumbnail_url' => 'images/products/2023/11/d8b02f8a0d958c74539316e8cd437cbd.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 19,
                'name'          => 'Thiết Bị Số - Phụ Kiện Số',
                'slug'          => 'thiet-bi-kts-phu-kien-so',
                'thumbnail_url' => 'images/products/2023/11/d900f845e51e95a2c41b5b035468f959.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 20,
                'name'          => 'Voucher - Dịch vụ',
                'slug'          => 'voucher-dich-vu',
                'thumbnail_url' => 'images/products/2023/11/Referafriendvoucherimage_20.webp',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 21,
                'name'          => 'Ô Tô - Xe Máy - Xe Đạp',
                'slug'          => 'o-to-xe-may-xe-dap',
                'thumbnail_url' => 'images/products/2023/11/c6cd9e2849854630ed74ff1678db8f19.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 22,
                'name'          => 'Nhà Sách Tiki',
                'slug'          => 'nha-sach-tiki',
                'thumbnail_url' => 'images/products/2023/11/afa9b3b474bf7ad70f10dd6443211d5f.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 23,
                'name'          => 'Điện Tử - Điện Lạnh',
                'slug'          => 'dien-tu-dien-lanh',
                'thumbnail_url' => 'images/products/2023/11/64c561c4ced585c74b9c292208e4995a.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 24,
                'name'          => 'Thể Thao - Dã Ngoại',
                'slug'          => 'the-thao-da-ngoai',
                'thumbnail_url' => 'images/products/2023/11/00941c9eb338ea62a47d5b1e042843d8.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 25,
                'name'          => 'Máy Ảnh - Máy Quay Phim',
                'slug'          => 'may-anh-may-quay-phim',
                'thumbnail_url' => 'images/products/2023/11/e4976f3fa4061ab310c11d2a1b759e5b.png',
                'parent_id'     => null,
                'status'        => 1,
            ],
            [
                'id'            => 26,
                'name'          => 'Sản phẩm Tài chính - Bảo hiểm',
                'slug'          => 'san-pham-tai-chinh-bao-hiem',
                'thumbnail_url' => 'images/products/2023/11/logo-bao-hiem-xa-hoi-viet-nam.png',
                'parent_id'     => null,
                'status'        => 1,
            ]
        ];

        foreach ($data as $categoryData) {
            Category::create($categoryData);
        }
    }
}
