<?php

return [
    /*
     * name phải nhỏ hơn 255 kí tự - KHÔNG ĐƯỢC TRÙNG
     * regular_price: giá bán chưa giảm giá
     * sale_price: giá bán sau khi giảm giá
     * sku: mã sản phẩm - KHÔNG ĐƯỢC TRÙNG
     * status: trạng thái sản phẩm - ĐỂ LÀ SELLING ĐỂ HIỂN THỊ BÊN USER
     * origin: xuất xứ sản phẩm - VN - Việt nam
     * shop_id: để mặc định là 1
     * category_id: id của category - vào CategorySeeder để lấy cho phù hợp
     * supplier_id: id của supplier
     * galllery: ảnh phụ của sản phẩm - đường dẫn ảnh phải đúng - lấy trên s3
     * variants: thuộc tính của sản phẩm - xem ví dụ ở dưới
     * Thêm tối đa 2 biến thể
     * Nếu 2 biến thể thì lỗi 1 tí
     * 1 biến thể thì không có lỗi gì
     * variant_values thì thêm nhiêu cũng được
     *
     * Nếu không có biến thể thì thêm "stock_qty"
     * Nếu có biến thể thì thêm "quantity" bỏ "stock_qty"
     */

    'products' => [
        [
            'name'          => '[Bảo hành 6 năm tại nhà] Ghế Massage Toàn Thân Đa Năng Toshiko T21 Pro điều khiển giọng nói, Công Nghệ Nhiệt Hồng Ngoại Tiên Tiến, Hỗ Trợ giảm tình trạng đau mỏi người, ghế massage toàn thân, ghế massage giá rẻ',
            'regular_price' => 11590000,
            'sale_price'    => 0,
            'thumbnail_url' => "images/products/2023/11/516ddca92e4280238ff235f4f90dca2f.png.webp",
            'description'   => '<p>TÍNH NĂNG ƯU VIỆT</p>
            <p>Hệ thống con lăn 3D bám sát cột sống với các kỹ thuật massage chân thực như bàn tay con người, con lăn sẽ tác động theo ba chiều: dài, rộng, sâu và di chuyển lên xuống cùng thao tác xoay tròn, tạo ra các thao tác xoa, miết và day ấn tại chỗ giúp thư giãn làm giảm đau nhức hiệu quả.</p>
            <p>- Thương hiệu: Toshiko<br>- Ghế Massage Toàn Thân Nhật Bản Đa Năng Toshiko T21 PRO điều khiển ghế massage bằng giọng nói, Chức năng massage AI công nghệ Nhật Bản cùng hệ thống con lăn 3D Cao Cấp giúp giảm nhanh tình trạng đau mỏi cơ thể, đau cổ vai gáy, thư giãn Máy Massage Toàn Thân Đa Năng<br>- Chế độ massage với dòng ghế massage con lăn 3D cao cấp, massage các vùng cổ vai gáy, lưng, hông. Giúp cải tình trạng đau mỏi xương khớp, cải thiện sức khỏe, cuộc sống.<br>- Nhân viên kỹ thuật Toshiko giao hàng, hướng dẫn sử dụng, láp đặt tại nhà, bảo dưỡng định kỳ tại nhà miễn phí năm từ 1-2 lần.<br>- Bảo hành 6 năm, bảo trì chọn đời<br>- Đổi trả miễn phí trong vòng 15 ngày nếu phát hiện lỗi nghiêm trọng từ NSX.<br>- Nhận ngay bộ quà tặng trị giá 1,3 triệu: Máy đo huyết áp hoặc máy đo đường huyết, bạt chùm bảo vệ ghế, gối chữ U cao cấp đi kèm.<br>- Ghế đa dạng các bài massage: Nhào, bóp, miết, tì, ray, massage nhiệt hồng ngoại lên đến 40 độ C. Chế độ massage không trọng lực ngã về sau 170 độ.<br>- Hệ thống 30 túi khí, ôm sát cơ thể, bóp thả nhẹ nhàng, lưu thông khí huyết, giảm tê bì chân tay, nhức mỏi, tắc ngẽn mạch máu.<br>- Da ghế được thiết kế với dòng da PU cao cấp, có độ bền hàng chục năm.<br>- Sản phẩm đạt chứng chỉ PSE của Nhật về độ an toàn điện, cháy nổ.<br>- Trải nghiệm nghe nhạc thư giãn với hệ thống loa Bluetooth. Bạn có thể vừa massage, vừa mở những bản nhạc mình yêu thích để thư giãn cả cơ thể lẫn tinh thần.<br><span style="color: rgb(255, 255, 255);">#GhếMassageToànThânNhậtBản #GhếMassageĐaĐiểmToànThân #GhếMassageToànThânĐaNăng #GhếMassageToànThânNhật BảnKyoto #GhếMassageToànThânNhậtBản4d #GhếMassageToànThânNhật BảnTàiPhát #GhếMassageToànThânNhậtBảnCg39A #NệmMassageToànThânNhậtBản #NệmMassag ĐaNăngToànThân #MáyMassageToànThânĐaNăngEnsua</span></p>
            <ol><li style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/4d/93/7c/0c4fbe681c21ef377107ab9226c255c4.png" alt="" width="750" height="750"></li>
            </ol><p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/ac/ae/f1/5f43c4359a43cdb17d83344ed6d439c4.png" alt="" width="750" height="1001"></p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/8a/b9/32/bc86676bbaf22f7b0ffc0cf417556f58.png" alt="" width="750" height="984"></p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/4b/ec/03/650521347c9cb8b2c86666bdef195953.png" alt="" width="750" height="1497"></p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/90/10/e0/acaeed028a37be8a7071e6fd1581c55d.png" alt="" width="750" height="2206"></p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/22/64/08/4293aa42956b000ba08328e77bb97dd8.png" alt="" width="750" height="1473"></p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/7c/a0/39/b51c83c6444c0bcb91f05aa349118073.png" alt="" width="750" height="1301"></p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/7d/11/b1/4047ebfe8f5034a589ecb83d1565c5c1.png" alt="" width="750" height="1038"></p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/a1/51/ba/52bd946ad4a5a6a2634a07db6424e580.png" alt="" width="750" height="890"></p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/21/0f/35/d1e259a2db80cc38c6af79c526a1cd11.png" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/9e/49/04/17d4fa02a0328d819cace2dd7408ec76.png" alt="" width="750" height="750"></p>
            <p>* Đa dạng các bài tập massage:</p>
            <p>* Dễ sử dụng kể cả người lớn tuổi</p>
            <p>* Ghế cải thiện giấc ngủ và thư giãn cơ bắp</p>
            <p>LỢI ÍCH ĐEM LẠI</p>
            <p>- Giúp bạn có giấc ngủ ngon, sâu hơn tinh thần luôn thoải mái, minh mẫn, tránh stress.</p>
            <p>- Tăng khả năng tuần hoàn máu, giúp lưu thông máu nhanh cải thiện huyết áp.</p>
            <p style="text-align: center;"><img src="https://salt.tikicdn.com/ts/tmp/88/dc/52/d5ef4d7fc2bb88faf67587573dd9eb9e.png" alt="" width="750" height="750"></p>
            <p>THÔNG TIN SẢN PHẨM</p>
            <p>- Tên sản phẩm: Ghế massage TOSHIKO T21</p>
            <p>- Tải trọng chịu lực: 0-150kg</p>
            <p>- Chất liệu: Da, nệm, nhựa ABS</p>
            <p>- Điện áp: 220v</p>
            <p>- Công suất: 90w</p>
            <p>- Kích thước: 112- 75 - 105 cm</p>
            <p>- Màu sắc: Vàng kem, đen</p>
            <p>CHÍNH SÁCH BẢO HÀNH</p>
            <p>- Cam kết hàng chính hãng 100%</p>
            <p>- Đổi trả miễn phí trong vòng 15 ngày, đổi mới ngay lập tức nếu sản phẩm lỗi</p>
            <p>- Miễn phí giao hàng và lắp đặt tận nơi trên toàn quốc</p>
            <p>- Bảo trì trọn đời</p>
            <p>- Tặng nhiều phần quà hấp dẫn: Máy đo huyết áp, đường huyết, gối chữ U, bạt phủ</p>
            <p>#ghemassagetoanthan #ghe massage #ghemassagetrilieu #matxa #ghematxa #hongngoai #demmatxa #demmassage #vaigay #matxaco #matxachan #matxatay #matxalung #nguoigia #ghemassagecaocap #ghematxacaocap #dungcumassage #dungcumatxa #ghếmassage, #ghếmatxa, #massage, #matxa, #ghếmassa</p>
            <p><span style="color: rgb(255, 255, 255);">[Trả góp 0%] ghế massage máy massage toàn thân ghế mát xa tự động gia dụng máy mát xa đa năng - Ghế Massage Dưới 10 Triệu - Ghế massage phi thuyền 3D</span><br><span style="color: rgb(255, 255, 255);">Ghế massage toàn thân, Ghế đệm massage toàn thân rung đa năng, Thiết bị massage vai gáy,lưng, toàn thân gia dụng dành cho người lớn tuổi</span><br><span style="color: rgb(255, 255, 255);">[Trả góp 0%] ghế massage máy massage toàn thân ghế mát xa tự động gia dụng máy mát xa đa năng - Ghế Massage Dưới 10 Triệu - Ghế massage phi thuyền 3D</span><br><span style="color: rgb(255, 255, 255);">Massage 3D tự động vùng đầu, hông, bắp chân, kích thích tuần hoàn máu, hỗ trợ phục hồi chức năng.- Massage từ đầu đến chân, phần chân có thể nâng hạ điều chỉnh độ dài, phù hợp với nhiều chiều cao của nhiều người, cả nhà cùng nhau sử dụng.- Nhiều đầu massage phân bổ cho đến tận lòng bàn chân, kích thích tuần hoàn máu, thêm túi khí bao trọn lấy cơ thể.- Massage chuyên sâu từ cổ vai gáy đến bàn chân, thêm túi khí- Hệ kết nối Bluetooth phát nhạc chất lượng cao Hifi bản nâng cấp mới nhất, giúp cả cơ thể và tâm hồn bạn đều được thả lỏng.- Có con lăn massage chân, lòng bàn chân.- Các điểm nâng đỡ tản lực đều, diện tích tiếp xúc lớn, massage được nhiều vùng trên cơ thể - Mô phỏng động tác massage của tay người, sảng khoái toàn thân- Massage kiểu Nhật Shiatsu, kể cả tại những vùng khó như cổ, bắp tay, bắp chânGhế massage toàn thân, ghế massage toàn thân giá rẻ, ghế massage, máy massage toàn thân, máy mát xa toàn thân, ghế mát xa, ghế massage elip, ghế mát xa toàn thân, ghế mát xa, ghế mát xa giá rẻ, ghế mát xa xiaomi, ghế mát xa dưới 10 triệu, ghế massage elip, ghế massage elip, ghế massage toàn thân, ghe massage toan than, ghế mát xa toàn thân, ghế massage hàn quốc, ghế massage nhật bản, ghế massage toàn thân nhật bản, ghế massage trị liệu toàn thân, ghế massage hồng ngoại trị liệu, ghế massage hồng ngoại, ghe massage toàn thân, ghe massage gia re, ghế massage family, ghế massage okia, ghế massage cho người cao tuổi, ghế massage toàn than 4D, ghế massage trị liệu, ghế massage akawa, ghế massage gintell ghế massage lưng, máy massage lưng, ghế massage akawa, ghế massage toàn thân 4d, ghế massage toàn thân sl, ghế massage toàn thân nhật, máy massage toàn thân, ghế massage elip, máy mát xa toàn thân, ghế mát xa lưng, ghế massage akawa, ghế massage toàn thân cao cấp, ghế massage cao cấp sang trọng Body massage chair, cheap full body massage chair, massage chair, full body massage machine, body massage chair, massage chair, elliptical massage chair, full body massage chair, massage chair,</span></p>
            <p>&nbsp;</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p>',
            'sku'           => '6607231094963',
            'status'        => 'selling',
            'origin'        => 'VN',
            'shop_id'       => 1,
            'category_id'   => 4,
            'supplier_id'   => 1,
            'galllery'      => json_encode([
                'images/products/2023/11/567b8853602c8ac65e53dc5a12bfdc9f.png.webp',
                'images/products/2023/11/7920fb538e87d78711fb5325a192ba06.png.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Vàng kem' => [
                            'quantity'      => 100, // quantity variant
                            'selling_price' => 11590000,
                            'sale_price'    => 0,
                            'product_code'  => 'ABC'
                        ],
                        'Đen'      => [
                            'quantity'      => 100,
                            'selling_price' => 11590000,
                            'sale_price'    => 11500000,
                            'product_code'  => 'DEF'
                        ]
                    ]
                ]
            ])
        ]
    ]
];
