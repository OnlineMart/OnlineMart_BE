<?php

use Carbon\Carbon;

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
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 4,
            'supplier_id'   => 1,
            'gallery'       => json_encode([
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
        ],
        [
            'name'          => 'NEVER GIVE UP, mã G112. Áo thun nam nữ in chữ siêu đẹp, form unisex. Áo phông GOKING hàng hiệu, quà tặng cao cấp cho gia đình, cặp đôi, hội nhóm, doanh nghiệp',
            'regular_price' => 99000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/e47cc2c17cb6cbb14887382f125a94b1.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong><img src="https://salt.tikicdn.com/ts/tmp/82/46/ca/0c947a16bdf2b4443219c72e3fbbcce1.jpg" alt="" width="750" height="597"></strong></p>
                <p><strong>ÁO THUN GOKING CHO NAM NỮ &amp; TRẺ EM</strong></p>
                <ul>
                <li>Made in Vietnam: Được sản xuất bởi con tim và trí óc con người Việt Nam.</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/84/d9/ca/b4a6d45fa2b3f72213634e51bc61a9b3.jpg" alt="" width="502" height="502"></p>
                <ul>
                <li>Chất liệu: Goking có 2 loại vải, 100% cotton và vải thun lạnh.</li>
                <li>Giấy chứng nhận chất lượng và thành phần 100% cotton của Viện Dệt May HCM</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/7e/ac/86/535d6c8e08edcb342fc9196e05da1be2.jpg" alt="" width="502" height="725"></p>
                <p><strong>So sánh vải 100% cotton và vải thun lạnh:</strong></p>
                <p>+ Giá: Vải thun lạnh giá rẻ hơn vải 100% cotton.<br>+ Độ thoáng mát: Vải 100% cotton có độ thoáng mát cao hơn, thấm hút mồ hôi tốt hơn.</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/c5/86/74/a8acf562866d2319b04a75a652eb0b92.jpg" alt="" width="750" height="362"><br>+ Thân thiện môi trường: <br>- Vải thun lạnh: Sợi tổng hợp, ít thân thiện môi trường.<br>- Vải 100% cotton: Sản phẩm tự nhiên, thân thiện môi trường.<br>+ Độ nhăn: <br>- Vải thun lạnh: Không nhăn, không cần ủi.<br>- Vải 100% cotton: Hơi nhăn, có thể ủi nhẹ.<br>+ Xù lông: Cả 2 loại vải đều không xù lông.<br><br></p>
                <p><strong>Thông số áo thun GOKING (Form unisex cho nam, nữ, trẻ em)</strong></p>
                <ul>
                <li>Size 0: Khoảng 8-12kg (vai 26cm; ngang ngực 30cm; dài 40cm)</li>
                <li>Size 2: Khoảng 12-16kg (vai 28cm; ngang ngực 33cm; dài 44cm)</li>
                <li>Size 4: Khoảng 16-20kg (vai 30cm; ngang ngực 36cm; dài 48cm)</li>
                <li>Size 6: Khoảng 20-24kg (vai 32cm; ngang ngực 39cm; dài 52cm)</li>
                <li>Size 8: Khoảng 24-30kg (vai 34cm; ngang ngực 41cm; dài 56cm)</li>
                <li>Size 10: Khoảng 30-36kg (vai 36cm; ngang ngực 43cm; dài 60cm)</li>
                <li>Size XS: Khoảng 36-44kg (vai 40cm; ngang ngực 45cm; dài 65cm)</li>
                <li>Size S: Khoảng 44-52kg (vai 42cm; ngang ngực 47cm; dài 67cm)</li>
                <li>Size M: Khoảng 52-60kg (vai 44cm; ngang ngực 49cm; dài 69cm)</li>
                <li>Size L: Khoảng 60-68kg (vai 46cm; ngang ngực 51cm; dài 71cm)</li>
                <li>Size XL: Khoảng 68-76kg (vai 48cm; ngang ngực 53cm; dài 73cm)</li>
                <li>Size 2XL: Khoảng 76-84kg (vai 50cm; ngang ngực 55cm; dài 75cm)</li>
                <li>Size 3XL: Khoảng 84-94kg (vai 52cm; ngang ngực 57cm; dài 77cm)</li>
                </ul>
                <p>(Cân nặng chỉ mang tính chất tương đối. Nếu vòng bụng hoặc ngực to, nên chọn lớn hơn 1 size. Nếu thích mặc ôm body nên chọn nhỏ hơn 1 size.)</p>
                <ul>
                <li>Goking sẽ là nơi giúp bạn, gia đình, đội nhóm tràn đầy năng lượng, tình cảm ngày càng gắn bó, đoàn kết, yêu thương lẫn nhau.</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/06/69/e3/3def0f3eb9df1ce333ee797141e03d78.jpg" alt="" width="599" height="214"></p>
                <ul>
                <li>Goking Where Life Begins And Love Never Ends.</li>
                </ul>
                <div class="syl-image-wrapper"><img src="https://salt.tikicdn.com/ts/tmp/a6/ef/ef/66afdfc3c63e6efbf3e3d7c68b9f08b2.jpg" alt="" width="750" height="750"></div><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><p>Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hoá đơn VAT không được cung cấp trong trường hợp này.</p></div',
            'sku'           => '3333333331',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode(['images/products/2023/11/e47cc2c17cb6cbb14887382f125a94b1.jpg.webp']),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Navy, vải 100% cotton'  => [
                            'quantity'      => 100,
                            'selling_price' => 99000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM301'
                        ],
                        'Đô, vải 100% cotton'    => [
                            'quantity'      => 100,
                            'selling_price' => 99000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM302'
                        ],
                        'Đỏ tươi, vải thun lạnh' => [
                            'quantity'      => 100,
                            'selling_price' => 99000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM303'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        '3XL: Khoảng 85-95kg' => [
                            'quantity'      => 100,
                            'selling_price' => 99000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM304'
                        ],
                        'L: Khoảng 64-72kg'   => [
                            'quantity'      => 100,
                            'selling_price' => 99000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM305'
                        ],
                        'M: Khoảng 57-64kg'   => [
                            'quantity'      => 100,
                            'selling_price' => 99000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM306'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Gia đình là số 1, mã LV2. Áo thun hàng hiệu GOKING, form unisex cho nam nữ, trẻ em, bé trai gái. Áo phông in hình chữ đẹp. Quà tặng cao cấp cho gia đình, cặp đôi, hội nhóm, doanh nghiệp',
            'regular_price' => 69000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/be0bbb89c11a725179679fa417ec0f94.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong><img src="https://salt.tikicdn.com/ts/tmp/82/46/ca/0c947a16bdf2b4443219c72e3fbbcce1.jpg" alt="" width="500" height="398"></strong></p>
                <p><strong>ÁO THUN GOKING CHO NAM NỮ &amp; TRẺ EM</strong></p>
                <ul>
                <li>Made in Vietnam: Được sản xuất bởi con tim và trí óc con người Việt Nam.</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/84/d9/ca/b4a6d45fa2b3f72213634e51bc61a9b3.jpg" alt="" width="502" height="502"></p>
                <ul>
                <li>Chất liệu: Goking có 2 loại vải, 100% cotton và vải thun lạnh.</li>
                <li>Giấy chứng nhận chất lượng và thành phần 100% cotton của Viện Dệt May HCM</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/7e/ac/86/535d6c8e08edcb342fc9196e05da1be2.jpg" alt="" width="502" height="725"></p>
                <p><strong>So sánh vải 100% cotton và vải thun lạnh:</strong></p>
                <p>+ Giá: Vải thun lạnh giá rẻ hơn vải 100% cotton.<br>+ Độ thoáng mát: Vải 100% cotton có độ thoáng mát cao hơn, thấm hút mồ hôi tốt hơn.</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/c5/86/74/a8acf562866d2319b04a75a652eb0b92.jpg" alt="" width="499" height="241"><br>+ Thân thiện môi trường: <br>- Vải thun lạnh: Sợi tổng hợp, ít thân thiện môi trường.<br>- Vải 100% cotton: Sản phẩm tự nhiên, thân thiện môi trường.<br>+ Độ nhăn: <br>- Vải thun lạnh: Không nhăn, không cần ủi.<br>- Vải 100% cotton: Hơi nhăn, có thể ủi nhẹ.<br>+ Xù lông: Cả 2 loại vải đều không xù lông.<br><br></p>
                <p><strong>Thông số áo thun GOKING (Form unisex cho nam, nữ, trẻ em)</strong></p>
                <ul>
                <li>Size 0: Khoảng 8-12kg (vai 26cm; ngang ngực 30cm; dài 40cm)</li>
                <li>Size 2: Khoảng 12-16kg (vai 28cm; ngang ngực 33cm; dài 44cm)</li>
                <li>Size 4: Khoảng 16-20kg (vai 30cm; ngang ngực 36cm; dài 48cm)</li>
                <li>Size 6: Khoảng 20-24kg (vai 32cm; ngang ngực 39cm; dài 52cm)</li>
                <li>Size 8: Khoảng 24-30kg (vai 34cm; ngang ngực 41cm; dài 56cm)</li>
                <li>Size 10: Khoảng 30-36kg (vai 36cm; ngang ngực 43cm; dài 60cm)</li>
                <li>Size XS: Khoảng 36-44kg (vai 40cm; ngang ngực 45cm; dài 65cm)</li>
                <li>Size S: Khoảng 44-52kg (vai 42cm; ngang ngực 47cm; dài 67cm)</li>
                <li>Size M: Khoảng 52-60kg (vai 44cm; ngang ngực 49cm; dài 69cm)</li>
                <li>Size L: Khoảng 60-68kg (vai 46cm; ngang ngực 51cm; dài 71cm)</li>
                <li>Size XL: Khoảng 68-76kg (vai 48cm; ngang ngực 53cm; dài 73cm)</li>
                <li>Size 2XL: Khoảng 76-84kg (vai 50cm; ngang ngực 55cm; dài 75cm)</li>
                <li>Size 3XL: Khoảng 84-94kg (vai 52cm; ngang ngực 57cm; dài 77cm)</li>
                </ul>
                <p>(Cân nặng chỉ mang tính chất tương đối. Nếu vòng bụng hoặc ngực to, nên chọn lớn hơn 1 size. Nếu thích mặc ôm body nên chọn nhỏ hơn 1 size.)</p>
                <ul>
                <li>Goking sẽ là nơi giúp bạn, gia đình, đội nhóm tràn đầy năng lượng, tình cảm ngày càng gắn bó, đoàn kết, yêu thương lẫn nhau.</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/06/69/e3/3def0f3eb9df1ce333ee797141e03d78.jpg" alt="" width="501" height="179"></p>
                <ul>
                <li>Goking Where Life Begins And Love Never Ends.</li>
                </ul>
                <div class="syl-image-wrapper"><img src="https://salt.tikicdn.com/ts/tmp/a6/ef/ef/66afdfc3c63e6efbf3e3d7c68b9f08b2.jpg" alt="" width="500" height="500"></div><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><p>Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hoá đơn VAT không được cung cấp trong trường hợp này.</p></div>',
            'sku'           => '3333333332',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode(['images/products/2023/11/be0bbb89c11a725179679fa417ec0f94.jpg.webp']),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Vàng, vải 100% cotton'  => [
                            'quantity'      => 100,
                            'selling_price' => 69000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM307'
                        ],
                        'Trắng, vải 100% cotton' => [
                            'quantity'      => 100,
                            'selling_price' => 69000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM308'
                        ],
                        'Đô, vải thun lạnh'      => [
                            'quantity'      => 100,
                            'selling_price' => 69000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM309'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        '3XL: Khoảng 85-95kg' => [
                            'quantity'      => 100,
                            'selling_price' => 69000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM310'
                        ],
                        'L: Khoảng 64-72kg'   => [
                            'quantity'      => 100,
                            'selling_price' => 69000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM311'
                        ],
                        'M: Khoảng 57-64kg'   => [
                            'quantity'      => 100,
                            'selling_price' => 69000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM312'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Áo Thun Nam Ngắn Tay 5S PREMIUM, Chất Liệu Cotton Siêu Mềm, Mát, Thấm Hút Tốt, Thiết Kế Thể Thao, Khỏe Khoắn (TSO23008)',
            'regular_price' => 119000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/835362872ccb08137e86b0e0409bbed7.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><img title="" src="https://salt.tikicdn.com/ts/tmp/2a/e8/c1/5b75690b83afc6f7ef3bcf6bf2bc4ea1.jpg" alt="" width="750" height="950"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/f7/37/37/4ef8ef11cae9fd6aa0757a84265cef9d.jpg" alt="" width="750" height="1022"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/ca/88/d5/03639a44362ed955041cc3a00772b63e.jpg" alt="" width="750" height="942"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/c0/53/e2/b98acd3cc312baefa584cecf69be71bc.jpg" alt="" width="750" height="756"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/c0/59/aa/b8ed07daeed2f2e78dc2ef2e85765c64.jpg" alt="" width="750" height="657"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/40/80/e4/8a3e0c38c8e6eb5805cefdd927db7654.jpg" alt="" width="750" height="750"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/85/cd/fc/c9ba1e550e2f51c491c5215bc4ec2338.jpg" alt="" width="750" height="996"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/61/fb/e2/1f08fec93819a81f21242bbb3f5ad027.jpg" alt="" width="750" height="863"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/9f/e8/47/fd913f4cb26546444aefb656837f1008.jpg" alt="" width="750" height="816"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/ec/f5/54/cf59c5f6412c097b5a264995611f88ab.jpg" alt="" width="750" height="887"></p>
                <p>-------------------------<br>ƯU ĐÃI KHI MUA TẠI 5S:<br>- Click “Theo dõi” shop để nhận ngay VOUCHER giảm giá.<br>- Nhận hàng đánh giá 5* kèm hình ảnh sản phẩm và video, nhắn tin 5S ngay để nhận QUÀ nhé!<br>** 5S OFFICIAL cảm ơn quý khách hàng đã tin tưởng và đồng hành cùng shop. Chúc bạn có một ngày mua sắm thật thoải mái cùng 5S nhé! Đừng ngần ngại nhắn tin cho shop để được hỗ trợ nhanh nhất bạn nhé!</p>
                <p>#ao_thun_nam #ao_thun_nam #ao_thun_nam_dep #ao_thun_nam_dep #ao_thun_body_nam #ao_thun_nam_body #ao_thun_nam_gia_re #ao_phong_nam #ao_phong_nam #ao_phong_nam_dep #ao_phong_nam_dep #ao_phong_nam_hang_hieu #ao_phong_nam_co_tron #ao_thun_nam_co_tron #ao_thun_nam_tay_ngan #ao_thun_nam_ngan_tay #ao_thun_nam_cotton #ao_tay_lo_nam #aos_thun_nam #ao_tshirt #ao_tshirt_nam</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '3333333333',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/835362872ccb08137e86b0e0409bbed7.jpg.webp',
                'images/products/2023/11/c90fe099156cb1b47691b66fee4e9a8f.jpg.webp',
                'images/products/2023/11/77e3846ed800acb3225220df012a8fbb.jpg.webp',
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Nâu'       => [
                            'quantity'      => 100,
                            'selling_price' => 119000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM313'
                        ],
                        'Trắng'     => [
                            'quantity'      => 100,
                            'selling_price' => 119000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM314'
                        ],
                        'Xanh biển' => [
                            'quantity'      => 100,
                            'selling_price' => 119000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM315'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        'L' => [
                            'quantity'      => 100,
                            'selling_price' => 119000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM316'
                        ],
                        'M' => [
                            'quantity'      => 100,
                            'selling_price' => 119000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM317'
                        ],
                        'S' => [
                            'quantity'      => 100,
                            'selling_price' => 119000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM318'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Quần Túi Hộp Tháo Ống US ARMY U880 Chuyên Phượt Chất Vải Gió Cao Cấp Mau Khô Ống Có Thể Tháo Rời Làm Quần Short -HÀNG CHÍNH HÃNG',
            'regular_price' => 523000,
            'sale_price'    => 499000,
            'thumbnail_url' => 'images/products/2023/11/079d405fad16002f40a7f4206ab9ce5d.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong>CAM KẾT CỦA USARMY:</strong></p>
                <p>BẢNG SIZE CHUẨN THEO SỐ ĐO NGƯỜI VIỆT NAM.</p>
                <p>HOÀN 100% GIÁ TRỊ ĐƠN HÀNG NẾU KHÔNG GIỐNG MÔ TẢ</p>
                <p>HỖ TRỢ MIỄN PHÍ ĐỔI - TRẢ SẢN PHẨM MỌI TRƯỜNG HỢP</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/b9/5c/67/257e13b587abbaac730f5a6b4c07f3b6.jpg" alt="" width="750" height="750"></p>
                <p><strong>THÔNG TIN SẢN PHẨM:</strong></p>
                <p>+ Tên sản phẩm: Quần Túi Hộp Tháo Ống US ARMY U880 Chuyên Phượt Chất Vải Gió Cao Cấp Mau Khô Ống Có Thể Tháo Rời Làm Quần Short</p>
                <p>+ Chất liệu: Vải gió</p>
                <p>+ Màu sắc: 2 Màu (Đen và xanh rêu)</p>
                <p>+ Phom dáng: Quần Tháo ống</p>
                <p>+ Size: 29-30-31-32-33-34</p>
                <p>+ Xuất xứ: Nhập khẩu Quảng Châu</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/cd/3f/08/de3fd4b4c336a1f6565bcf7b03ea98c4.jpg" alt="" width="750" height="750"></p>
                <p><strong>TÍNH</strong><strong>&nbsp;NĂNG NỔI BẬT:</strong></p>
                <p>+ Chất vải gió cao cấp, nhẹ, trơn mát, khó thấm nước nhưng nếu có ướt cũng rất nhanh khô</p>
                <p>+ Phù hợp với mọi lứa tuổi</p>
                <p>+ Thiết kế dạng tháo ống có thể tháo ra lắp vào theo nhu cầu</p>
                <p>+ Phù hợp với hoạt động thể thao dã ngoại đi phượt</p>
                <p>+ Cạp chun thoải mái và dễ dàng cho các hoạt động ngoài trời</p>
                <p>+Phong cách túi hộp trẻ trung năng động thời trang</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/e2/70/90/2aa38b728c1e25488e8ec14044c508ac.jpg" alt="" width="750" height="750"></p>
                <p><strong>HƯỚNG</strong><strong>&nbsp;DẪN SỬ DỤNG:</strong></p>
                <p>+ Giặt máy với chu kỳ trung bình và vòng quay ngắn</p>
                <p>+ Giặt với nhiệt độ tối đa 30 độ C</p>
                <p>+ Sấy nhẹ ở nhiệt độ thường</p>
                <p>+ Là ủi không quá 110 độ C</p>
                <p>+ Phơi bằng móc dưới bóng râm</p>
                <p>+ Không sử dụng chất tẩy</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/df/d9/07/567b6355ac3b941eb8081e232e68365c.jpg" alt="" width="750" height="750"></p>
                <p>&nbsp;<strong>LƯU</strong><strong>&nbsp;Ý NHỎ:</strong></p>
                <p>+ Không giặt chung với đồ dễ xước</p>
                <p>+ Cẩn thận vướng mắc khi phơi</p>
                <p><strong>CHÍNH SÁCH ĐỔI- TRẢ:</strong></p>
                <p>+ US ARMY hỗ trợ đổi- trả trong mọi trường hợp: mặc không vừa, không ưng sản phẩm đã đặt, muốn đổi sang sản phẩm khác, khi sản phẩm còn nguyên tem mác và chưa qua sử dụng.</p>
                <p>+ Nếu có bất kì khiếu nại cần US ARMY hỗ trợ về sản phẩm, khi MỞ sản phẩm Quý khách NÊN quay lại video quá trình mở hàng để được đảm bảo 100% vấn đề sẽ được giải quyết.</p>
                <p><strong>ƯU ĐÃI KHI MUA TẠI US ARMY:</strong></p>
                <p>+ Click “Theo dõi” shop để nhận ngay VOUCHER giảm giá.</p>
                <p>** US ARMY cảm ơn quý khách hàng đã tin tưởng và đồng hành cùng shop. Chúc bạn có một ngày mua sắm thật thoải mái cùng Shop nhé! Đừng ngần ngại nhắn tin cho shop để được hỗ trợ nhanh nhất bạn nhé!</p>
                <p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, nơi giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh,</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '3333333334',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/079d405fad16002f40a7f4206ab9ce5d.jpg.webp',
                'images/products/2023/11/1cc23ef0e79079be599f0a0c2a2f3bf8.jpg.webp',
                'images/products/2023/11/c2265b26e1801da251dad4ac4236ce8a.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Xanh rêu' => [
                            'quantity'      => 100,
                            'selling_price' => 549000,
                            'sale_price'    => 499000,
                            'product_code'  => 'OM313'
                        ],
                        'Trắng'    => [
                            'quantity'      => 100,
                            'selling_price' => 598000,
                            'sale_price'    => 525000,
                            'product_code'  => 'OM314'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        'L' => [
                            'quantity'      => 100,
                            'selling_price' => 549000,
                            'sale_price'    => 500000,
                            'product_code'  => 'OM316'
                        ],
                        'M' => [
                            'quantity'      => 100,
                            'selling_price' => 323000,
                            'sale_price'    => 298000,
                            'product_code'  => 'OM317'
                        ],
                        'S' => [
                            'quantity'      => 100,
                            'selling_price' => 323000,
                            'sale_price'    => 298000,
                            'product_code'  => 'OM318'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Áo khoác dù 2 mặt chống Nước LADOS - 2027 , Form đẹp, chống nắng, chống nước tốt',
            'regular_price' => 1203000,
            'sale_price'    => 1198000,
            'thumbnail_url' => 'images/products/2023/11/c480c776dd82bb6938a20d3b75ea2667.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><img src="https://salt.tikicdn.com/ts/tmp/07/f1/8d/a445bc1eb38184386d101fad19045eab.jpg" alt="" width="750" height="749"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/22/f6/a1/ac6995f1a2096f78d16bd61b937b6fe0.jpg" alt="" width="750" height="749"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/02/f2/28/51a98dbad83fdf37f16fc07df322060a.jpg" alt="" width="750" height="749"><img src="https://salt.tikicdn.com/ts/tmp/d0/00/cd/e1ab940e3ec3aeca0c10e5d210c39811.jpg" alt="" width="750" height="750"><img src="https://salt.tikicdn.com/ts/tmp/3c/af/24/31d06031d777cde3260dd756fbe37608.jpg" alt="" width="750" height="750"></p>
                <p><br><br>THÔNG TIN CHI TIẾT<br>MẶC ĐƯỢC 2 MĂT CỰC KỲ TIỆN LỢI<br>Chất liệu: Vải dù chống nước, chống đc mưa bay, mưa nhỏ<br>Đường may tỉ mỉ tinh tế, túi có dây khóa<br>Dây khóa phao, chắc chắn, kéo êm<br>Kiểu dáng rộng vừa thoải mái khi mặc, đơn giản dễ phối đồ<br>màu sắc : 1 mặt đen, 1 mặt màu<br>Thích hợp cho đi chống nắng, hoặc thu đông, tránh gió<br>Thích hợp cho cả nam, nữ, mọi lứa tuổi</p>
                <p>CHÍNH SÁCH.<br>Là khách hàng của LADOS, bạn sẽ được:<br>Cam kết chất lượng và mẫu mã sản phẩm giống với hình ảnh.<br>Hoàn tiền nếu sản phẩm không giống với mô tả.</p>
                <p>Shop luôn sẵn sàng trả lời - inbox để tư vấn</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '3333333335',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/c480c776dd82bb6938a20d3b75ea2667.jpg.webp',
                'images/products/2023/11/bd028e1fd27763a8c5fac40bdbc1caad.jpg.webp',
                'images/products/2023/11/438c56acf094e3030a9d84a4cf8ca3d8.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Xám đậm'  => [
                            'quantity'      => 100,
                            'selling_price' => 1203000,
                            'sale_price'    => 1198000,
                            'product_code'  => 'OM319'
                        ],
                        'Đen'      => [
                            'quantity'      => 100,
                            'selling_price' => 1203000,
                            'sale_price'    => 1198000,
                            'product_code'  => 'OM320'
                        ],
                        'Xanh Mực' => [
                            'quantity'      => 100,
                            'selling_price' => 1203000,
                            'sale_price'    => 1198000,
                            'product_code'  => 'OM321'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        'L' => [
                            'quantity'      => 100,
                            'selling_price' => 1379000,
                            'sale_price'    => 1352000,
                            'product_code'  => 'OM322'
                        ],
                        'M' => [
                            'quantity'      => 100,
                            'selling_price' => 1323000,
                            'sale_price'    => 1298000,
                            'product_code'  => 'OM323'
                        ],
                        'S' => [
                            'quantity'      => 100,
                            'selling_price' => 1203000,
                            'sale_price'    => 1198000,
                            'product_code'  => 'OM324'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Quần short nam big size quần sọt nam thể thao chống nóng quần đùi nam mặc nhà quần thun nam cotton 4 chiều co giãn cao cấp WSB2',
            'regular_price' => 59000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/1a5b973e411c65ad25b851ece4892482.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong>Có hình ảnh video dưới mô tả</strong></p>
                <p>Quần short nam thể thao cho người tập gym hoặc mặc nhà , 2 bên túi có khóa dây kéo an toàn<br>Đường may chắc chắn, thiết kế body nhưng thun co giãn thoải mái khi mặc làm tôn lên vẻ nam tính, quyến rũ<br>Chất liệu thun 4 chiều mềm mại cực kì thoáng mát,thấm hút tốt, bền đẹp, dễ chịu,đặc biệt không gây khó chịu khi sử dụng<br>Thiết kế lưng thun co giãn lưng quần giúp cố định quần khi mặc<br>Quần short nam thể thao thiết kế đơn giản, nhiều gam màu làm tăng sự nam tính, hấp dẫn và lôi cuốn cho phái mạnh<br>Có thể kết hợp cùng nhiều trang phục hàng ngày, từ đi dạo, đi chơi, đi tập thể thao </p>
                <p><strong>Quần short nam thể thao đồ gym thun 4 chiều, quần đùi nam mặc nhà thể thao cao cấp ShopN6 - QSB2 (Nhiều Màu)</strong></p>
                <p><strong>Size : Xem bảng bên dưới</strong></p>
                <p><strong>Quần short nam thể thao đồ gym thun 4 chiều, quần đùi nam mặc nhà thể thao cao cấp ShopN6 - QSB2 (Nhiều Màu)&nbsp;</strong>cực đẹp, tinh tế &amp; đẳng cấp, phong cách, năng động. Chất liệu thun 4 chiều thể thao cao cấp, thiết kế đẹp, kiểu dáng body, thoải mái và thời trang.</p>
                <p><strong>Quần short nam thể thao đồ gym thun 4 chiều, quần đùi nam mặc nhà thể thao cao cấp ShopN6 - QSB2 (Nhiều Màu)&nbsp;</strong>với thiết kế mạnh mẽ và nam tính, cho bạn sự thoải mái, khỏe khoắn khi kết hợp với nhiều loại trang phục khác nhau.</p>
                <p><strong>Quần short nam thể thao đồ gym thun 4 chiều, quần đùi nam mặc nhà thể thao cao cấp ShopN6 - QSB2 (Nhiều Màu)&nbsp;</strong>làm bằng thun 4 chiều co giãn cao cấp . Thấm hút tốt, khử mùi, bền đẹp, dễ chịu, đặc biệt không gây khó chịu khi sử dụng lâu</p>
                <p><strong>Dây khóa kéo túi cao cấp an toàn, 2 túi 2 bên có dây khóa kéo an toàn.&nbsp;</strong></p>
                <p><strong>&nbsp; Size&nbsp; &nbsp; &nbsp; &nbsp; Cân Nặng<br></strong><em>&nbsp; &nbsp; M&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 50kg – 58kg</em><br><em>&nbsp; &nbsp; L&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 58kg – 65kg</em><br><em>&nbsp; &nbsp;XL&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;65kg – 70kg</em><br><em>&nbsp; XXL&nbsp; &nbsp; &nbsp; &nbsp; 70kg – 80kg</em><br><br></p>
                <p><strong>+ Khách thích form body thì lấy nhỏ lại 1 Size</strong></p>
                <p><strong>+ Khách có bụng thì lấy to hơn 1 Size</strong></p>
                <p><strong>+ Nên lấy Size Lớn hơn khi cân nhắc giữa 2 Size</strong></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/49/be/09/fa0c6f833ad42872c8da09016873d981.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/16/82/41/596faf3cf4b4ec431e7740578f3563c0.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/7c/82/d8/7fac2b661140b249711a049e58e56be0.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/d4/33/0d/b0e512a4e372c3c01835f4621b068a3c.JPG" alt="" width="750" height="750"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '3333333336',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/1a5b973e411c65ad25b851ece4892482.jpg.webp',
                'images/products/2023/11/b5d479769a1185e4c304e8cfb07f43ee.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Xám'      => [
                            'quantity'      => 100,
                            'selling_price' => 59000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM325'
                        ],
                        'Xanh Đen' => [
                            'quantity'      => 100,
                            'selling_price' => 59000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM326'
                        ],
                        'Trắng'    => [
                            'quantity'      => 100,
                            'selling_price' => 59000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM327'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        'L'  => [
                            'quantity'      => 100,
                            'selling_price' => 379000,
                            'sale_price'    => 352000,
                            'product_code'  => 'OM328'
                        ],
                        'M'  => [
                            'quantity'      => 100,
                            'selling_price' => 323000,
                            'sale_price'    => 298000,
                            'product_code'  => 'OM329'
                        ],
                        'XL' => [
                            'quantity'      => 100,
                            'selling_price' => 203000,
                            'sale_price'    => 198000,
                            'product_code'  => 'OM330'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Áo Sơ Mi Nam Dài Tay Sọc Chữ Mã GM11 Thời Trang EMEY LUXURY Thiết Kế Nam Tính Lịch Lãm Chuẩn Form',
            'regular_price' => 160000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/4b995ed14c8b8113cf4c6a69993eb1fb.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style="">
                <ul>
                   <p> Áo sơ mi nam dài tay, vải đẹp cao cấp loại 1 trên thị trường</p>
                   <p> ÁO sơ mi nam (sơ mi nam) được thiết kế với form dáng trẻ trung với form áo ôm, rất chuẩn như hình.</p>
                   <p>Chúng tôi hiện nay cung cấp áo sơ mi nam với giá bán lẻ tốt nhất trên thị trường.</p>
                   <p>️Giá cạnh tranh nhất do chính nhà máy sản xuất với số lượng lớn.</p>
                   <p>️Chúng tôi không nói sản phẩm của mình có chất lượng cao nhưng phải khẳng định chất lượng sản phẩm vượt trội so với giá tiền.</p>
                   <p>️Uy tín bán hàng được đặt lên hàng đầu, không kinh doanh chộp giật.</p>
                   <p>️Vì sản phẩm được sản xuất với số lượng lớn để có giá cạnh tranh nên không thể tránh được sai sót. Nếu quý khách hàng không hài lòng chúng tôi sẵn sàng hỗ trợ đổi trả.</p>
                   <p>️Rất mong nhận được ý kiến đóng góp của Quý khách hàng để chúng tôi cải thiện chất lượng dịch vụ tốt hơn.</p>
                   <p>Thông tin chi tiết sản phẩm:</p>
                   <p>️Chất vải sờ mịn không nhăn, không bai, không xù .</p>
                   <p>️Cổ Trụ và tay làm bằng chất liệu cao cấp, không sợ bong tróc, ép keo cực kỳ kỹ lưỡng .</p>
                   <p>️Fom Body cực chuẩn, ôm trọn bờ vai mặc cực trẻ trung và phong cách, phù hợp mọi hoàn cảnh kể cả đi làm và đi chơi</p>
                   <p>Sản phẩm có các size như sau:</p>
                   <p>SIZE M: Cân nặng 48-55kg, Cao 1m50 - 1m62, " Áo Dài giữa cổ sau đến lai bầu 68cm, Vai 38cm, Vòng ngực 88cm, Chiết eo 76cm, Dài tay 54cm"</p>
                   <p>SIZE L: Can nặng 55- 60kg, Cao 1m60 - 1m68, " Áo Dài giữa cổ sau đến lai bầu 70cm, Vai 40cm, Vòng Ngực 92cm, Chiết eo 80cm, Dài tay 56cm"</p>
                   <p>SIZE XL: cân nặng 60 - 65kg, Cao 1m65 - 1m72, " Áo Dài giữa cổ sau xuống lai bầu 72cm, Vai 42cm, Vòng ngực 96cm, Chiết eo 84cm, Dài tay 58cm"</p>
                   <p>SIZE XXL: Cân nặng 65 -69kg Cao 1m7. - 1m80, Áo Dài giữa cổ sau xuống lai bầu 74cm, Vai 46cm, Vòng Ngực 100cm, Chiết eo 90cm, Dài tay 60cm"</p>
                </ul>

                <p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><p>Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hoá đơn VAT không được cung cấp trong trường hợp này.</p></div>',
            'sku'           => '3333333337',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/4b995ed14c8b8113cf4c6a69993eb1fb.jpg.webp',
                'images/products/2023/11/7d27edb34ffca41e422ec584b0d7b80f.jpg.webp',
                'images/products/2023/11/6474e64092bbe6ab521457258b9ed349.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Xám'   => [
                            'quantity'      => 100,
                            'selling_price' => 160000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM331'
                        ],
                        'Đen'   => [
                            'quantity'      => 100,
                            'selling_price' => 160000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM332'
                        ],
                        'Trắng' => [
                            'quantity'      => 100,
                            'selling_price' => 160000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM333'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        'L'  => [
                            'quantity'      => 100,
                            'selling_price' => 160000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM334'
                        ],
                        'M'  => [
                            'quantity'      => 100,
                            'selling_price' => 160000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM335'
                        ],
                        'XL' => [
                            'quantity'      => 100,
                            'selling_price' => 160000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM336'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => '[ Có Ảnh Thật ] Áo thun trơn tay lỡ form rộng unisex - Phông trơn',
            'regular_price' => 69000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/9d465272c8c6e937f85948481cec7f02.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Bạn ơi đừng ngại nữa, nhà mình còn gì đâu.</p>
                <p>Chỉ toàn là áo xịn, mua rồi là nghiện đó!!!!</p>
                <p>&nbsp;</p>
                <p>Áo thun tay lỡ form rộng xịn xò cập bến rồi đây ạ</p>
                <p>Với chất liệu thun cotton dày mịn được lựa chọn kĩ lưỡng để phù hợp với mọi hoàn cảnh.</p>
                <p>Thiết kế Unisex sẽ mang đến một outfit năng động và cá tính dù không cần mix-match cầu kì.</p>
                <p>Form áo unisex nam nữ đều mặc được.</p>
                <p>Chiều dài áo 70cm</p>
                <p>Ngang ngực 52cm</p>
                <p>Tay áo dài 26cm</p>
                <p>Ngang vai 53cm</p>
                <p>=&gt; Nếu bạn không rõ mình mặc như thế nào, bạn có thể inbox chiều cao và cân nặng cho 2N ngay nhé, chúng mình sẽ cho bạn lời khuyên chuẩn không cần chỉnh lunnnn!!!</p>
                <p>&nbsp;</p>
                <p>2N CAM KẾT</p>
                <p>Sản phẩm 100% giống mô tả.</p>
                <p>Đảm bảo vải chất lượng.</p>
                <p>Áo được kiểm tra kĩ càng, cẩn thận và tư vấn nhiệt tình trước khi giao hàng.</p>
                <p>Hàng có sẵn, giao hàng ngay khi nhận được đơn.</p>
                <p>Hoàn tiền nếu sản phẩm không giống với mô tả.</p>
                <p>Giao hàng trên toàn quốc, nhận hàng trả tiền.</p>
                <p>&nbsp;</p>
                <p>Lưu ý :</p>
                <p>Kích thước có thể có sai số 1-3 cm do phép đo thủ công.</p>
                <p>Do màn hình và điều kiện ánh sáng khác nhau, màu sắc thực tế của sản phẩm có thể chênh lệch khoảng 3-5% ạ!!</p>
                <p>Nếu bạn có bất kỳ câu hỏi nào, rất mong bạn liên hệ với 2N qua mục "Trò chuyện" và chúng tớ sẽ trả lời bạn nhanh nhất có thể ^^.</p>
                <p>&nbsp;</p>
                <p>2N Unisex sẵn sàng phục vụ!!</p>
                <p>#2N #highend #unisex #streetstyle #streetfashion #aothun #somi #aokhoac #thoitrangunisex</p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/6d/9b/85/f84fc97bd6b317a9a4178d7d794a0ed8.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/6d/9b/85/f84fc97bd6b317a9a4178d7d794a0ed8.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/e0/38/fc/1778ef7f39b9a1adc0d31ee65b2f168d.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/e0/38/fc/1778ef7f39b9a1adc0d31ee65b2f168d.jpg" alt="" width="750" height="750"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/cb/ad/95/66fe67238d06834e468ae84eca4d94e2.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/cb/ad/95/66fe67238d06834e468ae84eca4d94e2.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/bb/b4/00/41030aae57e392f74ee5248e4c06a11a.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/bb/b4/00/41030aae57e392f74ee5248e4c06a11a.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/37/97/f3/b4bfc7001b7645c650c798d522f087c1.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/37/97/f3/b4bfc7001b7645c650c798d522f087c1.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/33/85/e3/9339feb1ee567e99f4e02c48efd300d7.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/33/85/e3/9339feb1ee567e99f4e02c48efd300d7.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/e6/1b/dd/2b97f6d6e8bde68c5a2c15c1ad0d19d7.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/e6/1b/dd/2b97f6d6e8bde68c5a2c15c1ad0d19d7.jpg" alt="" width="750" height="750"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/2e/ad/eb/c73125adddf2215beb61b7d336757ace.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/2e/ad/eb/c73125adddf2215beb61b7d336757ace.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/fc/65/fb/cf40744e8c813633569286761905388b.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/fc/65/fb/cf40744e8c813633569286761905388b.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/e1/48/c1/cbaa909d87b9e66e28ea21a02ebe0310.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/e1/48/c1/cbaa909d87b9e66e28ea21a02ebe0310.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/d6/d1/a2/d30c099e8063622bacd5d04bd9b7ca79.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/d6/d1/a2/d30c099e8063622bacd5d04bd9b7ca79.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/fc/9f/14/fb837c04914b637d1cf8130c15ad213f.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/fc/9f/14/fb837c04914b637d1cf8130c15ad213f.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/43/72/e5/f88977ee9422c915691bfc3f5c5afea9.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/43/72/e5/f88977ee9422c915691bfc3f5c5afea9.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/92/20/85/3df314984239d9e1a678f8d049441c17.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/92/20/85/3df314984239d9e1a678f8d049441c17.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/15/aa/52/87c82875af4d058bd5f8fc6ed35830d8.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/15/aa/52/87c82875af4d058bd5f8fc6ed35830d8.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/af/b3/bf/7a69c725c2f96bcb62cd9b0d72bc139f.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/af/b3/bf/7a69c725c2f96bcb62cd9b0d72bc139f.jpg" alt="" width="undefined" height="undefined"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/7a/5e/23/7dc50e431db5a38619d738d4ba7f52d1.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/7a/5e/23/7dc50e431db5a38619d738d4ba7f52d1.jpg" alt="" width="undefined" height="undefined"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><p>Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hoá đơn VAT không được cung cấp trong trường hợp này.</p></div>',
            'sku'           => '3333333338',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/9d465272c8c6e937f85948481cec7f02.jpg.webp',
                'images/products/2023/11/11e870a12443a7f752581942e913cdb8.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Trắng' => [
                            'quantity'      => 100,
                            'selling_price' => 69000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM337'
                        ],
                        'Đen'   => [
                            'quantity'      => 100,
                            'selling_price' => 69000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM338'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'PARIS, mã G108. Áo phông GOKING hàng hiệu, form unisex cho nam nữ, trẻ em, bé trai gái. Áo thun in hình siêu đẹp, quà tặng cao cấp cho gia đình, cặp đôi, hội nhóm, doanh nghiệp.',
            'regular_price' => 269000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/30978912f0ed7c22d67d17fd6a8fb52a.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong><img src="https://salt.tikicdn.com/ts/tmp/82/46/ca/0c947a16bdf2b4443219c72e3fbbcce1.jpg" alt="" width="750" height="597"></strong></p>
                <p><strong>ÁO THUN GOKING CHO NAM NỮ &amp; TRẺ EM</strong></p>
                <ul>
                <li>Made in Vietnam: Được sản xuất bởi con tim và trí óc con người Việt Nam.</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/84/d9/ca/b4a6d45fa2b3f72213634e51bc61a9b3.jpg" alt="" width="502" height="502"></p>
                <ul>
                <li>Chất liệu: Goking có 2 loại vải, 100% cotton và vải thun lạnh.</li>
                <li>Giấy chứng nhận chất lượng và thành phần 100% cotton của Viện Dệt May HCM</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/7e/ac/86/535d6c8e08edcb342fc9196e05da1be2.jpg" alt="" width="502" height="725"></p>
                <p><strong>So sánh vải 100% cotton và vải thun lạnh:</strong></p>
                <p>+ Giá: Vải thun lạnh giá rẻ hơn vải 100% cotton.<br>+ Độ thoáng mát: Vải 100% cotton có độ thoáng mát cao hơn, thấm hút mồ hôi tốt hơn.</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/c5/86/74/a8acf562866d2319b04a75a652eb0b92.jpg" alt="" width="750" height="362"><br>+ Thân thiện môi trường: <br>- Vải thun lạnh: Sợi tổng hợp, ít thân thiện môi trường.<br>- Vải 100% cotton: Sản phẩm tự nhiên, thân thiện môi trường.<br>+ Độ nhăn: <br>- Vải thun lạnh: Không nhăn, không cần ủi.<br>- Vải 100% cotton: Hơi nhăn, có thể ủi nhẹ.<br>+ Xù lông: Cả 2 loại vải đều không xù lông.<br><br></p>
                <p><strong>Thông số áo thun GOKING (Form unisex cho nam, nữ, trẻ em)</strong></p>
                <ul>
                <li>Size 0: Khoảng 8-12kg (vai 26cm; ngang ngực 30cm; dài 40cm)</li>
                <li>Size 2: Khoảng 12-16kg (vai 28cm; ngang ngực 33cm; dài 44cm)</li>
                <li>Size 4: Khoảng 16-20kg (vai 30cm; ngang ngực 36cm; dài 48cm)</li>
                <li>Size 6: Khoảng 20-24kg (vai 32cm; ngang ngực 39cm; dài 52cm)</li>
                <li>Size 8: Khoảng 24-30kg (vai 34cm; ngang ngực 41cm; dài 56cm)</li>
                <li>Size 10: Khoảng 30-36kg (vai 36cm; ngang ngực 43cm; dài 60cm)</li>
                <li>Size XS: Khoảng 36-44kg (vai 40cm; ngang ngực 45cm; dài 65cm)</li>
                <li>Size S: Khoảng 44-52kg (vai 42cm; ngang ngực 47cm; dài 67cm)</li>
                <li>Size M: Khoảng 52-60kg (vai 44cm; ngang ngực 49cm; dài 69cm)</li>
                <li>Size L: Khoảng 60-68kg (vai 46cm; ngang ngực 51cm; dài 71cm)</li>
                <li>Size XL: Khoảng 68-76kg (vai 48cm; ngang ngực 53cm; dài 73cm)</li>
                <li>Size 2XL: Khoảng 76-84kg (vai 50cm; ngang ngực 55cm; dài 75cm)</li>
                <li>Size 3XL: Khoảng 84-94kg (vai 52cm; ngang ngực 57cm; dài 77cm)</li>
                </ul>
                <p>(Cân nặng chỉ mang tính chất tương đối. Nếu vòng bụng hoặc ngực to, nên chọn lớn hơn 1 size. Nếu thích mặc ôm body nên chọn nhỏ hơn 1 size.)</p>
                <ul>
                <li>Goking sẽ là nơi giúp bạn, gia đình, đội nhóm tràn đầy năng lượng, tình cảm ngày càng gắn bó, đoàn kết, yêu thương lẫn nhau.</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/06/69/e3/3def0f3eb9df1ce333ee797141e03d78.jpg" alt="" width="599" height="214"></p>
                <ul>
                <li>Goking Where Life Begins And Love Never Ends.</li>
                </ul>
                <div class="syl-image-wrapper"><img src="https://salt.tikicdn.com/ts/tmp/a6/ef/ef/66afdfc3c63e6efbf3e3d7c68b9f08b2.jpg" alt="" width="750" height="750"></div><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><p>Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hoá đơn VAT không được cung cấp trong trường hợp này.</p></div>',
            'sku'           => '3333333339',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/30978912f0ed7c22d67d17fd6a8fb52a.jpg.webp',
                'images/products/2023/11/45af67de5c69cb28e7307368a9397d74.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Vàng'  => [
                            'quantity'      => 100,
                            'selling_price' => 269000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM339'
                        ],
                        'Trắng' => [
                            'quantity'      => 100,
                            'selling_price' => 269000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM340'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        'L'  => [
                            'quantity'      => 100,
                            'selling_price' => 269000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM341'
                        ],
                        'M'  => [
                            'quantity'      => 100,
                            'selling_price' => 269000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM342'
                        ],
                        'XL' => [
                            'quantity'      => 100,
                            'selling_price' => 269000,
                            'sale_price'    => 00,
                            'product_code'  => 'OM343'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Áo thun nam dài tay Julido, Chất thun cotton xịn bo tay và hông mẫu thu đông AT1357',
            'regular_price' => 414000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/a72000b81d3395938d6ddf5de880463c.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Áo thun nam dài tay Julido, Chất thun cotton xịn bo tay và hông mẫu thu đông AT1357</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/4e/7e/5b/4aa5d484d26118c296dc4f2993b7bd80.jpg" alt="" width="750" height="748"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/ce/27/d1/6a6a39e975153b6e4766c981c9670d6a.jpg" alt="" width="750" height="765"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/3d/4d/e4/d07cc79e7cdfab9a983c5e28a8db6df1.jpg" alt="" width="750" height="754"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/01/e9/c7/2df74a135b5cb6b7e4962cf69cfec6cd.jpg" alt="" width="666" height="604"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/ed/8c/14/97cd89e234d60d0f066148e9c6baedc3.jpg" alt="" width="750" height="254"></p>
                <p>Áo Thun Nam Dài Tay Julido AT1357 Cao Cấp 3 Màu Cơ Bản có thiết kế kiểu cơ bản với dáng ôm vừa phải, cổ tròn, tay dài, ngực áo in nhiệt chữ không bong chóc khi giặt.<br>Áo Thun Nam Julido có màu sắc trẻ trung, dễ dàng phối cùng quần jeans hoặc shorts, giày thể thao hoặc giày lười, thích hợp sử dụng trong các dịp đi chơi, gặp gỡ bạn bè<br>Chất liệu là Cotton pha cao cấp được xử lý bằng công nghệ Nano, pha 1% Spandex làm lên <br>Áo Thun Nam Dài Tay Julido Cao Cấp 3 Màu Cơ Bản mềm mát, thoáng khí, <br>Thấm hút mồ hôi tốt đồng thời có khả năng co giãn nhẹ nhàng, tạo cảm giác thoải mái trong mọi hoạt động.<br>Chất vải này rất bền chắc giúp người mặc có thể thoải mái vận động mà không lo vải áo bị xù lông hay bung chỉ.</p>
                <p><em><strong>Hướng dẫn giặt ủi:</strong></em></p>
                <p>Lộn trái áo ra và sử dụng nước giặt để giữ sản phẩm bền màu.<br>- Sau khi giặt, vắt khô và giũ mạnh rồi mới mang đi phơi để áo không bị nhăn.<br>- Để áo khô tự nhiên, phơi trong bóng râm thoáng mát.<br>- Không sử dụng hóa chất, thuốc tẩy trực tiếp lên sản phẩm.<br>- Không ngâm quá lâu trong dung dịch tẩy.<br>Vải Cotton tương đối mịn, chất mềm vừa phải, ít bám bụi giữ dáng không bai gião cho dù giặt nhiều lần.<br>Chất vải này rất bền chắc giúp người mặc có thể thoải mái vận động mà không lo vải áo bị xù lông hay bung chỉ.<br></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333310',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 7,
            'supplier_id'   => 3,
            'gallery'       => json_encode(['images/products/2023/11/a72000b81d3395938d6ddf5de880463c.jpg.webp']),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Đen' => [
                            'quantity'      => 100,
                            'selling_price' => 414000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM344'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        'L (53-60kg)'  => [
                            'quantity'      => 100,
                            'selling_price' => 414000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM345'
                        ],
                        'M (42-52kg)'  => [
                            'quantity'      => 100,
                            'selling_price' => 414000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM346'
                        ],
                        'XL (61-68kg)' => [
                            'quantity'      => 100,
                            'selling_price' => 414000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM347'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Dép Đi Trong Nhà, Văn Phòng, Nhà Tắm Chống Trơn Đúc Liền DP03',
            'regular_price' => 185000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/bfca18f7899188c81db5c20a389c86e5.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p style="text-align: center;">Dép Quai Ngang Home Cao Su, Đi Trong Nhà Chống Trượt Cao Cấp DP03</p>
                <p style="text-align: center;">-- Dép đi chơi,đi phố,đi trong nhà văn phòng đều phù hợp, làm dép đôi, dép nhóm du lịch</p>
                <p style="text-align: center;">-- Chất liệu cao cấp nhanh khô ráo nước, chống trơn cực tốt</p>
                <p style="text-align: center;">-- Dép có độ bền cao,màu sắc cá tính</p>
                <p style="text-align: center;">Dép Quai Ngang Nam Nữ Đều Đi Được.</p>
                <p style="text-align: center;"><img id="https://salt.tikicdn.com/ts/tmp/92/bd/1a/fd47da4e15ead3f1e4ad0fb60c06815b.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/92/bd/1a/fd47da4e15ead3f1e4ad0fb60c06815b.jpg" alt="" width="750" height="750"></p>
                <p style="text-align: center;"><img id="https://salt.tikicdn.com/ts/tmp/85/e5/f7/cd59cbc0c37bc66460deeaa8552144f8.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/85/e5/f7/cd59cbc0c37bc66460deeaa8552144f8.jpg" alt="" width="750" height="750"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/5e/c0/2d/56d175bfab865b6038c51a30d3436994.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/5e/c0/2d/56d175bfab865b6038c51a30d3436994.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333311',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/bfca18f7899188c81db5c20a389c86e5.jpg.webp',
                'images/products/2023/11/2c7adc82383ad314e254aa06eda9cc1c.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Cam'  => [
                            'quantity'      => 100,
                            'selling_price' => 185000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM348'
                        ],
                        'Hồng' => [
                            'quantity'      => 100,
                            'selling_price' => 185000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM349'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        '36-37' => [
                            'quantity'      => 100,
                            'selling_price' => 185000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM350'
                        ],
                        '38-39' => [
                            'quantity'      => 100,
                            'selling_price' => 850000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM351'
                        ],
                        '40-41' => [
                            'quantity'      => 100,
                            'selling_price' => 1850000,
                            'sale_price'    => 00,
                            'product_code'  => 'OM352'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Bộ 2 cặp lót giày 4D bảo vệ gót chân và chống tuột gót giày (loại vuông) - buybox - BBPK53',
            'regular_price' => 30000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/9ae161ea8ded6dbfb2f5c2c99b7bcc3b.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><img src="https://salt.tikicdn.com/ts/tmp/d4/a9/61/78187f036ad4fa94636a8f207d463ce5.jpg" alt="" width="750" height="750"></p>
                <p>Giày cao gót thật quyến rũ và cũng thật "Đau Đớn" đối với đôi bàn chân. Không ít trường hợp bị trầy da chảy máu, chai sần da gót sau, thốn gót chân, thậm chí để lại sẹo. Từ nay không còn phải lo lắng nữa vì đã có lót giày chống tuột gót, bảo vệ tuyệt đối gót chân của bạn.</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/03/ed/bd/e3b03e5747a4e6e6f9b9bbf305dd8031.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/d8/90/07/0dd955051cd49e8903aa6776740a0baa.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/27/91/8b/7cc147a3c784a466ca2cd458016c773c.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/51/16/44/131bc20fbadc7932fa27455eab77b675.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/3b/ec/5d/d306e26d2424766b092ef7abe1dea11a.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/c7/11/16/57477ecc127a818b14aeb0594a2461e7.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/f0/2f/c7/fccd6506012299fa272618eb5624e3e2.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/66/42/88/3d6d5c6d8d7860026ad7b97beee235c1.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/38/71/cb/60f8bc4167a96fbb9a065c6dace06677.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/10/8a/e8/6f5012564f5f47063976c056c5a81dc9.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/95/50/1e/4db41acace1bbc138969b4edc5e216ca.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/c4/ee/e5/c4706bba761d9a6463ed6148ef5aa97a.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/99/f4/69/77efe8dd73948f2311464bae2903c7f0.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/0f/26/5e/f0ef4a953763e7eb28018525bda70b41.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/89/6d/c3/37121969bce7b328b74e18cf559b32f6.jpg" alt="" width="750" height="750"></p>
                <p>CÔNG DỤNG NỔI BẬT</p>
                <p> Giúp chống tuột gót, chống trầy gót sau và giảm nửa size giày.</p>
                <p> Sản phẩm thiết kế 4D nên ôm trọn phần lõm sau mắt cá chân</p>
                <p> Chất liệu mút cao cấp rất êm chân, thấm hút mồ hôi &amp; bền bỉ.</p>
                <p> Sản phẩm có 01 kích thước dùng được cho giày từ: 35 - 36 - 37 - 38 - 39 - 40 - 41 - 42</p>
                <p> Lót giày đa năng sử dụng được cho nhiều loại giày khác nhau như: giày thể thao, giày cao gót, giày búp bê, giày mọi, giày lười...</p>
                <p>THÔNG TIN SẢN PHẨM</p>
                <p>Quy cách: 2 cặp = 4 miếng, dùng cho 2 đôi giày</p>
                <p>Chất liệu: lót giày chống tuột gót sử dụng mút ép vải cao cấp, lót giày có keo dán chuyên dụng để dán cố định vào giày.</p>
                <p>Kích thước: 10 (D) x 3.5 (R) cm, dày 0.4cm.</p>
                <p>Dùng cho giày size từ 35 - 36 - 37 - 38 - 39 - 40.</p>
                <p>Thiết kế: Thiết kế 4D theo cấu tạo và đặc điểm vận động của bàn chân giúp thoải mái khi mang giày.</p>
                <p>Màu sắc: có 2 màu Kem và Đen</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/a2/5d/2c/5617a6a021d76007ff3615ed9680bb81.jpg" alt="" width="750" height="750"></p>
                <p>HƯỚNG DẪN SỬ DỤNG</p>
                <p>1. Vệ sinh bụi bẩn trong lòng giày, lau khô giày</p>
                <p>2. Tháo miếng dán có keo phía sau lót giày</p>
                <p>3. Đặt lót 4D và dán cố định vào giày</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/80/a5/f3/34e10807639039646de4cd1a86b5922a.jpg" alt="" width="750" height="750"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333312',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/9ae161ea8ded6dbfb2f5c2c99b7bcc3b.jpg.webp',
                'images/products/2023/11/9b6322ae6524bb4701efb99a8ddd64ed.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        '1 cặp Kem + 1 cặp Đen' => [
                            'quantity'      => 100,
                            'selling_price' => 30000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM353'
                        ],
                        '2 cặp Kem'             => [
                            'quantity'      => 100,
                            'selling_price' => 30000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM354'
                        ],
                        '2 cặp Đen'             => [
                            'quantity'      => 100,
                            'selling_price' => 30000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM355'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Dép Quai Ngang Nam Nữ Siêu Nhẹ Tăng Chiều Cao Chống Trơn DP02',
            'regular_price' => 75000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/a48681a09fcd4227596107c4f83fe12e.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p style="text-align: center;">MÃ SẢN PHẨM : DÉP ĐÔI NAM NỮ EVA<br>KÈM ẢNH THẬT + VIDEO <br>– KHÔNG ĐỌNG NƯỚC, CHỐNG TRƠN TRƯỢT. DỄ DÀNG VỆ SINH<br>- Dép Bằng Nhựa EVA cao Cấp Siêu Nhẹ.<br>- Đúc Nguyên Khối Siêu Bền<br>- Chiều Cao Đế 4 cm<br>- SIZE : 36 - 43<br>- ĐẾ BẰNG - CHỐNG TRƠN TRƯỢT - ĐI MƯA THOẢI MÁI<br>- MẶT SẦN MA SÁT <br>- MÀU SẮC BASIC DỄ MIX ĐỒ</p>
                <p style="text-align: center;"><img id="https://salt.tikicdn.com/ts/tmp/f3/67/d3/437f99e14f0267f5f6147d5f0ee3dc37.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/f3/67/d3/437f99e14f0267f5f6147d5f0ee3dc37.jpg" alt="" width="750" height="750"></p>
                <p style="text-align: center;"><img id="https://salt.tikicdn.com/ts/tmp/ef/2b/58/82afea4c9bf969b145d69fbe6c7d7257.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/ef/2b/58/82afea4c9bf969b145d69fbe6c7d7257.jpg" alt="" width="750" height="750"></p>
                <p style="text-align: center;"><img id="https://salt.tikicdn.com/ts/tmp/a7/8e/02/770fc5c0dec2f07e9c236d7f55ab44e7.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/a7/8e/02/770fc5c0dec2f07e9c236d7f55ab44e7.jpg" alt="" width="750" height="750"></p>
                <p style="text-align: center;"><img id="https://salt.tikicdn.com/ts/tmp/44/1f/7b/965c077233cc1e014b0da0bdb317eb3e.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/44/1f/7b/965c077233cc1e014b0da0bdb317eb3e.jpg" alt="" width="750" height="750"></p>
                <p><img id="https://salt.tikicdn.com/ts/tmp/6c/70/e4/68dc6f4cf372ca9cecc16785fbf0abfb.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/6c/70/e4/68dc6f4cf372ca9cecc16785fbf0abfb.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333313',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/a48681a09fcd4227596107c4f83fe12e.jpg.webp',
                'images/products/2023/11/0636e6e8e5e8a38ec313a8ad12b8ff0c.jpg.webp',
                'images/products/2023/11/7d754fd3b396c04d9b066e30f4f02284.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Trắng xanh' => [
                            'quantity'      => 100,
                            'selling_price' => 75000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM356'
                        ],
                        'Trắng đen'  => [
                            'quantity'      => 100,
                            'selling_price' => 75000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM357'
                        ],
                        'Đen xanh'   => [
                            'quantity'      => 100,
                            'selling_price' => 75000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM358'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        '36-37' => [
                            'quantity'      => 100,
                            'selling_price' => 75000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM359'
                        ],
                        '38-39' => [
                            'quantity'      => 100,
                            'selling_price' => 750000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM360'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Chai xịt tạo bọt vệ sinh giày cao cấp, chất tẩy rửa giày, làm sạch, trắng sáng và khử mốc giày hiệu quả - Hàng chính hãng',
            'regular_price' => 51700,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/d5a0c1cc5aaccce73fa9d7294f7becf8.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><img src="https://salt.tikicdn.com/ts/tmp/a6/a3/0e/c8229a9253601802689f299fad9860ed.png" alt="" width="750" height="1498"><img src="https://salt.tikicdn.com/ts/tmp/3a/a5/c5/d8c2784e382878f03ade38215858ceca.png" alt="" width="750" height="887"><img src="https://salt.tikicdn.com/ts/tmp/7a/3d/23/9ec0b7d03672798f9d7217c3d9aa4a2c.png" alt="" width="750" height="887"><img src="https://salt.tikicdn.com/ts/tmp/66/74/c7/6abc614023a9b4a2023601cae1487bde.png" alt="" width="750" height="1119"><img src="https://salt.tikicdn.com/ts/tmp/bd/2b/8d/1466525576bc9dc4203b568b7cd34c92.png" alt="" width="750" height="1075"><img src="https://salt.tikicdn.com/ts/tmp/3b/3c/6a/60a28de604533119f5bcd6d4e8dc908f.png" alt="" width="750" height="869"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/06/a6/4a/d4d67ef7928903b15a6eef9d0f7c790d.png" alt="" width="750" height="1075"><img src="https://salt.tikicdn.com/ts/tmp/6c/41/ac/573631573059220dae5a80cc9f71a3e6.png" alt="" width="718" height="1030"></p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/44/eb/5f/89f9383d6f74f129a30a7a25b499d766.png" alt="" width="750" height="676"></p>
                <p>Hướng dẫn sử dụng chai vệ sinh giày sneaker<br>- Bước 1: Lắc nhẹ chai và xịt bọt đều lên phần cần làm sạch (Khoảng cách15-20cm )<br>- Bước 2: Sau khi xịt bọt xong, bạn để bọt trong 2 phút <br>- Bước 3: Sau 2 phút bạn sử dụng bàn chải để chà và lau chùi các bộ phận bạn muốn vệ sinh<br>- Bước 4: Cuối cùng thì dùng khăn mềm để loại bỏ bọt, lâu khô các bụi bẩn. <br>Lưu ý: Đối với vết bẩn cứng đầu, bạn lặp lại bước 1-4 (Từ 1 đến 3 lần). các vết tẩy ố nhẹ có thể clean sạch, còn đối với các vết sơn hay ố lâu ngày cần phải dùng sản phẩm Tẩy ố chuyên để làm sạch.</p>
                <p><strong>Chai xịt bọt tuyết vệ sinh giày Sneaker đa năng</strong></p>
                <p>Thể tích: 200ml<br>Tạo bọt nhẹ, mềm mại và tinh tế<br>Thiết kế vòi phun khí nén, rất dễ sử dụng<br>Tính năng của sản phẩm: khả năng thẩm thấu mạnh, hiệu quả làm sạch nhanh chóng bụi bẩn, nấm mốc, vết ố vàng.<br>Làm sạch các vết bẩn, vết ố nhanh chóng, giúp đôi giày của bạn sáng bóng, trắng sạch như mới<br>Nút nhấn ở đầu tiện lợi, dễ sử dụng<br>Được làm từ công thức an toàn, không gây độc hại, không cần dùng găng tay<br>Chỉ cần lau bằng khăn, không cần rửa lại với nước, giúp bạn tiết kiệm thời gian.</p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/b2/2a/16/9f2d2e35559c42ca9f6f9ee6dad4ce98.jpg" alt=""></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/ba/2f/94/264611533661933f63230a55ed800ffc.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/cc/2f/3e/a3e9e73f8d502d819eaf20a0e3d4d4da.jpg" alt="" width="750" height="750"></p>
                <p>&nbsp;</p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/55/f4/9c/d6760a05a3b1013d467c1173f5aa64e8.jpg" alt="" width="750" height="867"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/80/02/7e/5bee9dff4dccfdbbd7138c7e688a3ee1.jpg" alt="" width="750" height="1018"></p>
                <p>Chân thành cảm ơn quý khách!</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333314',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/d5a0c1cc5aaccce73fa9d7294f7becf8.jpg.webp',
                'images/products/2023/11/860e5ca17e69a053b435eea94ffd25f2.jpg.webp'
            ]),
            'variants'      => json_encode([]),
        ],
        [
            'name'          => 'Giày Boots Cao Cấp da thật 10cm PBOD766-4051',
            'regular_price' => 766000,
            'sale_price'    => 750000,
            'thumbnail_url' => 'images/products/2023/11/2bd4820a9ef5111244a10207f789683e.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><em><strong>Giày Boots Cao Cấp da thật 10cm PBOD766-4051</strong></em></p>
                <p><span style="font-size: 10pt;">Thiết kế mới nhất 2022&nbsp;<br>Khóa kéo bên hông tiện lợi</span></p>
                <p><span style="font-size: 10pt;">đế cao tôn dáng</span></p>
                <p><span style="font-size: 10pt;">Da thật cao cấp mềm êm<br>Hàng Đẹp, Cao cấp<br>Chuẩn hình , Size chuẩn<br><br>Độ bền cao<br><br>Đế bằng thoải mái khi di chuyển<br><br>Nhẹ nhàng, thoải mái<br><br>Kết hợp những loại trang phục trẻ trung , năng động như Chân váy , Quần Jean bó, Short…</span></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/54/b1/65/967debd46f36cdd9faa6e79ceb0945f6.jpg" alt=""></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/75/7e/67/3fece5163ac634a281295c1b0f6be39f.jpg" alt=""></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/fd/cb/75/89bb1fb3c4cb8e7892d73db1d80e3cac.jpg" alt=""></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/19/55/29/f275f2a37e1a9488739b75c09caa313d.jpg" alt=""></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/f9/f0/53/7ed1ecde76bf8a0e81d0aec3c5a4ec6c.jpg" alt=""></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333315',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/2bd4820a9ef5111244a10207f789683e.jpg.webp',
                'images/products/2023/11/a46712dce93dd386042e76795592dee0.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Đen' => [
                            'quantity'      => 100,
                            'selling_price' => 766000,
                            'sale_price'    => 750000,
                            'product_code'  => 'OM361'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        '34' => [
                            'quantity'      => 100,
                            'selling_price' => 766000,
                            'sale_price'    => 750000,
                            'product_code'  => 'OM362'
                        ],
                        '38' => [
                            'quantity'      => 100,
                            'selling_price' => 7660000,
                            'sale_price'    => 750000,
                            'product_code'  => 'OM363'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Giày thể thao nữ ZAVAS đế cao 3cm màu trắng bằng da không bong tróc mang êm chân S411 - Giày Sneaker Nữ Chính Hãng',
            'regular_price' => 2299000,
            'sale_price'    => 2289000,
            'thumbnail_url' => 'images/products/2023/11/1eb40df27e8c5ce7a72be1eb20ba07cb.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><em><strong>Giày thể thao nữ</strong> </em>ZAVAS đế cao 3cm màu trắng bằng da không bong tróc mang êm chân S411 - Giày Sneaker Nữ Chính Hãng</p>
                <p><strong>Giày thể thao nữ</strong>&nbsp;trắng có đế làm bằng cao su đúc nguyên khối chống trơn trượt hạn chế mòn<br>Phần Upper Phần trên được làm bằng da không bong tróc<br>Phần Midsole ( Phần giữa ) phần này tạo độ êm vì có miếng lót đàn hồi lực tốt. Trong phần này có chêm 1 lớp đệm êm chân hơn khi di chuyển.</p>
                <p>Form giày thể thao nữ trắng là chuẩn theo form Châu Á.&nbsp;</p>
                <p><strong>Thông tin sản phẩm</strong></p>
                <p>Tên sản phẩm: <strong><em>Giày thể thao nữ ZAVAS đế cao 3cm màu trắng bằng da không bong tróc mang êm chân S411 - Giày Sneaker Nữ Chính Hãng</em></strong></p>
                <p>Mã sản phẩm: S411</p>
                <p>Màu Sắc: Có 2 màu: Trắng Sọc Đỏ, Trắng Sọc Cam</p>
                <p>Kiểu dáng:&nbsp;<strong>Giày thể thao nữ</strong></p>
                <p>Chất liệu : Da PU cao cấp - chất liệu lót mềm mại</p>
                <p>Chất liệu đế: Đế cao su cao cấp, đảm bảo độ bám dính và tạo độ êm.</p>
                <p>Thiết kế: Trẻ Trung, nhẹ nhàng</p>
                <p>Chiều Cao: 3 cm.</p>
                <p>&nbsp;</p>
                <p><iframe src="//www.youtube.com/embed/j2ETdUNz4nQ" width="560" height="314" allowfullscreen=""></iframe></p>
                <p>&nbsp;</p>
                <p style="text-align: center;"><em>Video Review giày thể thao nữ cổ ngắn màu trắng ZAVAS chi tiết thưc tế</em></p>
                <p style="text-align: center;">&nbsp;</p>
                <p style="text-align: center;"><em><img id="https://salt.tikicdn.com/ts/tmp/e6/00/a5/d529c052087593a978138479f4d79295.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/e6/00/a5/d529c052087593a978138479f4d79295.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"></em><img id="https://salt.tikicdn.com/ts/tmp/d5/e3/5c/09ee462d089a9706b263d96b93cce242.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/d5/e3/5c/09ee462d089a9706b263d96b93cce242.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img id="https://salt.tikicdn.com/ts/tmp/36/5c/7a/532fa9a6c64ff8f55846537439d3207f.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/36/5c/7a/532fa9a6c64ff8f55846537439d3207f.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img id="https://salt.tikicdn.com/ts/tmp/e0/8a/57/80a00a6b57eb96f9e05c8b3419243de3.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/e0/8a/57/80a00a6b57eb96f9e05c8b3419243de3.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img id="https://salt.tikicdn.com/ts/tmp/89/19/88/77988f64ca03a434f96393e944c48227.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/89/19/88/77988f64ca03a434f96393e944c48227.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img id="https://salt.tikicdn.com/ts/tmp/a6/cc/cb/d018b6d228876e295801acde59bbe3b7.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/a6/cc/cb/d018b6d228876e295801acde59bbe3b7.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img id="https://salt.tikicdn.com/ts/tmp/e6/27/be/0328a7dbca0b7dcb4c8fa54024a1cbe4.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/e6/27/be/0328a7dbca0b7dcb4c8fa54024a1cbe4.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img id="https://salt.tikicdn.com/ts/tmp/81/89/83/3375c7316f79b9ef68209314b10de43b.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/81/89/83/3375c7316f79b9ef68209314b10de43b.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img id="https://salt.tikicdn.com/ts/tmp/65/27/15/2444639f2601ae0003b7579b1a1b246a.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/65/27/15/2444639f2601ae0003b7579b1a1b246a.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img id="https://salt.tikicdn.com/ts/tmp/9c/2b/10/cd4c1c7336ac165a01192382f190fd08.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/9c/2b/10/cd4c1c7336ac165a01192382f190fd08.jpg" alt="" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><em><img src="https://salt.tikicdn.com/ts/tmp/03/ce/b8/35e655f7a8f1c32477ea72de18d744a7.jpg" alt="" width="750" height="454" style="display: block; margin-left: auto; margin-right: auto;"></em></p>
                <p style="text-align: center;"><em>Cách đo size giày chính xác nhất của ZAVAS đã đích thân dùng thước kiểm tra và đưa ra bảng size này. Hiện nay có nhiều bảng size lấy từ nước ngoài và nó không đúng với bàn chân người Việt Nam mình. Quý khách vui lòng theo bảng này là chính xác nhất.</em></p>
                <p style="text-align: center;">&nbsp;</p>
                <ul>
                <li><strong>ĐỘ ÊM &amp; FORM GIÀY ĐẸP CỨNG CÁP</strong></li>
                </ul>
                <p><strong>Giày thể thao nữ ZAVAS đế cao 3cm màu trắng bằng da không bong tróc mang êm chân S411 - Giày Sneaker Nữ Chính Hãng </strong>được khách hàng đánh giá là mẫu giày êm ái khi di chuyển nhiều, đế giày có độ đàn hồi cao , phần upper bằng da nên form giày không móp méo, giữ nguyên tốt</p>
                <ul>
                <li><strong>HƯỚNG DẪN BẢO QUẢN GIÀY THỂ THAO NỮ ZAVAS</strong></li>
                </ul>
                <p>Để có thể sử dụng 1 đôi giày tốt và bền với thời gian dài nhất thì xin thực hiện đúng các hướng dẫn bên dưới:</p>
                <p>- Bước 1: Giặt giày bằng bàn chải đánh răng với xà bông rửa chén</p>
                <p>- Bước 2: Phơi ngược giày lại mục đích nước mau rút kéo theo nước bẩn không bị ố giày</p>
                <p>- Bước 3: Khi không sử dụng hãy cất vào hộp để tránh bụi bẩn, cũng như giữ giày thể thao được mới</p>
                <p>- Bước 4: Riêng giày chất liệu bằng DA thì không chả rửa giặt, chỉ cần lấy khăn sạch thấm nước lau là sạch, nếu vết bẩn cứng đầu hãy sử dụng chai sumo vừa an toàn cho da vừa sạch đẹp 99% là bay mọi vết bẩn.</p>
                <ul>
                <li><strong>NHỮNG ĐIỀU "KHÔNG" KHI SỬ DỤNG GIÀY THỂ THAO NỮ ZAVAS</strong></li>
                </ul>
                <p><strong>-&nbsp;</strong>Không phơi giày ngoài nắng, shop đồng ý sẽ mau khô, nhưng giày của bạn sẽ nhanh hư hơn với nhiệt độ cao ngoài trời ( bí quyết ở đây là hãy phơi trước quạt qua đêm, sáng ngủ dậy bạn sẽ có 1 đôi giày mới ).</p>
                <p>- Không giặt giày bằng chất tẩy rửa mạnh hoặc bằng máy giặt ( trừ máy giặt chuyên dụng giặt giày )</p>
                <p>- Không dùng bàn chải giặt đồ để giặt giày, vì sợi chải rất cứng sẽ làm các chất liệu bằng lưới bị giãn theo khi dùng lực để chà giày.</p>
                <p>- Tips quan trọng và cực hữu ích dành cho bạn khi bất kì đôi giày thể thao nào bị ố vàng. Hãy sử dụng kem đánh răng loại Gell màu trắng đánh lên phần ố vàng đó. Đảm bảo sẽ hết nhé.</p>
                <p>#giàythểthaonữ #giàynữ #giàysneakernữ #giàythểthaonữcổthấp #giàynữmàutrắng #giàythểthaonữmàutrắng #giaythethaonu #giaysneakernu #zavas #giayzavas #giaythoitrangnu #giàynữđếcao3cm #giaynuđẹp #giàythểthaonữchínhhãng #giàychínhhãngnữ</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333316',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/1eb40df27e8c5ce7a72be1eb20ba07cb.jpg.webp',
                'images/products/2023/11/e5c59044fe4cf3febd2a99f73f6d6a9b.jpg.webp',
                'images/products/2023/11/f6bdbb7165e4a2ecfb4e5a5acadf6c4d.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Trắng sọc cam' => [
                            'quantity'      => 100,
                            'selling_price' => 2299000,
                            'sale_price'    => 2289000,
                            'product_code'  => 'OM364'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        '36' => [
                            'quantity'      => 100,
                            'selling_price' => 2299000,
                            'sale_price'    => 2289000,
                            'product_code'  => 'OM365'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Chai xịt giày khử mùi hôi giày hôi chân Nano Xclean For Shoes 100ml - Hương Trà Xanh - Nano Bạc AHT Corp (AHTC)',
            'regular_price' => 88000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/2129263f3465f929118333ab93371ebd.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Ngày hè nóng nực mà muốn diện giày sneaker, giày thể thao thì đừng quên có siêu phẩm thoáng mát này nha.<br>Mùa mưa sắp đến rồi!</p>
                <p>Chai xịt khử mùi giày với công nghệ Nano Bạc với tính năng diệt khuẩn khử mùi hôi giày, khử mùi hôi chân nhanh chóng giúp thông thoáng đôi chân, chẳng sợ bí mồ hôi gây mùi khó chịu<br>Đảm bảo đã dùng là mê với thiết kế nhỏ gọn xinh xắn dễ mang theo. <br>Nano Xclean For Shoes là sự kết hợp hoàn hảo của Nano Bạc diệt khuẩn gây mùi và tinh dầu tự nhiên. Không gây kích ứng da, an toàn cho cơ thể. Chai xịt khử mùi giày Nano Xclean với thiết kế nhỏ gọn, bạn có thể mang theo với bất cứ đâu.</p>
                <p>Sử dụng chai xịt giày khử mùi hôi giày Nano Xclean với công nghệ Nano Bạc giúp làm giảm mùi hôi và an toàn cho người sử dụng. Chai xịt giày khử mùi giày Nano Xclean có chứa hoạt chất Nano Bạc giúp tiêu diệt vi khuẩn, nấm và cũng có tác dụng làm giảm mùi hôi chân nhanh chóng trong vòng 3-5 phút.</p>
                <p>Thành Phần:<br>Nano Bạc<br>Dung môi và phụ gia vừa đủ<br>Hương thơm tự nhiên&nbsp;</p>
                <p>Công dụng của chai xịt giày:<br>Làm sạch bề mặt giày dép, hạn chế vi khuẩn gây mùi, hương thơm tự nhiên của xịt giày nano xclean khử mùi hôi khi sử dụng giày dép trong thời gian dài.<br>Hương Trà Xanh mang lại cảm giác thoải mái dễ chịu, mát lạnh làm tan biến sự khó chịu. Giúp cho người sử dụng cảm thấy thoải mái khi mang giày trong thời tiết nóng bức.</p>
                <p>Hướng dẫn sử dụng chai xịt giày:<br>Xịt trực tiếp lên bề mặt giày dép, dùng khăn mềm lau lại và để ở nơi thoáng mát có ánh sáng mặt trời.<br>Quy cách đóng gói:<br>Chai xịt phun sương 100ml</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333317',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/2129263f3465f929118333ab93371ebd.jpg.webp',
                'images/products/2023/11/b811e11decfacfdf5a25d5357ec33d32.jpg.webp'
            ]),
            'variants'      => json_encode([]),
        ],
        [
            'name'          => 'Dép đi trong nhà, dép nhà tắm FuNu hình bàn chân nhỏ',
            'regular_price' => 265000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/ef42a4e5af2b3b3703cb0c79dec161a5.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Dép mang trong nhà hình bàn chân nhỏ là một trong những sản phẩm giúp bảo vệ đôi chân của bạn khỏi những bụi bẩn và giảm tình trạng chai lòng bàn chân, nứt gót.<br>Dép mang trong nhà tạọ cảm giác êm ái, nhẹ nhàng cho long bàn chân giúp bạn lưu thông khí huyết mang lại cảm giác vô cùng thoải mái, dễ chịu cho người mang.<br>Sản phẩm rất thích hợp để mang trong nhà, sử dụng trong nhà tắm hay mang trong văn phòng. Dép với bề mặt tiếp xúc rộng không thấm nước, chống trrượt hiệu quả vì vậy bạn có thể an tâm khi di chuyển trên sàn ướt mà không lo té ngã.<br>Chất liệu nhựa cao cấp, bền đẹp không làm đau chân bạn khi mang dép với thời gian dài. Độ cao vừa phải giúp giữ sạch đôi chân của bạn khi bước đi.</p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/15/df/46/74197cfdb5a6964d29e7da50ff3bfc8c.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/a0/ac/94/b7c9e31db07fff80c497343ce202ccc0.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/f0/d8/d6/dcb6f442bfa537f6388599f038cd37fc.jpg" alt="" width="750" height="750"></p>
                <p><img title="" src="https://salt.tikicdn.com/ts/tmp/93/c9/37/39fccccd13e16b431f6a84ab38aa8903.jpg" alt="" width="750" height="750"></p>
                <p>Chân thành cảm ơn quý khách!</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333318',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/ef42a4e5af2b3b3703cb0c79dec161a5.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        'Xanh lá' => [
                            'quantity'      => 100,
                            'selling_price' => 265000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM366'
                        ],
                    ],
                ],
                'Kích cỡ' => [
                    'variant_name'   => 'Kích cỡ',
                    'variant_values' => [
                        '38/39' => [
                            'quantity'      => 100,
                            'selling_price' => 265000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM367'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Combo 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2',
            'regular_price' => 60000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/62319887a5027c7d029e96f9775fcd25.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Giày cao gót thật quyến rũ và cũng thật "<span style="color: rgb(255, 0, 0);"><strong>Đau Đớn</strong></span>" đối với đôi bàn chân.</p>
                <p>Không ít trường hợp bị trầy da <span style="color: rgb(255, 0, 0);"><strong>chảy máu</strong></span>, <span style="color: rgb(255, 0, 0);"><strong>chai sần</strong></span> da gót sau, thậm chí <span style="color: rgb(255, 0, 0);"><strong>để lại sẹo</strong></span>.</p>
                <p>Từ nay không còn phải lo lắng nữa vì đã có "<span style="color: rgb(0, 128, 0);"><strong>Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2</strong></span>" bảo vệ tuyệt đối gót chân của bạn.</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/8a/c5/58/d1225ec0686242d5aafeed5637eb39e2.jpg" alt="Công dụng của Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="1050" style="display: block; margin-left: auto; margin-right: auto;"><img src="https://salt.tikicdn.com/ts/tmp/65/ed/12/267578181fadec7c7e9d1a7eda586040.jpg" alt="Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"></p>
                <p><span style="color: rgb(0, 128, 0);"><strong>CÔNG DỤNG NỔI BẬT </strong></span></p>
                <ul>
                <li>Giúp chống tuột gót, chống nhấc gót khi mang giày cao gót.</li>
                <li>Chống trầy gót sau và giảm nửa size giày.</li>
                <li>Bề mặt có gai silicone giúp tăng độ bám giữa chân và giày.</li>
                <li>Sản phẩm thiết kế 4D kiểu cánh bướm nên ôm trọn phần lõm dưới mắt cá chân.</li>
                <li>Chất liệu mút cao cấp rất êm chân, thấm hút mồ hôi &amp; bền bỉ.</li>
                <li>Sản phẩm có 01 kích thước dùng được cho giày từ: 35 - 36 - 37 - 38 - 39 - 40 - 41 - 42</li>
                <li>Lót giày đa năng sử dụng được cho nhiều loại giày khác nhau như: giày thể thao, giày cao gót, giày búp bê, giày mọi, giày lườ</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/19/ef/8c/f934b1769b050cee2e3c84e5c6f2db80.jpg" alt="Chi tiết Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="1050" style="display: block; margin-left: auto; margin-right: auto;"><img src="https://salt.tikicdn.com/ts/tmp/74/ac/48/c290780af06702118860d3602b1f54ed.jpg" alt="Kích thước Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"></p>
                <p><span style="color: rgb(0, 128, 0);"><strong>THÔNG TIN SẢN PHẨM </strong></span></p>
                <ul>
                <li>Quy cách: 2 cặp = 4 miếng, dùng cho 2 đôi giày</li>
                <li>Chất liệu: lót giày chống tuột gót sử dụng mút EVA ép vải cao cấp, lót giày có keo dán chuyên dụng để dán cố định vào giày.</li>
                <li>Kích thước: 10 (D) x 4 (R) cm, dày 0.4cm. Dùng cho giày size từ 35 - 36 - 37 - 38 - 39 - 40 - 41 - 42.</li>
                <li>Thiết kế: Thiết kế 4D theo cấu tạo và đặc điểm vận động của bàn chân giúp thoải mái khi mang giày.</li>
                <li>Màu sắc: có 2 màu Kem và Đen</li>
                </ul>
                <p><img src="https://salt.tikicdn.com/ts/tmp/40/ed/3e/51e09418166df44d32fdda8d1d55b5a7.jpg" alt="Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img src="https://salt.tikicdn.com/ts/tmp/cb/30/51/047a11681cbfc8acee5b0f413071c5dd.jpg" alt="Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img src="https://salt.tikicdn.com/ts/tmp/c6/9c/d1/1e934e936c050447c90c32f740252e42.jpg" alt="Hướng dẫn sử dụng Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"></p>
                <p><span style="color: rgb(0, 128, 0);"><strong>HƯỚNG DẪN SỬ DỤNG </strong></span></p>
                <p>1. Vệ sinh bụi bẩn trong lòng giày, lau khô giày</p>
                <p>2. Tháo miếng dán có keo phía sau lót giày</p>
                <p>3. Đặt lót 4D và dán cố định vào giày</p>
                <p>Lưu ý: Sản phẩm mang thương hiệu buybox có bao bì in logo và hướng dẫn sử dụng chi tiết đi kèm.&nbsp;</p>
                <p><img src="https://salt.tikicdn.com/ts/tmp/7c/9c/48/60bd6429164e423e0a2643de52ad3497.jpg" alt="Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img src="https://salt.tikicdn.com/ts/tmp/dc/5f/8e/1a36ee4c39d1fc3ab0363afb8106612f.jpg" alt="Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"><img src="https://salt.tikicdn.com/ts/tmp/74/85/e8/474f9176f9ce4b949aaaa4f062e4b192.jpg" alt="Combp 2 cặp Lót gót giày 4D hình cánh bướm có mặt gai silicone chống trầy rách da và chống tuột gót chân - buybox - BBPK70_2" width="750" height="750" style="display: block; margin-left: auto; margin-right: auto;"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div>',
            'sku'           => '33333333319',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/62319887a5027c7d029e96f9775fcd25.jpg.webp',
                'images/products/2023/11/8fe1565e03b34701cd2372c39f848388.jpg.webp',
                'images/products/2023/11/a66cc289861a3275deeb5ca833c335a8.jpg.webp'
            ]),
            'variants'      => json_encode([
                'Màu sắc' => [
                    'variant_name'   => 'Màu sắc',
                    'variant_values' => [
                        '1 cặp Kem + 1 cặp Đen' => [
                            'quantity'      => 100,
                            'selling_price' => 60000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM368'
                        ],
                        '2 cặp Kem'             => [
                            'quantity'      => 100,
                            'selling_price' => 60000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM369'
                        ],
                        '2 cặp Đen'             => [
                            'quantity'      => 100,
                            'selling_price' => 60000,
                            'sale_price'    => 0,
                            'product_code'  => 'OM370'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name'          => 'Sét 2 miếng lót gót chân cao su mềm bảo vệ gót chân khi mang giày ,chống nứt gót ,bảo vệ mắt cá ,chống đau chân',
            'regular_price' => 74000,
            'sale_price'    => 0,
            'thumbnail_url' => 'images/products/2023/11/5a87e783f943155e89451abfbecd65f1.jpg.webp',
            'description'   => '<div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style="">
                <p>-Sét 2 miếng lót gót chân cao su mềm ,bảo vệ gót chân ,cổ chân ,khi mang giày</p>
                   <p>- Chống nút gót ,bảo vệ mắt cá ,phù hợp cho cả nam và nữ</p>
                   <p>-Xuất xứ : Trung Quốc</p>
                   <p>-Chất liệu : cao su non mềm mại</p>
                   <p>-Màu sắc : giao ngẫu nhiên ( vì tùy vào đợt hàng về )</p>
                   <p>-Họa tiết : trơn</p>
                   <p>-Hình dáng : ôm trọn gót chân</p>
                   <p>-Giới tính : unisex</p>
                   <p>-Đặc trưng : dưỡng ẩm và thoáng khí</p>
                   <p>-Kích thước : 9,5 x 8,5 cm</p>
                   <p>-Miếng lót chân thiết kế gọn nhẹ ,ôm trọn lấy gót chân ,tạo cảm giác mềm mại ,êm ái</p>
                   <p>-Chống đau chân khi phải thường xuyên vận động ,di chuyển</p>
                   <p>-Giữ gót chân luôn mềm mại ,khô thoáng ,giảm tình trạng nứt gót ,sần sùi ,thô ráp</p>
                   <p>-Dùng được cho cả nam và nữ ,đa dạng lứa tuổi</p>
                   <p>-Rất phù hợp cho người già ,người bị phong thấp ,đau khớp hoặc người vận động di chuyển liên tục ,</p>
                   <p>-Điểm nổi bật : chất liệu 100/% cao su non mềm mại ,dẻo và co giãn phù hợp với nhiều kích cỡ chân</p>
                   <p>-Thiết kế dạng vớ rất dễ sử dụng</p>
                   <p>-Với độ dày vừa phải khi mang miếng lót chân bạn vẫn có thể mang giày mà không có vấn đề gì khó khăn cả</p>
                   <p>-Sét 2 miếng lót gót chân cao su non mềm sẽ giúp bảo vệ gót chân không bị nhức hay nứt gót</p>
                   <p>-</p>
                <p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><p>Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hoá đơn VAT không được cung cấp trong trường hợp này.</p></div>',
            'sku'           => '33333333320',
            'status'        => 'selling',
            'origin'        => 'VN',
            'rating'        => rand(30, 50) / 10,
            'sold_count'    => rand(0, 100),
            'view_count'    => rand(100, 1000),
            'shop_id'       => 1,
            'category_id'   => 8,
            'supplier_id'   => 3,
            'gallery'       => json_encode([
                'images/products/2023/11/5a87e783f943155e89451abfbecd65f1.jpg.webp',
                'images/products/2023/11/60a0a107827a35d3d2435d9e4ebbcbac.jpg.webp',
                'images/products/2023/11/0e848095c8f0ca604a36b33bdace6afe.jpg.webp'
            ]),
            'variants'      => json_encode([]),
        ],
        [
            'name' => 'Bộ bài tây mạ vàng cao cấp, chống nước - Bài lá bằng nhựa PVC - Hàng chính hãng',
            'regular_price' => 46550,
            'sale_price' => 0,
            'stock_qty' => 50,
            'thumbnail_url' => 'images/products/2023/11/580d1d66dc73231b9f1a57735f1ee30d.jfif',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Nếu bạn thích sự độc đáo, sang trọng và muốn tăng thêm độ thú vị, mới lạ trong môn giải trí với 52 lá bài tây thì chắc chắn đây chính là sản phẩm dành cho bạn.<br>Bộ bài tây in hình, 500 Euro mạ vàng - mạ bạc cực kỳ độc đáo,<br>Bộ bài được mạ đồng nhất vàng, hoặc bạc ở cả mặt trước và mặt sau, mặt sau của mỗi lá bài sẽ được in hình của tờ tiền 500 Euro hoặc hình Rồng. Hộp đựng bài cũng được in hình tương ứng với các lá bài.<br>Chất liệu: Plastic cứng cáp, rất bền và không sợ bị phai màu.</p>
            <p><img title="" src="https://salt.tikicdn.com/ts/tmp/9a/c0/c0/c37c9de02ea56a404f5106246b255706.jfif" alt="" width="750" height="750"></p>
            <p><img title="" src="https://salt.tikicdn.com/ts/tmp/93/9e/e2/6ee53e8be2bce0af78c6f9c183044e9c.jpg" alt="" width="750" height="561"></p>
            <p><img title="" src="https://salt.tikicdn.com/ts/tmp/1d/d7/9c/15ca11950c85f058cc2c60b2f78dbfe5.jpg" alt="" width="750" height="544"></p>
            <p><img title="" src="https://salt.tikicdn.com/ts/tmp/35/15/ea/ad518a296bc21ea274d0c4cbaa36a731.jpg" alt="" width="750" height="514"></p>
            <p><strong>Cảm ơn quý khách!!!</strong></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '2499170741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 4,
            'category_id' => 1,
            'supplier_id' => 2,
            'gallery' => json_encode([
                'images/products/2023/11/580d1d66dc73231b9f1a57735f1ee30d.jfif',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Máy hút sữa tay hiện đại handy 5 - FB1011HY',
            'regular_price' => 165000,
            'sale_price' => 160000,
            'stock_qty' => 50,
            'thumbnail_url' => 'images/products/2023/11/765a60e423a72ffe315a809c7bf40171.png.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h2>1. THIẾT KẾ VÀ CÔNG DỤNG</h2>
            <p><img class="has-transparency aligncenter wp-image-8526 size-full" src="https://genex.com.vn/wp-content/uploads/2023/08/MAY-HUT-SUA-TAY-HANDY-5-FB1011HY-7.png" alt="mÁy hÚt sỮa tay handy 5 fb1011hy" width="3334" height="3334"></p>
            <ul>
            <li>Tay cầm dáng cong dễ cầm nắm và bóp xuống.</li>
            <li>Lực hút có thể điều chỉnh bằng cần bóp: bóp nhẹ hoặc bóp mạnh tùy lực ở tay mẹ (Lực hút mạnh nhất ~350 mmHg).</li>
            <li>2 chế độ cài đặt lực hút.</li>
            <li>Phễu silicon mềm dẻo với cấu tạo bong bóng giúp mát xa bầu vú mẹ trong khi hút. Việc đó kích thích quá trình xuống sữa để tiết sữa và mẹ cảm thấy dễ chịu nhất.</li>
            <li>Bộ phận van 1 chiều chống chảy ngược đảm bảo dòng sữa trực tiếp từ miệng phễu xuống bình đựng sữa không bị trào ngược trở lại, giữ cho bộ phận hút chân không luôn sạch và khô.</li>
            <li>Nắp chống bụi vừa khít với miệng phễu, giữ cho phễu hút luôn sạch trong khi mẹ di chuyển hoặc khi lắp ráp máy hút.</li>
            <li>Chức năng khóa tiện lợi khi lưu trữ hoặc di chuyển.</li>
            </ul>
            <p><img class="has-transparency aligncenter wp-image-8527 size-full" src="https://genex.com.vn/wp-content/uploads/2023/08/MAY-HUT-SUA-TAY-HANDY-5-FB1011HY-8.png" alt="mÁy hÚt sỮa tay handy 5 fb1011hy" width="3334" height="3334"></p>
            <h2>2. HƯỚNG DẪN SỬ DỤNG</h2>
            <p><iframe title="Hướng dẫn sử dụng Máy hút sữa tay Handy 5 FB1011HY | Nuôi con bằng sữa mẹ | FATZBABY" src="https://www.youtube.com/embed/XHEaACXUZRs?feature=oembed" width="660" height="371" frameborder="0" allowfullscreen=""></iframe></p>
            <h2>3. LƯU Ý</h2>
            <ul>
            <li>Làm sạch và tiệt trùng máy hút sữa cho lần đầu tiên sử dụng. Làm sạch tất cả các bộ phận sau mỗi lần sử dụng và tiệt trùng chúng trước khi lắp ráp cho lần sử dụng kế tiếp.</li>
            <li>Hãy cẩn thận khi tháo lắp và làm sạch van silicon và vòng silicon, chúng có thể dễ dàng bị làm rách bằng một lực kéo mạnh.</li>
            <li>Giữ sản phẩm khỏi ánh sáng mặt trời chiếu trực tiếp.</li>
            </ul><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '2499170741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 4,
            'category_id' => 1,
            'supplier_id' => 2,
            'gallery' => json_encode([
                'images/products/2023/11/765a60e423a72ffe315a809c7bf40171.png.webp',
                'images/products/2023/11/32cd20435a8349ae05066cb67249b979.png.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Sữa bột Nestlé NAN OPTIPRO PLUS 1 800g/lon với 5HMO Sản Xuất Tại Thụy Sĩ (0 - 6 tháng)',
            'regular_price' => 482000,
            'sale_price' => 0,
            'stock_qty' => 150,
            'thumbnail_url' => 'images/products/2023/11/5982fa5f42b200a0c89a9313e13aa42b.png.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Với công thức cải tiến được phát triển bởi Nestlé Thụy Sĩ, <strong>NAN OPTIPRO PLUS 1</strong> là sản phẩm dinh dưỡng công thức bổ sung các dưỡng chất thiết yếu, phù hợp với nhu cầu của trẻ từ 0-6 tháng tuổi, hỗ trợ trẻ tiêu hóa tốt, tăng cường đề kháng và phát triển khỏe mạnh.</p>
            <h3>Tăng cường đề kháng</h3>
            <p>- 100 triệu lợi khuẩn Bifidus BL được chứng minh lâm sàng giúp tăng thêm 200% lượng IgA (kháng thể miễn dịch quan trọng nhất trong sữa mẹ).</p>
            <h3>Hỗ trợ tiêu hóa và phát triển thể chất</h3>
            <p>- Đạm chất lượng Optipro: phát minh độc quyền của Nestlé Thụy Sĩ cho dòng sản phẩm NAN với hàm lượng đạm và chất lượng đạm phù hợp, giúp trẻ dễ tiêu hóa, dễ hấp thu và phát triển hệ mô, cơ.</p>
            <p>- 100 triệu lợi khuẩn Bifidus BL: được nghiên cứu giúp giảm 49% nguy cơ tiêu chảy ở trẻ dưới 1 tuổi.</p>
            <h3>Hỗ trợ chiều cao và trí não</h3>
            <p>- DHA &amp; ARA: Hỗ trợ phát triển trí não và thị lực.</p>
            <p>- Canxi &amp; Vitamin D: hỗ trợ phát triển chiều cao.</p>
            <p><strong>Thành phần</strong></p>
            <h3>Cách pha chế:</h3>
            <p>1. Rửa sạch tay trước khi pha NAN OPTIPRO PLUS cho trẻ.</p>
            <p>2. Rửa cốc và nắp đậy thật sạch. Đun sôi trong 5 phút. Đậy kín nắp đến khi sử dụng.</p>
            <p>3. Đun sôi nước và để nguội bớt bằng với nhiệt độ của cơ thể.</p>
            <p>4. Theo sát bảng hướng dẫn cách pha trên bao bì. Đầu tiên, đổ nước ấm vào cốc. Sau đó, thêm chính xác số muỗng lường đã gạt ngang tương ứng với độ tuổi của trẻ.</p>
            <p>5. Đảm bảo muỗng lường khô ráo rồi đặt lại vào hộp. Đậy nắp kín sau mỗi lần sử dụng và bảo quản nơi khô ráo, thoáng mát.</p>
            <p>6. Đậy nắp và lắc hoặc khuấy cho đều đến khi bột được hòa tan hoàn toàn. Kiểm tra nhiệt độ trước khi cho trẻ uống.</p>
            <p>Chú ý:</p>
            <p>- Nước phải được đun sôi và làm nguội lại bằng với nhiệt độ của cơ thể để đảm bảo những vi sinh vật có lợi còn sống.</p>
            <p>- Dụng cụ pha chế phải được luộc kỹ.</p>
            <p>- Chỉ dùng muỗng lường trong hộp. Cho bột nhiều hơn hoạt ít hơn chỉ dẫn đều dẫn đến việc mất nước hoặc cung cấp không đủ dưỡng chất cho con bạn. Không được thay đổi tỷ lệ pha mà không có chỉ dẫn của cán bộ y tế.</p>
            <p>Chỉ pha chế mỗi lần một cốc và cho trẻ uống ngay (luôn bồng trẻ khi cho uống để tránh sặc), không giữ lại phần thừa. Bảo quản, pha chế và cho trẻ uống không đúng cách có thể dẫn đến những tác dụng không mong muốn cho sức khỏe của trẻ. Việc bú mẹ cần được duy trì càng lâu càng tốt.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '2489170741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 5,
            'category_id' => 1,
            'supplier_id' => 2,
            'gallery' => json_encode([
                'images/products/2023/11/5982fa5f42b200a0c89a9313e13aa42b.png.webp',
                'images/products/2023/11/0626ae5799d1433f0bc5b97c5ef9a983.jpg.webp',
                'images/products/2023/11/5f9ae049492b61b21019d72356b3e2f6.jpg.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Combo 2 Túi Nước Giặt Omo Matic Máy Giặt Cửa Trên Hương Comfort Tinh Dầu Thơm Xoáy Bay Vết Bẩn Thơm Bền Lâu 3.6Kg',
            'regular_price' => 350000,
            'sale_price' => 0,
            'stock_qty' => 35,
            'thumbnail_url' => 'images/products/2023/11/60fc6d0b66244096cb7dc6b543b4f19d.png.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style="overflow: hidden; height: 250px;"><p><strong>OMO MATIC - LỰA CHỌN THÔNG MINH ĐỂ CHĂM SÓC ÁO QUẦN GIA ĐÌNH MỘT CÁCH TOÀN DIỆN NHẤT</strong></p>
            <p>OMO Matic mới được nâng cấp với hoạt chất làm sạch nguồn gốc thiên nhiên, thân thiện hơn với môi trường.</p>
            <p>Công nghệ Màn chắn Kháng bẩn Polyshield Xanh, giúp bao bọc và phủ một lớp màn chắn vô hình lên bề mặt sợi vải, loại bỏ nhanh chóng vết bẩn cứng đầu và mùi hôi trên áo quần</p>
            <p>Công thức Giữ Màu ColorShield giúp Bền Màu quần áo sau 100 lần giặt.</p>
            <p>Sản phẩm nước giặt OMO Matic là sự lựa chọn hàng đầu cho máy giặt cửa trước và luôn được khuyên dùng bởi 11 hãng máy giặt hàng đầu thế giới như Aqua, Panasonic, LG, S <br><br><strong>ƯU ĐIỂM NỔI BẬT</strong></p>
            <p>- Túi có vòi, dễ sử dụng</p>
            <p>- Phù hợp với mọi loại máy giặt</p>
            <p>- Hoạt chất làm sạch nguồn gốc thiên nhiên, thân thiện hơn với môi trường</p>
            <p>- Công thức Màn chắn Kháng bẩn Xanh Polyshield ưu việt</p>
            <p>- Lựu đỏ với khả năng chống oxy hóa và giữ màu tự nhiên</p>
            <p>- Sợi tre với khả năng ngăn tia cực tím<br><br><strong>HIỆU QUẢ SỬ DỤNG</strong></p>
            <p>- Xoáy bay vết bẩn vượt trội</p>
            <p>- Ngăn ngừa mùi hôi do phơi thiếu nắng hay đồ giặt để lâu chưa phơi<br><br><strong>HƯỚNG DẪN SỬ DỤNG</strong></p>
            <p>- Đổ nước giặt OMO Matic vào nắp với liều lượng theo hướng dẫn.</p>
            <p>- Thoa một lượng nhỏ nước giặt trực tiếp lên vết bẩn.</p>
            <p>- Đổ phần nước giặt còn lại trong nắp vào máy giặt cùng với quần áo.<br><br><strong>LƯU Ý:</strong></p>
            <p>- Kiểm tra độ bền màu trước khi sử dụng.</p>
            <p>- Khuyến nghị giặt với nhiệt độ thường.</p>
            <p>- Để xa tầm tay trẻ em. Không được uống.</p>
            <p>- Tránh để tiếp xúc với mắt. Nếu sản phẩm dính vào mắt hãy rửa kỹ với nước.</p>
            <p>- Rửa sạch và lau khô tay sau khi sử dụng.</p>
            <p><strong>Hướng dẫn bảo quản:</strong> Nơi thoáng mát, tránh ánh nắng trực tiếp</p>
            <p><em>Lưu ý: Bao bì sản phẩm có thể thay đổi tùy theo từng đợt nhập hàng</em></p>
            <p><em>Thời gian “sử dụng tốt nhất” của các sản phẩm nước giặt Omo Matic (Unilever Việt Nam khuyến nghị, trong điều kiện lưu trữ như được hướng dẫn trên bao bì): 24 tháng từ ngày sản xuất. (Sau thời hạn “sử dụng tốt nhất” được khuyến nghị như trên, sản phẩm vẫn có thể tiếp tục sử dụng nếu được lưu trữ đúng như hướng dẫn trên bao bì. Tuy nhiên, một số các tính chất về cảm quan như mùi hương, màu sắc hoặc tính chất hóa lý của sản phẩm có thể thay đổi tùy vào điều kiện lưu trữ và bảo quản thực tế.)</em></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><div class="gradient"></div></div><a class="btn-more" data-view-id="pdp_view_description_button">Xem thêm</a></div></div>',
            'sku' => '2481273741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 1,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/60fc6d0b66244096cb7dc6b543b4f19d.png.webp',
                'images/products/2023/11/082a87adce84a1d4adf05e1e68c809a7.png.webp',
                'images/products/2023/11/a696c798ae1390bd81d7f5929f1bd388.png.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Xe lắc cho bé, Xe chòi chân trẻ em hình ô tô phát nhạc đèn sinh động hàng cao cấp',
            'regular_price' => 275000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/de08fb58c3f298988b550c85ec13b7b9.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Xe chòi chân ô tô cho bé có nhạc, có đèn led nháy, có cốp xe, chòi chân giá rẻ phù hợp cho trẻ em từ 1 - 5 tuổi&nbsp;</h3>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/23/fa/3f/ed4036da10ddbcc2d97b3491de957045.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/d2/de/b7/dd19a03aa5e71f759da94ff4d2271e3c.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/22/7e/db/7f4fc285c6f93e03b61da8a8d63098cb.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/3a/05/d6/9820ec6c575bc38e63e1faf34a3cb2fe.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <h3>Thông tin sản phẩm</h3>
            <h3>- Mã sản phẩm: Xe chòi chân ô tô audi có nhạc</h3>
            <h3>- Tải trọng: 30kg</h3>
            <h3>- Kích thước: 59*25.5*21cm</h3>
            <h3>- Trọng lượng: 3.2kg&nbsp;</h3>
            <h3>- Màu sắc: Hồng, Be, Xanh</h3>
            <h3>- Kiểu dáng: Audi</h3>
            <h3>- Loại xe: Chòi chân vận động</h3>
            <h3>- Ảnh sản phẩm đều là ảnh thật shop tự chụp</h3>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/84/04/42/ec49e5762b13ea6b153969c4416b45ed.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/4b/74/32/c9dcebb9354d81df573e9d348946fabc.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/55/63/4b/7da8b2af2f33a2dbd26d08447efca18c.jpg" alt="" width="661" height="661"></p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/be/81/ac/7971f13efaf36435e4b4c5d3b37bb294.jpg" alt="" width="661" height="661"></p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/5f/c0/30/7166116a5cf30269afb30d06e9dcee60.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <h3>Đặc điểm nổi bật</h3>
            <h3>Kích thước lớn, phù hợp với nhiều độ tuổi, bé chơi được lâu hơn</h3>
            <h3>Chất liệu nhựa PP, ABS cao cấp, giúp xe nhẹ và bền hơn</h3>
            <h3>Thiết kế bo tròn, không góc cạnh, an toàn cho bé</h3>
            <h3>Lốp xe được làm từ nhựa xốp EVA Foam có trọng lượng nhẹ, lại không cần bơm vá</h3>
            <h3>Vô lăng xoay trong phạm vi 135 độ an toàn và chống lật hiệu quả</h3>
            <h3>Chỗ ngồi rộng, thiết kế giúp bé ngồi đúng tư thế</h3>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/df/39/4b/7b8c7be3ea3302da4e4b7779eb54b006.jpg" alt="" width="608" height="608"></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/18/d8/11/752bdf893475b6fd3a6cf4d4db90c77e.jpg" alt="" width="750" height="750"></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/5e/5b/2a/9d59a53a6e795eb5797136c3a757fdc0.jpg" alt="" width="750" height="750"></p>
            <h3>#xechoi #audi #oto #choichanoto #xechoiconhac #xetreem #xechoigiare #otogiare #otoconhac #xechoichan #otoaudi #giare #oto #xechobe #xegiare #choichangiare #audi #choichan #giare #choi #nhacaudi #choichan #xechobe</h3><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '2412373741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 5,
            'category_id' => 1,
            'supplier_id' => 3,
            'gallery' => json_encode([
                'images/products/2023/11/de08fb58c3f298988b550c85ec13b7b9.jpg.webp',
                'images/products/2023/11/12ed1243b23260783b2667846d2440b5.jpg.webp',
                'images/products/2023/11/cabf8802e63855caf5ffdc96be671d4b.jpg.webp',
            ]),
            'variants' => json_encode([
                'Màu sắc' => [
                    'variant_name' => 'Màu sắc',
                    'variant_values' => [
                        'Màu hồng' => [
                            'quantity' => 30,
                            'selling_price' => 275000,
                            'sale_price' => 0,
                            'product_code' => 'OM371'
                        ],
                        'Màu xanh' => [
                            'quantity' => 100,
                            'selling_price' => 275000,
                            'sale_price' => 0,
                            'product_code' => 'OM372'
                        ],
                        'Màu be' => [
                            'quantity' => 35,
                            'selling_price' => 275000,
                            'sale_price' => 0,
                            'product_code' => 'OM373'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Tã dán sơ sinh Huggies Tràm Trà Tự Nhiên NB70 (dưới 5kg) - Gói 70 miếng + Tặng 6 miếng',
            'regular_price' => 196000,
            'sale_price' => 0,
            'stock_qty' => 200,
            'thumbnail_url' => 'images/products/2023/11/8121608bea1163d876d31efe5e3833b3.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><ul><li><strong>Tã Dán Sơ Sinh Huggies&nbsp;</strong>là tã dán Sơ sinh duy nhất có thiết kế độc đáo Bọc Kén Con Tằm mới với vùng lưng có Lớp đệm siêu mềm như bọc kén giúp nâng niu bảo vệ da bé từ ngày đầu chào đời.</li>
            <li>Bề mặt với 1,000 phễu siêu thấm giúp thấm hút nhanh ngay cả phân lỏng, giữ mông bé luôn khô thoáng.</li>
            <li>Bề mặt Soft touch êm mềm với chất liệu siêu mềm mại từ trong ra ngoái giúp nâng niu làn da non nớt của bé.</li>
            <li>Hộc chống tràn sau với thiết kế dạng hộc ở phần lưng giúp chống tràn sau hiệu quả, ngăn chất lỏng chảy ngược ra ngoài khi bé nằm.</li>
            <li>Màng đáy thoát ẩm 100% cho phép không khí lưu thông và thoát khỏi màn đáy dễ dàng, giúp da bé khô thoáng và ngăn ngừa hăm tã hiệu quả.</li>
            </ul><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '2412373741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 5,
            'category_id' => 1,
            'supplier_id' => 3,
            'gallery' => json_encode([
                'images/products/2023/11/8121608bea1163d876d31efe5e3833b3.jpg.webp',
                'images/products/2023/11/680e3e763193b94f0d6da0676ecead60.jpg.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Xe tròn tập đi AA1 cho bé- Song Long',
            'regular_price' => 224000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/7582647a922dace390b72209f2f1b093.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style="overflow: hidden; height: 250px;"><p><strong>Xe tập đi cho bé Song Long AA1 được sản xuất tại Việt Nam, dành cho bé từ 0 đến 2 tuổi. Chiếc xe được làm từ chất liệu nhựa cao cấp, màu sắc tươi sáng, không chất độc hại, an toàn cho sức khỏe của bé. Sản phẩm với những thanh đồ chơi xinh xắn sẽ mang lại sự hứng thú cho bé mỗi khi tập đi, vì vậy bé sẽ nhanh biết đi hơn và những giây phút ngồi trên xe không còn nhàm chán.&nbsp;Đây sẽ là người bạn đồng hành thân thiết với con từ những bước chập chững đầu tiên.</strong></p>
            <p><strong><img src="https://salt.tikicdn.com/ts/tmp/1f/86/13/00ddabd976970f73ea59889814cb331a.jpg" alt="" width="695" height="695"></strong></p>
            <h2 dir="ltr"><strong>Đặc điểm nổi bật của sản phẩm:</strong></h2>
            <ul>
            <li><strong>Xe tập đi cho bé Song Long AA1&nbsp;</strong>được làm bằng chất liệu nhựa cao cấp, không độc hại cho bé, có khung xe đỡ xung quanh bằng kim loại bền đảm bảo xe luôn chắc chắn và an toàn cho bé trong suốt quá trình tập.</li>
            <li>Xe được thiết kế gọn nhẹ, chiều cao của xe có thể điều chỉnh phù hợp với từng bé giúp bé thuận tiện chạm đất khi tập đi.</li>
            <li>Khoang xe rộng rãi bé có thể đứng vào thoải mái, phía dưới có lớp đệm đỡ cho con đi không bị ngã, hoặc có thể ngồi khi mỏi. Bố mẹ có thể tháo lớp nệm này ra để giặt, đảm bảo vệ sinh cho bé.</li>
            <li>Xe có bàn nhựa cho bé để tay khi ngồi và khung nhựa nối liền 2 bên cho bé giữ khi đi, có gắn kèm các hình thú đồ chơi ngộ nghĩnh, giúp bé chơi ngoan hơn, tạo cảm giác thích thú cho bé.</li>
            <li>Phía sau xe có gắn tay cầm dài để bố mẹ có thể dễ dàng điều chỉnh giúp bé tập đi hoặc đẩy khi bé ngồi.</li>
            <li><strong>Xe tập đi Song Long AA1</strong>&nbsp;có phần lưng tựa chắc chắn giúp bé không bị mỏi khi ngồi lâu.</li>
            <li>8 bánh xe có độ ma sát cao, không lo xe chạy quá nhanh khiến bé sợ hãi.</li>
            </ul>
            <h2>Lợi ích của việc sử dụng&nbsp;<strong>Xe tập đi Song Long AA1 cho bé:</strong></h2>
            <ul>
            <li>Bé nhanh biết đi hơn, tự tin hơn khi bước đi bằng chính đôi chân của mình.</li>
            <li>Giúp cho cơ và hệ xương của bé phát triển nhanh hơn.</li>
            <li>Giúp bé vận động nhiều hơn, phát triển kĩ năng quan sát và định hướng.</li>
            <li>Giúp cho bé giao tiếp với thế giới xung quanh nhiều hơn.</li>
            </ul><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><div class="gradient"></div></div><a class="btn-more" data-view-id="pdp_view_description_button">Xem thêm</a></div></div>',
            'sku' => '2411313541',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 5,
            'category_id' => 1,
            'supplier_id' => 3,
            'gallery' => json_encode([
                'images/products/2023/11/7582647a922dace390b72209f2f1b093.jpg.webp',
                'images/products/2023/11/64b3dbb502321616717b45122db47f9e.jpg.webp',
                'images/products/2023/11/dd346ea14df4b8d7e54f19aa01ed8f2b.jpg.webp',
                'images/products/2023/11/35c9591ccf77826a8e1b6ceef1b5ae2b.jpg.webp',
            ]),
            'variants' => json_encode([
                'Màu sắc' => [
                    'variant_name' => 'Màu sắc',
                    'variant_values' => [
                        'Màu hồng' => [
                            'quantity' => 30,
                            'selling_price' => 224000,
                            'sale_price' => 0,
                            'product_code' => 'OM374'
                        ],
                        'Màu vàng' => [
                            'quantity' => 100,
                            'selling_price' => 221000,
                            'sale_price' => 0,
                            'product_code' => 'OM375'
                        ],
                        'Màu xanh dương' => [
                            'quantity' => 25,
                            'selling_price' => 220000,
                            'sale_price' => 0,
                            'product_code' => 'OM376'
                        ],
                        'Màu xanh lá' => [
                            'quantity' => 10,
                            'selling_price' => 220000,
                            'sale_price' => 0,
                            'product_code' => 'OM377'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Combo 2 Kem tẩy chuyên dụng Sunlight | Phiên bản nâng cấp từ Cif | Siêu sạch Siêu sáng | Chai 690g',
            'regular_price' => 67000,
            'sale_price' => 50000,
            'stock_qty' => 100,
            'thumbnail_url' => 'images/products/2023/11/48eebbdae9186fa83f6d8656186394fe.png.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong>KEM TẨY CHUYÊN DỤNG SUNLIGHT - TẨY SẠCH VẾT BẨN CỨNG ĐẦU - SIÊU SẠCH SIÊU SÁNG</strong></p>
            <p>Có "trợ thủ" Kem Tẩy Chuyên Dụng Sunlight sẽ giúp việc tẩy rửa, đặc biệt là lau bếp trở nên dễ dàng và nhanh chóng. Kể cả nhiều loại vết bẩn khó tẩy như: vết gỉ sét trên bếp ga, vết bám lâu ngày trên lò vi sóng hay máy hút mùi. Nhờ đó, luôn giữ cho ngôi nhà bạn được sạch sẽ, sáng bóng.</p>
            <p><strong>ƯU ĐIỂM NỔI BẬT:</strong></p>
            <p>- Tẩy sạch các vết bẩn cứng đầu bám trên nhiều bề mặt như bếp ga, lò vi sóng, máy hút mùi.</p>
            <p>- Hạn chế làm trầy xước bề mặt, trả lại vẻ sáng bóng cho các vật dụng.</p>
            <p>- An toàn cùng hương chanh thanh mát</p>
            <p><strong>HƯỚNG DẪN SỬ DỤNG:</strong></p>
            <p>1. Cho một lượng nhỏ Kem Tẩy Sunlight lên bề mặt cần làm sạch (không cần phải làm ướt bề mặt).</p>
            <p>2. Dùng khăn ẩm hoặc bàn chải mềm chà nhẹ các vết bẩn.</p>
            <p>3. Lau sạch lại bằng khăn ẩm. Cho bề mặt sáng bóng như mới. Thích hợp với tất cả các bề mặt như gạch men, sứ, thép không gỉ, crôm và kính.</p>
            <p>Không sử dụng trên màn hình TV và máy tính.</p>
            <p><strong>CHÚ Ý:</strong></p>
            <p>Để xa tầm tay trẻ em. Không được uống. Nếu nuốt phải, cần đến ngay cơ sở y tế, khi đi mang theo sản phẩm và nhãn chai. Nếu sản phẩm tiếp xúc với mắt, cần rửa ngay bằng nước sạch. Tránh tiếp xúc trực tiếp với vùng da nhạy cảm. Mang găng tay khi sử dụng. Nên thử sản phẩm trên diện tích nhỏ trong lần đầu tiên sử dụng.</p>
            <p>Xuất xứ thương hiệu: Việt Nam<br>Nơi sản xuất: Việt Nam<br>Ngày sản xuất: Xem trên bao bì sản phẩm <br>Hạn sử dụng: 3 năm kể từ ngày sản xuất<br>Thành phần: Sodium Linear Alkylbenzene Sulfonate; Laureth-5; Calcium Carbonate (Hạt làm sạch từ tự nhiên 40%); Oleic Fatty Acid; Sodium Carbonate; Poly(dimethylsiloxane) and Treated Amorphous Silica; Acrylates Copolymer; Phenoxyethanol; Chất thơm; Chất tạo màu; Nước.<br>Hướng dẫn bảo quản: Nơi thoáng mát, tránh ánh nắng trực tiếp</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1214313541',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 1,
            'supplier_id' => 4,
            'gallery' => json_encode([
                'images/products/2023/11/48eebbdae9186fa83f6d8656186394fe.png.webp',
                'images/products/2023/11/c6371662071434a38b3fef35c54d7199.png.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => '[CRM] Dung dịch diệt khuẩn đa năng Dettol 500ml',
            'regular_price' => 132000,
            'sale_price' => 0,
            'stock_qty' => 200,
            'thumbnail_url' => 'images/products/2023/11/7d072208d9b4c1d8bb64f31c478309d8.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong>Dettol là nhãn hiệu thuộc sở hữu của tập đoàn Reckitt Benckiser. Hiện tại, Dettol đã trở thành thương hiệu diệt khuẩn nổi tiếng nhất thế giới và có lịch sử phát triển hơn 85 năm.</strong></p>
            <p><strong>Dung dịch diệt khuẩn đa năng Dettol 500ml CRM</strong></p>
            <p><strong>THÔNG TIN SẢN PHẨM</strong><br><br>Đọc kĩ hướng dẫn sử dụng trước khi dùng.<br>Dung dịch Dettol có chứa hoạt chất Chloroxylenol 4.8% w/v với đặc tính diệt vi khuẩn (diệt đến 99.9% vi khuẩn gây nhiễm trùng). Dettol giúp sát trùng diệt khuẩn, cũng như bảo vệ khỏi các vi khuẩn gây nhiễm trùng.</p>
            <p><strong>ĐẶC ĐIỂM NỔI BẬT</strong><br>• Sử dụng để sát khuẩn da, quần áo, bề mặt; <br>• Sát khuẩn da<br>• Vệ sinh cá nhân<br>• Vệ sinh đồ dùng gia đình: Giặt giũ; Vệ sinh sàn nhà và các bề mặt cứng khác; Vệ sinh bồn cầu, chậu rửa (không acrylic), cống,…</p>
            <p><strong>HƯỚNG DẪN SỬ DỤNG</strong><br>Tùy theo mục đích sử dụng, người sử dụng nên pha dung dịch khử trùng và sát khuẩn đa năng Dettol với nước theo tỉ lệ tương ứng với hướng dẫn bên dưới.</p>
            <p><strong>CÔNG DỤNG VÀ HƯỚNG DẪN SỬ DỤNG:</strong> <br>• Hiệu lực diệt các vi khuẩn Salmonella typhi, S, S, E, P, B và Mycobacterium tuberculosis sau thời gian tiếp xúc 1 phút. <br>• Sử dụng để sát khuẩn da, quần áo, bề mặt. Sát khuẩn da: pha 21ml* dung dịch Dettol với 420ml nước. Dung dịch Dettol không pha loãng có thể được sử dụng trong trường hợp khẩn cấp nhưng không dùng cho da nhạy cảm và các tình trạng chàm (eczema). Không dùng cho vết thương, niêm mạc, vùng da trước, sau khi tiêm, vùng da phẫu thuật. <br>• Vệ sinh cá nhân:<br>- Tắm diệt khuẩn cho bệnh nhân, nhân viên trong y tế: pha 21ml* dung dịch Dettol với 840ml nước tắm.<br>• Gia đình:<br>- Giặt: pha 21ml* dung dịch Dettol với 840ml nước.<br>- Sàn nhà và các bề mặt cứng khác: pha 6x21ml* dung dịch Dettol với 5l nước.<br>- Bồn cầu, chậu rửa (không acrylic), cống, …: Sử dụng dung dịch Dettol không pha loãng.<br>Lưu ý: không dùng cho bề mặt tiếp xúc trực tiếp với thực phẩm.</p>
            <p><strong>HƯỚNG DẪN BẢO QUẢN:</strong> <br>• Bảo quản nơi khô mát, tránh ánh sáng mặt trời trực tiếp.<br>• Bảo quản dưới 30 độ C.<br>• Hạn sử dụng: 36 tháng kể từ ngày sản xuất.</p>
            <p><strong>KHUYẾN CÁO AN TOÀN</strong><br>• Sản phẩm không pha loãng sẽ gây kích ứng mắt.<br>• Sương mù/ hơi có thể gây kích ứng đường hô hấp trên. <br>• Sản phẩm có thể gây kích ứng đường tiêu hóa trên. <br>• Độc tính về sinh thái của sản phẩm này chưa được xác định.<br>• Không được đổ sản phẩm này vào kênh rạch.<br>• Chỉ dùng ngoài<br>• Để xa tầm tay trẻ em</p>
            <p><strong>SƠ CỨU</strong><br>• Tiếp xúc với mắt: Rửa mắt ngay lập tức với nhiều nước. Nếu kích ứng kéo dài, liên hệ với bác sĩ<br>• Tiếp xúc với da: Rửa sạch da bằng nước. Nếu kích thích xảy ra và kéo dài, liên hệ với bác sĩ. <br>• Hít phải: Di chuyển đến nơi có không khí sạch. Nếu có khó thở, tìm kiếm sự chăm sóc y tế. <br>• Nuốt phải: Uống 2 ly nước. Liên hệ với bác sĩ hoặc trung tâm ‘Thông tin Độc chất’</p>
            <p><strong>*QUY ĐỔI:</strong> <br>• 21 ml=1 nắp đầy chai 500ml</p>
            <p><strong>THÔNG SỐ KĨ THUẬT</strong> <br>• Thông tin thương hiệu: Sản xuất bởi P.T Reckitt Benckiser Indonesia, JL. Raya Narogong Km.15, Pangkalan VIII, Desa Limus Nunggal, Pangkalan VII, Kec. Cileungsi, Bogor, Indonesia. Theo giấy phép của Reckitt &amp; Colman (Overseas) Limited<br>• Nhà nhập khẩu: VIMEDIMEX Bình Dương – Số 18 L1-2 VSIP II, Đường số 3, KCN Việt Nam – Singapore 2, Thủ Dầu Một, tỉnh Bình Dương<br>• Công ty chịu trách nhiệm về chế phẩm tại Việt Nam: Công ty TNHH DKSH Việt Nam, số 23 Đại lộ Độc Lập, khu công nghiệp Việt Nam – Singapore, phường Bình Hòa, thành phố Thuận An, tỉnh Bình Dương.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1777313541',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 4,
            'category_id' => 1,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/7d072208d9b4c1d8bb64f31c478309d8.jpg.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Gấu Bông Gối Ôm Thú Bông, Nhồi Bông Hình Ly Trà Sữa Xinh Xắn Ngộ Nghĩnh Siêu Hot',
            'regular_price' => 99000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/c41cd11d1f85fc1cf9fe0b8b58de1199.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><em><strong>Gấu Bông Gối Ôm Thú Bông, Nhồi Bông Hình Ly Trà Sữa Xinh Xắn Ngộ Nghĩnh Siêu Hot<br><br></strong></em></p>
            <ul>
            <li>Gấu bông hình ly trà sữa&nbsp; được thiết kế kiểu dáng tròn tròn đủ vòng tay ôm, lại dài dài đủ để vừa ôm vừa gác chân khi ngủ, hoặc để gối đầu hoặc tựa lưng mỗi khi bạn thấy mệt mỏi.&nbsp;</li>
            <li>Lớp lông bên ngoài được sử dụng nhung cao cấp, lớp nhung mềm mại và êm ái. Đặc biệt,được xử lý qua công nghệ kháng khuẩn nên rất thân thiện với môi trường.</li>
            <li>Với chất liệu vải cao cấp mềm mịn, 100% gòn trắng đàn hồi, tuyệt đối an toàn, có thiết kế hình bé heo nằm ngủ đáng yêu ngộ nghĩnh.</li>
            <li>Sản phẩm có đường may chắc chắn, độ bền cao, an toàn cho người sử dụng, rất hữu ích đối với các bé dùng trong lớp ngủ trưa hay đi du lịch bằng xe hơi, máy bay bởi ngoài cách thiết kế nhỏ gọn cùng chức năng dùng làm gối tựa lưng độc.</li>
            <li>Đường may tinh xảo, không bị xù hay tưa lông khi chơi lâu và dễ dàng giặt sấy.</li>
            <li>Món quà ý nghĩa dành tặng cho người thân, bạn bè, người yêu.</li>
            <li>Kích thước phù hợp có thể làm làm gối ôm hay vật trang trí trên giường các bé.<br><br></li>
            </ul>
            <p><img src="https://salt.tikicdn.com/ts/tmp/60/7a/99/d54c4bed482558104431c61a511de66b.jpg" alt="" width="480" height="640" style="display: block; margin-left: auto; margin-right: auto;"></p>
            <p>&nbsp;</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p><p>Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hoá đơn VAT không được cung cấp trong trường hợp này.</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1214313541',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 4,
            'category_id' => 1,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/c41cd11d1f85fc1cf9fe0b8b58de1199.jpg.webp',
                'images/products/2023/11/c0f4a5105c3b5ebba999571f2f4a6ecf.jpg.webp',
            ]),
            'variants' => json_encode([
                'Màu' => [
                    'variant_name' => 'Màu',
                    'variant_values' => [
                        'Nâu' => [
                            'quantity' => 50,
                            'selling_price' => 90000,
                            'sale_price' => 0,
                            'product_code' => 'OM379'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Đồ chơi mô hình xe cứu hỏa KAVY xe tải bơm chữa cháy, xe nâng chở người trên cao chi tiết sắc sảo các khớp chuyển động, bền bỉ vô cùng',
            'regular_price' => 73000,
            'sale_price' => 0,
            'stock_qty' => 150,
            'thumbnail_url' => 'images/products/2023/11/5d8ced4c87195fd7b8b64711a3a67eb7.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>---ĐỒ CHƠI CHO BÉ MÔ HÌNH XE CỨU HỎA BƠM CHỮA CHÁY---<br>+ Chất liệu hợp kim và nhựa ABS - loại nhựa nguyên sinh, ko chứa các chất phụ gia công nghiệp và hóa chất độc hại (có chứng chỉ hợp quy an toàn của Bộ khoa học Công nghệ)<br>+ Sản phẩm chống chịu va đập tốt, cứng và rắn nhưng ko giòn<br>+ Thiết kế tinh xảo, chắc chắn, với các khớp chuyển động làm tăng trí tưởng tượng của bé<br>+ Đầu bơm có thể trượt được, với chiều dài lên tới 35 cm, và bàn xoay được 360 độ<br>+ Sản phẩm thích hợp dùng làm quà tặng đồ chơi cho trẻ em hoặc để trưng bày<br>+ Kích thước : 20 x 6 x 7.5 cm<br>+ Trọng lượng : 220 gam</p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/bb/d6/47/28546a7e8b2e466c1737a06b5b274c82.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/bb/d6/47/28546a7e8b2e466c1737a06b5b274c82.jpg" alt="" width="750" height="750"></p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/0b/73/bc/0ecd8479b2e2f7206cafecb4cf7a941d.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/0b/73/bc/0ecd8479b2e2f7206cafecb4cf7a941d.jpg" alt="" width="750" height="750"></p>
            <p><img id="https://salt.tikicdn.com/ts/tmp/00/b2/25/35daa9d101dfc3cc8d4adb20a26fa32b.jpg" title="" src="https://salt.tikicdn.com/ts/tmp/00/b2/25/35daa9d101dfc3cc8d4adb20a26fa32b.jpg" alt="" width="750" height="750"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1214313541',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 5,
            'category_id' => 1,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/5d8ced4c87195fd7b8b64711a3a67eb7.jpg.webp',
                'images/products/2023/11/9475cdd90a861a26fb22a8bd83eeef1f.jpg.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'BALO HỌC SINH MR VUI 883 CHO BÉ GÁI VÀ BÉ TRAI LỚP 1-3',
            'regular_price' => 364000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/c2a87c15664ddefc07787009a39794f1.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><div class="title">Chi tiết sản phẩm Balo học sinh 883</div>
            <div class="clearfix">&nbsp;</div>
            <div class="evo-product-review-content expanded">
            <div class="ba-text-fpt has-height">
            <h3><strong>Mẫu mã hiện đại</strong></h3>
            <p>Balo cho bé 883 được thiết kế với các tông màu được phối hợp hài hòa với nhau. Kiểu dáng mang phong cách hiện đại, đơn giản nhưng không kém phần thời trang.</p>
            <p>&nbsp;</p>
            <p><img src="https://bizweb.dktcdn.net/100/343/358/products/balo-hoc-sinh-cap-1-883-xanh-den-hong-happy-day-1.jpg?v=1660896913853" alt="ba lo hoc sinh cap 1; ba lô cho học sinh cấp 1; ba lô học sinh; ba lô học sinh cấp 1; ba lô học sinh tiểu học; ba lô học sinh đẹp; balo cho học sinh cấp 1; balo hoc sinh cap 1; balo học sinh; balo học sinh cấp 1; balo học sinh giá rẻ; balo học sinh tiểu học; balo học sinh đẹp; cặp balo học sinh;"></p>
            <p>&nbsp;</p>
            <h3><strong>Chất liệu vải siêu nhẹ, hạn chế thấm nước</strong></h3>
            <p>Vải xốp 877&nbsp;với ưu điểm trượt nước tốt, chống bám bụi bẩn được chọn để may lớp bên ngoài của sản phẩm này. Bên trong balo có thêm lớp lót bằng vải Poly-Oxford chống nước được may kĩ càng. Với những chất liệu vải được Mr Vui lựa chọn kĩ càng, balo 883 bảo vệ tốt cho các đồ dùng học tập của bé, và đặc biệt chất liệu thân thiện với môi trường, không độc hại đối với bé giúp phụ huynh có thể yên tâm hơn.</p>
            <p>&nbsp;</p>
            <p><img src="https://bizweb.dktcdn.net/100/343/358/products/balo-hoc-sinh-cap-1-883-xanh-den-hong-happy-day-4.jpg?v=1660896913853" alt="ba lo hoc sinh cap 1; ba lô cho học sinh cấp 1; ba lô học sinh; ba lô học sinh cấp 1; ba lô học sinh tiểu học; ba lô học sinh đẹp; balo cho học sinh cấp 1; balo hoc sinh cap 1; balo học sinh; balo học sinh cấp 1; balo học sinh giá rẻ; balo học sinh tiểu học; balo học sinh đẹp; cặp balo học sinh;"></p>
            <p>&nbsp;</p>
            <h3><strong>Ngăn chứa&nbsp;bên trong balo học sinh 883</strong></h3>
            <p>Được thiết kế 1 ngăn chính và 2 ngăn nhỏ bên ngoài. Các ngăn được thiết kế khoa học giúp bé có thể sắp xếp đồ dùng học tập một cách hợp lý mà không mất thời gian tìm kiếm.</p>
            <h3><strong>Quai đeo chắc chắn</strong></h3>
            <p>Quai đeo có đệm mút mỏng được may tỉ mỉ, chắc chắn, ôm sát cơ thể của bé khi sử dụng. Ngoài ra, bé có thể điều chỉnh quai đeo phía sau linh hoạt theo từng kích cỡ cơ thể của bé.</p>
            <p>&nbsp;</p>
            <p><img src="https://bizweb.dktcdn.net/100/343/358/products/balo-hoc-sinh-cap-1-883-xanh-den-hong-happy-day-6.jpg?v=1660896913853" alt="ba lo hoc sinh cap 1; ba lô cho học sinh cấp 1; ba lô học sinh; ba lô học sinh cấp 1; ba lô học sinh tiểu học; ba lô học sinh đẹp; balo cho học sinh cấp 1; balo hoc sinh cap 1; balo học sinh; balo học sinh cấp 1; balo học sinh giá rẻ; balo học sinh tiểu học; balo học sinh đẹp; cặp balo học sinh;"></p>
            <p>&nbsp;</p>
            <h3><strong>Đệm lưng phân tản khí</strong></h3>
            <p>Phía sau balo được may cùng một lớp đệm khí giúp phân tản khí, tạo cảm giác thoải mái cho bé khi sử dụng.</p>
            <p>&nbsp;</p>
            <p><img src="https://bizweb.dktcdn.net/100/343/358/products/balo-hoc-sinh-cap-1-883-xanh-den-hong-happy-day-5-1.jpg?v=1660896913853" alt="ba lo hoc sinh cap 1; ba lô cho học sinh cấp 1; ba lô học sinh; ba lô học sinh cấp 1; ba lô học sinh tiểu học; ba lô học sinh đẹp; balo cho học sinh cấp 1; balo hoc sinh cap 1; balo học sinh; balo học sinh cấp 1; balo học sinh giá rẻ; balo học sinh tiểu học; balo học sinh đẹp; cặp balo học sinh;"></p>
            </div>
            </div><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1274319741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 1,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/c2a87c15664ddefc07787009a39794f1.jpg.webp',
                'images/products/2023/11/636088ef4a39cdae8db740eb5e541d07.jpg.webp',
                'images/products/2023/11/597e49e10f37ce6c43c2575dea4362f7.jpg.webp',
            ]),
            'variants' => json_encode([
                'Hình in' => [
                    'variant_name' => 'Hình in',
                    'variant_values' => [
                        'Basketball' => [
                            'quantity' => 150,
                            'selling_price' => 364000,
                            'sale_price' => 0,
                            'product_code' => 'OM380'
                        ],
                        'Happy Day' => [
                            'quantity' => 150,
                            'selling_price' => 368000,
                            'sale_price' => 0,
                            'product_code' => 'OM381'
                        ],
                        'Super Power' => [
                            'quantity' => 150,
                            'selling_price' => 364000,
                            'sale_price' => 0,
                            'product_code' => 'OM382'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Đồ chơi xếp hình, lắp ráp Qman 1411 - Tàu tuần dương biển (700 mảnh ghép)',
            'regular_price' => 359000,
            'sale_price' => 0,
            'stock_qty' => 150,
            'thumbnail_url' => 'images/products/2023/11/4f61634ebfc62ddd6e1a503420561e5f.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong>Đồ chơi xếp hình, lắp ráp Qman 1411 - Tàu tuần dương biển (</strong><strong>700</strong><strong> mảnh ghép)</strong></p>
            <p>Bộ xếp hình Qman 1411 - Tàu tuần dương biển là sản phẩm thuộc series # COMBAT ZONES FIRE bộ sưu tập bán chạy của QMAN.</p>
            <p>Bộ sản phẩm gồm có tổng cộng 700 chi tiết được chia thành 8 hộp nhỏ với tương ứng mỗi hộp nhỏ là một chiến đấu cơ dạng nhỏ. Lắp ráp 8 hộp nhỏ lại với nhau để thành một tàu tuần dương biển kích thước 36 x 13.5 x 6 cm.</p>
            <p>Sự đa dạng của các loại máy bay chiến đấu, xe quân sự, xe tăng chắc chắn sẽ làm cho các bé vô cùng thích thú và say mê sáng tạo.</p>
            <p>Bộ mô hình với màu sắc tươi sáng, sinh động càng tạo nên cảm hứng cho trẻ nhỏ khi chơi. Sau khi chơi xong, mô hình có thể bỏ lại trong hộp và cất giữ gọn gàng.</p>
            <p>Phát triển kỹ năng: Đồ Chơi Lắp Ráp QMAN giúp cho trẻ học tập cách nhận diện đồ vật, học tập lắp ghép và kết hợp các đồ vật với nhau.</p>
            <p>Bé sẽ thỏa sức tưởng tượng và nhập vai vào trò chơi, qua đó tăng khả năng tư duy và óc sáng tạo.</p>
            <p>Sản phẩm phù hợp với các bé từ 6 tuổi trở lên.</p>
            <ul><li>Chất liệu nhựa ABS đạt đầy đủ các chứng nhận EN71,CCC,ASTM,ISO9001,BSCI</li>
            <li>Số mảnh ghép: 700 chi tiết</li>
            <li>Khối lượng: 1049 gram</li>
            <li>Kích thước: 43.1 x 19.2 x 9.4 cm</li>
            <li>Thương hiệu: QMAN</li>
            </ul><p><img title="" src="https://salt.tikicdn.com/ts/tmp/74/e4/96/1c5cae490385727370d0c09770887db5.jpg" alt="" width="750" height="750"></p>
            <p><img title="" src="https://salt.tikicdn.com/ts/tmp/fc/08/89/1dee0871be18523b5143675c52dd02d3.jpg" alt="" width="750" height="750"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/05/9f/ae/6397a9c7105bfd9b1821642da31bc541.jpg" alt="" width="750" height="750"></p>
            <p><img title="" src="https://salt.tikicdn.com/ts/tmp/9c/cf/ec/a56d65770aad343f365afd58e6d3740c.jpg" alt="" width="750" height="750"></p>
            <p><img title="" src="https://salt.tikicdn.com/ts/tmp/6e/e6/e4/b4bcbac788ce86a05cba18a648f08466.jpg" alt="" width="750" height="750"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/78/9d/ed/8101d84d8c987d9393aa1b13dbaec62d.jpg" alt="" width="750" height="750"></p>
            <p>Giới thiệu về thương hiệu đồ chơi xếp hình Qman</p>
            <p>Qman là tên nhận diện thương hiệu mới của hãng sản xuất đồ chơi nội địa nổi tiếng của Trung Quốc – ENLIGHTEN. Qman là nhà sản xuất đồ chơi xếp hình lớn trên thế giới, bắt đầu từ những năm 1963. Các mẫu xếp hình của Qman do Qman tự phát triển, thiết kế. Đồ chơi xếp hình Qman được bán khắp thế giới và được cộng đồng chơi xếp hình đánh giá cao. Các khối xếp hình Qman làm bằng nhựa nguyên sinh an toàn với trẻ nhỏ, không có chất độc hại, bền dưới tác dụng vật lý, bền màu theo thời gian. Đặc điểm nhận dạng là dòng chữ ENLI in dập nổi trên các nốt tròn của từng mảnh ghép.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1123319741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 6,
            'category_id' => 1,
            'supplier_id' => 3,
            'gallery' => json_encode([
                'images/products/2023/11/4f61634ebfc62ddd6e1a503420561e5f.jpg.webp',
                'images/products/2023/11/3f26f298a33d9ba6085e1193e9af69af.jpg.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Điện Thoại Oppo A57 4GB/128GB - Hàng Chính Hãng',
            'regular_price' => 3540000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/483aa5193a635132be0ba7c205e35719.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>Điện Thoại Oppo A57 4GB/128GB - Hàng Chính Hãng</p>
            <p>Bộ sản phẩm bao gồm: Thân máy, bộ sạc, cáp USB, dụng cụ lấy sim, sách hướng dẫn, ốp lưng điện thoại.</p>
            <p>&nbsp;</p>
            <p>Màn hình tràn viền, sắc nét</p>
            <p>- OPPO trang bị cho máy màn hình IPS LCD kích thước 6.56 inch, hỗ trợ độ phân giải HD+ (720 x 1612 pixels), mật độ điểm ảnh khoảng 269 PPI.</p>
            <p>- &nbsp;Khung viền còn được vát phẳng tạo cảm giác sang trọng khi cầm trên tay.</p>
            <p>&nbsp;</p>
            <p>Bộ 3 camera sau AI lưu lại khoảnh khắc đáng nhớ</p>
            <p>- Camera chính cảm biến đến 13 MP, cảm biến độ sâu 2 MP chuyên chụp ảnh chân dung và đèn flash LED để hỗ trợ chụp trong những tình huống thiếu sáng.</p>
            <p>- Giúp người dùng có thể chụp gần hơn mọi vật thể, mọi chi tiết nhỏ sẽ được nhìn rõ mà mắt thường khó nhìn thấy, để bạn thỏa sức chụp và lưu lại những điều thú vị xung quanh.</p>
            <p>- Camera trước 8 MP với tính năng để chụp ảnh selfie.</p>
            <p>&nbsp;</p>
            <p>Hiệu năng mạnh mẽ</p>
            <p>- Oppo A57 mang cho mình sức mạnh MediaTek Helio G35 8 nhân, với con chip này đem đến cho người dùng trải nghiệm lướt web, đọc báo, xem youtube ổn định.</p>
            <p>&nbsp;</p>
            <p>Thời lượng pin ấn tượng</p>
            <p>- Oppo A57 trang bị dung lượng pin khủng 5000mAh đáp ứng được những nhu cầu sử dụng hằng ngày như học tập, giải trí, chơi </p>
            <p>Điện Thoại Oppo A57 4GB/128GB - Hàng Chính Hãng</p>
            <p>&nbsp;</p>
            <p>Cảm ơn quý khách đã quan tâm đến sản phẩm bên shop, quý khách vui lòng dành ít thời gian đọc kĩ chính sách bảo hành đổi trả:</p>
            <p>- Sản phẩm được bao test 7 ngày kể từ ngày nhận được sản phẩm và sẽ được đổi máy mới cùng model hoặc giá trị tương đương sau khi được thẩm định lỗi kĩ thuật.</p>
            <p>- Sản phẩm lỗi kĩ thuật được xác nhận bởi trung tâm bảo hành ủy quyền chính hãng (bằng văn bản); khách hàng có thể gửi lại shop để xác nhận lỗi hoặc tới trạm bảo hành gần nhất để thẩm định lỗi.</p>
            <p>- Sản phẩm đổi trả phải còn nguyên hiện trạng máy không trầy xước, không bể vỡ, vô nước, gãy chân sim, khung thẻ nhớ… (tất cả các tác động ngoại lực từ phía khách hàng đều TỪ CHỐI BẢO HÀNH)</p>
            <p>- Sản phẩm đổi trả phải còn nguyên hộp trùng imei, phụ kiện kèm theo máy không trầy xước, cháy nổ, đứt dây (nếu trầy xước shop không đổi phụ kiện mới)</p>
            <p>- Sau 7 ngày bao test, sản phẩm vẫn nhận chính sách bảo hành 12 tháng kể từ ngày kích hoạt bảo hành (khách chịu phí vận chuyển tới shop bảo hành hộ hoặc tự đến trung tâm bảo hành gần nhất để được hỗ trợ)</p>
            <p>- Trong một số trường hợp sản phẩm đã được kích hoạt bảo hành điện tử để tham gia chương trình khuyến mãi có giá tốt cho khách hàng. Vui lòng chat với nhân viên tư vấn để được hỗ trợ thêm thông tin.</p>
            <p>- Sản phẩm bị TỪ CHỐI BẢO HÀNH khi cháy nổ, bể vỡ, tác động ngoại lực vào thân và bên trong máy, có thay đổi sửa chữa bên ngoài.</p>
            <p>- Các sản phẩm bị khóa tài khoản như Gmail, Samsung account… Khách tự chịu phí mở khóa nếu không nhớ mật khẩu.</p>
            <p>Điện Thoại Oppo A57 4GB/128GB - Hàng Chính Hãng</p>
            <p>#điện_thoại #dienthoai #di_động #didong #điện_thoại_di_động #dien_thoai_di_dong #điện_thoại_chính_hãng #hàng_chính_hãng #điện_thoại_giá_rẻ #dien_thoai_gia_re #giá_rẻ #khuyen_mai #freeship #mobile #smartphone #điện_thoại_oppo #oppo #oppo_a57</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1188819741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/483aa5193a635132be0ba7c205e35719.jpg.webp',
                'images/products/2023/11/a00e836b2d4131f18c546166f7f05cb0.jpeg.webp',
            ]),
            'variants' => json_encode([
                'Màu sắc' => [
                    'variant_name' => 'Màu sắc',
                    'variant_values' => [
                        'Xanh' => [
                            'quantity' => 30,
                            'selling_price' => 3540000,
                            'sale_price' => 0,
                            'product_code' => 'OM385'
                        ],
                        'Đen' => [
                            'quantity' => 20,
                            'selling_price' => 3290000,
                            'sale_price' => 0,
                            'product_code' => 'OM386'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Máy tính bảng Masstel tab 10.1 pro - Hàng chính hãng',
            'regular_price' => 3473000,
            'sale_price' => 0,
            'stock_qty' => 20,
            'thumbnail_url' => 'images/products/2023/11/a654fd975a244bbdd4f6fe4623477b95.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong>MÀN HÌNH</strong></p>
            <p>Kích thước 10.1″ IPS – Công nghệ IPS cho góc nhìn rộng hơn, người sử dụng có trải nghiệm tốt hơn khi sử dụng. Độ phân giải 1280*800 điểm ảnh (Chuẩn HD với 16.7 triệu màu) cho hiển thị sắc nét.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/5e/83/b4/46e0017e7848890589e9887f638b8688.jpg" alt="" width="750" height="445"></p>
            <p><strong>TÍNH NĂNG</strong></p>
            <p>Hệ điều hành Android 11 mới nhất với tính năng cập nhật ưu việt</p>
            <p><strong><img src="https://salt.tikicdn.com/ts/tmp/79/93/63/3669f9c2b490593d6c5ab13c4138008f.jpg" alt="" width="750" height="445"></strong></p>
            <p>Được trang bị camera trước 5.0MP và camera sau 8.0MP AF, máy tính bảng Tab10.1 PRO hỗ trợ tốt cho nhu cầu học Online video call của các con, sử dụng các ứng dụng hoạt động ổn định, mượt mà.</p>
            <p><strong>CẤU HÌNH</strong></p>
            <p>Cấu hình vượt trội trong tầm giá đáp ứng đầy đủ nhu cầu học tập – giải trí.</p>
            <p><strong><img src="https://salt.tikicdn.com/ts/tmp/22/c0/78/0862a4735b6084ff9fc1c29562a72389.jpg" alt="" width="750" height="444"></strong></p>
            <h3 class="c1"><span class="c13">Bảo hành</span></h3>
            <h4 class="c1"><span class="c9">Bảo hành 12 tháng – Đổi trả 1 đổi 1 trong 100 ngày</span></h4>
            <p class="c1"><span class="c9">Áp dụng với sản phẩm mua mới từ các nhà phân phối chính thức của Masscom theo thời gian được tính từ thời điểm xuất hóa đơn. Sau 100 ngày các điều khoản bảo hành và sửa chữa thông thường sẽ được áp dụng.</span></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1199919741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/a654fd975a244bbdd4f6fe4623477b95.jpg.webp',
                'images/products/2023/11/0a67a712e1c83c858457617a616ad29f.jpg.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Máy tính bảng quản lý thời gian sử dụng dành cho trẻ em Masstel Kidzone-1 đổi 1 trong vòng 100 ngày',
            'regular_price' => 1950000,
            'sale_price' => 0,
            'stock_qty' => 100,
            'thumbnail_url' => 'images/products/2023/11/7103aa787ae502fc03b82a2a170ee020.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p style="text-align: center;"><strong>Tablet Giáo dục Masstel Kidzone - Hàng chính hãng - Tặng gói học NEXTA TIỂU HỌC + ICANKID + KHAN KIDS</strong></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/d8/cb/78/b961631e4d7ba27adb14f7be1eca9c82.jpg" alt="" width="750" height="750"></p>
            <h2><img src="https://salt.tikicdn.com/ts/tmp/41/85/04/178c9ef263091df256b11942a59e80fc.jpg" alt="" width="750" height="750"></h2>
            <p>Giới hạn thời gian sử dụng, đảm bảo trẻ không bị nghiện máy tính bảng</p>
            <p>KidZone được tích hợp ứng dụng kiểm soát thời gian sử dụng, giúp phụ huynh có thể thiết lập khung giờ trẻ dành cho học tập và giải trí. Cùng với đó, phụ huynh có thể đặt quyền mở/ khóa các ứng dụng và trang website trẻ được phép truy cập trên thiết bị. Điều này giúp đảm bảo rằng trẻ sử dụng máy tính bảng một cách có chọn lọc và cân đối.</p>
            <p>Bảo mật và an toàn</p>
            <p>KidZone được tích hợp các tính năng bảo mật để đảm bảo tài khoản và dữ liệu cá nhân của trẻ em luôn an toàn. Các ứng dụng và nội dung cũng được kiểm duyệt kỹ càng để đảm bảo tính phù hợp với độ tuổi của trẻ.</p>
            <p>&nbsp;</p>
            <h3><img src="https://salt.tikicdn.com/ts/tmp/f8/a0/00/eeac6f55e637d6ebba0b77a1cad81c8d.jpg" alt="" width="750" height="750"></h3>
            <p>MASSTEL KIDZONE - MÁY TÍNH BẢNG GIÚP TRẺ TỰ TIN NÓI TIẾNG ANH</p>
            <p>Học tiếng anh thú vị và hiệu quả</p>
            <p>Không cần phải đến các trung tâm, không cần tốn nhiều chi phí cho các khóa học, giờ đây trẻ có thể học tiếng anh hoàn toàn miễn phí trên Masstel KidZone thông qua ứng dụng ICANKid và Khan Academy Kids.</p>
            <p>ICANKid là hệ thống ứng dụng thông minh tối ưu lộ trình học chơi, giúp trẻ phát triển toàn diện: ngôn ngữ, kỹ năng, tư duy, cảm xúc. Trẻ sẽ được thỏa sức học chơi song ngữ Anh-Việt với nhiều trải nghiệm thú vị. Tại Masstel KidZone, ICANKid đã được cài đặt sẵn và trẻ có thể học miễn phí trong 1 năm, trị giá 499.000.</p>
            <p>Khan Academy Kids là ứng dụng học tập và giải trí miễn phí 100% bằng tiếng Anh. Thông qua ứng dụng trẻ có thể luyện tập phát âm tiếng Anh chuẩn, tiếp cận nguồn tài liệu tiếng Anh có chất lượng quốc tế, học tập và tư duy sáng tạo.</p>
            <h3><img src="https://salt.tikicdn.com/ts/tmp/37/bc/4d/2cf61c09775e1f6f61e2099d4f786a3d.jpg" alt="" width="750" height="750"></h3>
            <p>Kho trò chơi phát triển tư duy</p>
            <p>Không chỉ có các ứng dụng học tập chuyên sâu, KidZone còn khó trò chơi tư duy hấp dẫn: ABC Kids, Multiplication Kids, Number Kids, 123 Numbers, ABC Spelling… mang đến môi trường học tập và giải trí vui vẻ cho trẻ.</p>
            <h3><img src="https://salt.tikicdn.com/ts/tmp/12/99/6d/bb828edc3dc298a58dd18ab8b66841c2.jpg" alt="" width="750" height="750"></h3>
            <p>Gia sư tại nhà miễn phí</p>
            <p>KidZone tích hợp ứng dụng Nexta Edu tiểu học trị giá 800.000 đồng/năm bao gồm chương trình học chuẩn với 3 môn: Toán, Tiếng Việt và Tiếng Anh từ tiền tiểu học đến lớp 5. Cùng với đó là thư viện với hơn 500 đầu sách và hệ sinh thái ứng dụng liên tục mở rộng, bao gồm hơn 12 trò chơi giáo dục từ Nexta và các đối tác hàng đầu thế giới. Ứng dụng này sẽ phát triển cho trẻ năng lực tự học tập, tự nghiên cứu kiến thức từ đó xây dựng nền tảng kiến thức chắc chắn toàn diện.</p>
            <h3><img src="https://salt.tikicdn.com/ts/tmp/62/0c/d4/c1ecdd9b1ba0beb771b9e31d4032282a.jpg" alt="" width="750" height="750"></h3>
            <h3><img src="https://salt.tikicdn.com/ts/tmp/03/2d/0d/98af941ea3c0895fd314565435ac7d42.jpg" alt="" width="750" height="750"></h3>
            <h3>Bảo hành</h3>
            <h4>Bảo hành 12 tháng – Đổi trả 1 đổi 1 trong 100 ngày</h4>
            <p>Áp dụng với sản phẩm mua mới từ các nhà phân phối chính thức của Masscom theo thời gian được tính từ thời điểm xuất hóa đơn. Sau 100 ngày các điều khoản bảo hành và sửa chữa thông thường sẽ được áp dụng.</p>
            <p>&nbsp;</p>
            <p>#masstel #masstelofficial #masstelkidzone</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1125819741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 7,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/7103aa787ae502fc03b82a2a170ee020.jpg.webp',
                'images/products/2023/11/3b47aa589eace6b1cf74f4aeaf63486c.jpg.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Máy đọc sách All New Kindle Paperwhite 5 (11th Gen) - Hàng nhập khẩu',
            'regular_price' => 3850000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/d0c0867b3048836b567c7152bbf2207f.jpg.webp',
            'description' => '<div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><div class="intro-text">
            <p><em><strong>Amazon vừa chính thức ra mắt thế hệ tiếp theo của dòng máy đọc sách Kindle Paperwhite.</strong></em></p>
            </div>
            <p><strong>Kindle Paperwhite 5</strong>&nbsp;(hay&nbsp;<em><strong>Kindle Paperwhite 11th Gen</strong></em>) là phiên bản thay thế cho chiếc Kindle Paperwhite 4 đã ra mắt từ năm 2018. Thường thì sau mỗi 2-3 năm thì Amazon mới nâng cấp sản phẩm Kindle một lần và đợt nâng cấp này có thể nói là sự nâng cấp lớn nhất từ trước đến nay với dòng máy Kindle Paperwhite.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/13/53/56/da85b12e437ce2856543541172fe16c0.jpeg" alt="" width="750" height="763"></p>
            <p><strong>Kindle Paperwhite 5</strong>&nbsp;có tất cả 3 phiên bản: bản&nbsp;<strong>Chuẩn (Paperwhite)</strong>, bản&nbsp;<strong>Đặc Biệt (Paperwhite Signature Edition)</strong>&nbsp;và phiên bản&nbsp;<strong>Trẻ em (Papewhite Kids)</strong>. Hiện tại máy chỉ có màu đen.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/86/8f/ce/d304c6ef4044ab9d913158cf823996d0.jpg" alt="" width="750" height="412"></p>
            <p>Cụ thể thì&nbsp;<strong>Kindle Paperwhite bản chuẩn</strong>&nbsp;sẽ có giá là 140 USD, sở hữu màn hình 6.8 inch, lớn hơn so với màn 6 inch của thế hệ trước và viền màn hình cũng được làm mỏng hơn. Máy có bộ nhớ 8GB và được giới thiệu là có tốc độ chuyển trang nhanh hơn 20% so với trước. Amazon nói rằng máy có thời lượng pin lên tới 10 tuần cho một lần sạc. Kindle Paperwhite 5 sẽ là chiếc Kindle đầu tiên được trang bị kết nối USB Type-C, một điểm mà rất nhiều người mong đợi. Cũng giống như phiên bản trước, Kindle Paperwhite 5 chống nước theo chuẩn IPX8.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/42/e6/71/79c80f959a31431398ea56305822a400.jpg" alt="" width="750" height="279"></p>
            <p>Cuối cùng, tính năng nổi bật nhất, Paperwhite 5 đã được trang bị hệ thống đèn nền kép với 2 tông màu Ấm/Lạnh, tương tự như trên mẫu máy cao cấp Kindle Oasis 3. Tính năng này giúp bạn có thể chỉnh đèn từ màu trắng sang vàng để dịu mắt hơn khi đọc vào ban đêm.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/78/74/ce/fce9bca4a88d9a4d310182de639aeab3.png" alt="" width="750" height="409"></p>
            <p><strong>Kindle Paperwhite Signature Edition</strong> là phiên bản Đặc biệt, được bán với giá 189.99 USD. Máy có các tính năng và ngoại hình giống như bản chuẩn nhưng bộ nhớ được nâng lên 32GB thay vì 8GB. Ngoài ra phiên bản Signature là thiết bị đầu tiên hỗ trợ sạc không dây (chuẩn Qi) giúp bạn sạc máy dễ dàng hơn nếu đã sở hữu một cục sạc không dây trong nhà. Phiên bản Đặc biệt này cũng có cảm biến ánh sáng để có thể điều chỉnh độ sáng đèn nền một cách tự động.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/f2/e4/c0/737e999bb02090678db6b97fcab29de1.jpeg" alt="" width="750" height="421"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1188819741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 7,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/d0c0867b3048836b567c7152bbf2207f.jpg.webp',
                'images/products/2023/11/75d04cd242f6d891fd867fa7a599c70d.jpg.webp',
            ]),
            'variants' => json_encode([
                'Dung lượng' => [
                    'variant_name' => 'Dung lượng',
                    'variant_values' => [
                        '8GB' => [
                            'quantity' => 30,
                            'selling_price' => 3380000,
                            'sale_price' => 0,
                            'product_code' => 'OM3813'
                        ],
                        '16GB' => [
                            'quantity' => 20,
                            'selling_price' => 3850000,
                            'sale_price' => 0,
                            'product_code' => 'OM386'
                        ],
                        '32GB' => [
                            'quantity' => 20,
                            'selling_price' => 4690000,
                            'sale_price' => 0,
                            'product_code' => 'OM311'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Dây Sạc nhanh cho Iphone PD 20W Type C to IP Hoco X14 dây dù chống đứt chống rối siêu bền, truyền dữ liệu dài 1M/2M/3M - Hàng Chính Hãng',
            'regular_price' => 97000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/18cdf2c14d584e5ceb1e9a8d95f87620.jpg.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p>&nbsp;</p>
            <p>✪ Model:&nbsp; X14 PD 20W</p>
            <p>✪ Chiều dài : 1m/2m/3m</p>
            <p>✪ Màu sắc: đen</p>
            <p>✪ Cổng sạc: Type C sang iphone</p>
            <p>✪ Chất liệu: dây bọc dù chống đứt</p>
            <p>✪ Sạc nhanh: PD 20W, Quick Charger 3.0</p>
            <p>✪ Thiết kế đầu sạc chống gãy gập trong quá trình sử dụng, cầm chắc tay</p>
            <p>✪ Hỗ trợ truyền dữ liệu data</p>
            <p>&nbsp;</p>
            <div class="syl-image-wrapper"><img src="https://salt.tikicdn.com/cache/w750/ts/product/0d/b3/68/480ace8bf131fe312430c0cf4d5c5ea1.jpeg" width="1024" height="1024" alt="4d28848ac98341d9b24bb899b8899bfe~tplv-o3syd03w52-origin-jpeg.jpeg"></div>
            <p><img src="https://salt.tikicdn.com/ts/tmp/fd/4b/3d/b689c48b4e7c74945ab3a1bfd858dca4.jpg" alt="" width="750" height="750"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '1182559741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 12,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/18cdf2c14d584e5ceb1e9a8d95f87620.jpg.webp',
                'images/products/2023/11/409eb7d5ee677910cd0960256de9e83a.jpg.webp',
                'images/products/2023/11/676f4882bfa726e28cec0e6cced0f83f.jpg.webp',
            ]),
            'variants' => json_encode([
                'Chiều dài' => [
                    'variant_name' => 'Chiều dài',
                    'variant_values' => [
                        '1m' => [
                            'quantity' => 50,
                            'selling_price' => 97000,
                            'sale_price' => 0,
                            'product_code' => 'OM3814'
                        ],
                        '2m' => [
                            'quantity' => 50,
                            'selling_price' => 99000,
                            'sale_price' => 0,
                            'product_code' => 'OM384'
                        ],
                        '3m' => [
                            'quantity' => 50,
                            'selling_price' => 117000,
                            'sale_price' => 0,
                            'product_code' => 'OM312'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Điện Thoại Nokia 215 4G - Hàng Chính Hãng',
            'regular_price' => 889000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/7e5c8a16fe860e319c42b408030d03c7.jpg.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Thiết kế đơn giản, gọn nhẹ</h3>
            <p><strong>Điện Thoại Nokia 215 4G</strong> sử dụng chất liệu nhựa cho kiểu dáng bền bỉ, các nút cảm ứng mềm lớn, cạnh dễ cầm và mặt lưng cong được thiết kế để vừa vặn hoàn toàn trong tay bạn, cho bạn có được sự thoải mái, tiện lợi nhất.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/6a/eb/ee/72add503152477157704ef7bdada9d0e.jpg" alt="" width="750" height="497"></p>
            <p>Màn hình 2.4 inch và độ phân giải 240 x 320 pixels cho người dùng những trải nghiệm và tiện ích khá thông dụng trên một chiếc&nbsp;Nokia&nbsp;thông thường.</p>
            <h3>Nhiều tính năng đa phương tiện, giải trí</h3>
            <p>Nokia 215 4G cũng được tích hợp các trò chơi có sẵn trên máy như rắn săn mồi, Crossy Road giúp bạn có những phút giây thư giản đầu óc sau những giờ làm việc, học tập mệt mỏi.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/22/1f/6d/6cb3ed215d485187001f9edcc00ce622.jpg" alt="" width="750" height="497"></p>
            <p>Nhu cầu âm nhạc của bạn cũng được hỗ trợ, chế độ FM không dây cho bạn sự tiện hơn mỗi khi không có tai nghe. Máy cũng hỗ trợ thẻ nhớ ngoài tối đa 32 GB cho bạn lưu lại những bản nhạc yêu thích.</p>
            <h3>Khả năng kết nối mạng&nbsp;4G&nbsp;</h3>
            <p>Tận hưởng cuộc gọi VoLTE cho chất lượng rõ nét, giảm tiếng ồn giúp cuộc gọi đàm thoại của bạn luôn được tốt nhất.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/0d/e7/2e/e037fa4a58340f3a2b5ff6bc84d580b3.jpg" alt="" width="750" height="497"></p>
            <p>Điểm nổi bật của chiếc điện thoại này là được hỗ trợ 4G giúp máy có thể làm thêm được nhiều việc như lướt web đọc tin tức, kết nối mạng xã hội với 4G mọi nơi mọi lúc.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/ac/2f/66/7e13fe3fbcbf2a26132178a5aae7a767.jpg" alt="" width="750" height="497"></p>
            <h3>Dung lượng pin lâu dài</h3>
            <p>Với pin 1150 mAh, việc sử dụng được 2 - 3 ngày là điều mà Nokia 215 4G có thể làm được. Và máy có thể tháo lắp lên việc thay sim hay thay pin đều trở nên dễ dàng cho bạn.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/5e/c9/48/193d68dddacd051ff1ba02d79670f03f.jpg" alt="" width="750" height="496"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>
            ',
            'sku' => '1187259741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 13,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/7e5c8a16fe860e319c42b408030d03c7.jpg.webp',
                'images/products/2023/11/a7e91d9bb409df84370e01baf6b11084.jpg.webp',
            ]),
            'variants' => json_encode([
                'Màu' => [
                    'variant_name' => 'Màu',
                    'variant_values' => [
                        'Cyan' => [
                            'quantity' => 50,
                            'selling_price' => 890000,
                            'sale_price' => 0,
                            'product_code' => 'OM3814'
                        ],
                        'Đen' => [
                            'quantity' => 50,
                            'selling_price' => 890000,
                            'sale_price' => 0,
                            'product_code' => 'OM384'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Apple iPhone 15 Pro Max',
            'regular_price' => 33990000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/2c43f07b8fadacf77c41af02799f546e.jpg.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Nội dung quảng cáo</h3>
            <p>Giờ đây với thiết kế titan nhẹ và bền chắc, cùng chip A17 Pro cho khả năng đa nhiệm khủng. Bắt trọn những khoảnh khắc đặc biệt khi đang di chuyển với hệ thống camera chuyên nghiệp linh hoạt hơn. Và một bước nhảy vọt về tốc độ truyền dữ liệu với USB-C cùng chuẩn USB 3.</p>
            <p>&nbsp;</p>
            <h3>Tính năng nổi bật</h3>
            <ul>
            <li>ĐƯỢC ĐÚC TỪ TITAN&nbsp;— iPhone 15 Pro Max sở hữu thiết kế titan chuẩn hàng không vũ trụ, nhẹ và bền chắc với mặt sau bằng kính nhám. Mặt trước Ceramic Shield bền chắc hơn mọi mặt kính điện thoại thông minh. Và có khả năng chống tia nước, chống nước và chống bụi.<sup>1</sup></li>
            <li>MÀN HÌNH TIÊN TIẾN — Màn hình Super Retina XDR 6,7"<sup>2</sup> với ProMotion tăng tốc độ làm mới lên đến 120Hz khi bạn cần đến hiệu năng đồ họa vượt trội. Dynamic Island hiển thị linh động các cảnh báo và Hoạt Động Trực Tiếp. Đồng thời, với màn hình Luôn Bật, Màn Hình Khóa của bạn luôn hiển thị, nên bạn thậm chí không cần chạm vào màn hình để cập nhật thông tin.</li>
            <li>CHIP A17 PRO THAY ĐỔI CUỘC CHƠI — GPU đẳng cấp Pro đem tới đồ họa mượt mà hơn cùng ánh sáng chân thực dành cho môi trường có độ chi tiết cao. CPU nhanh hơn xử lý những khối lượng công việc phức tạp và các ứng dụng kinh doanh một cách dễ dàng. A17 Pro có khả năng tiết kiệm năng lượng ấn tượng, mang đến thời lượng pin cả ngày tuyệt vời, giúp bạn thoải mái dùng cho công việc khi đang di chuyển.<sup>3</sup></li>
            <li>HỆ THỐNG CAMERA PRO MẠNH MẼ — Sở hữu khung hình linh hoạt đáng kinh ngạc với 7 ống kính chuyên nghiệp. Chụp ảnh có độ phân giải siêu cao với nhiều màu sắc và chi tiết hơn bằng camera Chính 48MP. Và chụp ảnh cận cảnh sắc nét hơn từ khoảng cách xa hơn với camera Telephoto 5x trên iPhone 15 Pro Max.</li>
            <li>NÚT TÁC VỤ CÓ THỂ TÙY CHỈNH — Nút Tác Vụ là cách nhanh chóng đến tính năng yêu thích của bạn. Chỉ cần đặt thành một tác vụ bạn muốn, chẳng hạn chế độ Im Lặng, Camera, Ghi Âm hoặc Phím Tắt và nhiều tác vụ khác. Sau đó nhấn và giữ để khởi chạy tác vụ đó.</li>
            <li>KẾT NỐI PRO — Cổng kết nối USB-C mới cho phép bạn sạc máy Mac hoặc iPad bằng cùng cáp sạc với iPhone 15 Pro Max. Với USB 3, bạn sẽ thấy bước nhảy vọt về tốc độ truyền dữ liệu.<sup>4</sup> Và bạn có thể tải xuống tập tin nhanh hơn đến 2x bằng Wi-Fi 6E.<sup>5</sup></li>
            <li>CÁC TÍNH NĂNG AN TOÀN QUAN TRỌNG — Với tính năng Phát Hiện Va Chạm, iPhone có thể phát hiện va chạm ô tô nghiêm trọng và gọi trợ giúp khi cần kíp.<sup>6</sup></li>
            <li>ĐƯỢC THIẾT KẾ ĐỂ TẠO NÊN KHÁC BIỆT — iPhone trang bị các biện pháp bảo vệ quyền riêng tư, cho bạn quyền kiểm soát dữ liệu của mình. iPhone được làm từ nhiều vật liệu tái chế hơn để giảm thiểu tác động tới môi trường. Và được tích hợp những tính năng giúp iPhone dễ sử dụng hơn cho tất cả mọi người.</li>
            <li>ĐI KÈM VỚI BẢO HÀNH APPLECARE — Mỗi iPhone đều được bảo hành giới hạn trong một năm và hỗ trợ kỹ thuật miễn phí trong tối đa 90 ngày. Mua AppleCare+ để kéo dài thời hạn bảo hành.
            <ul>
            <li>&nbsp;</li>
            </ul>
            </li>
            </ul>
            <h3>Pháp lý</h3>
            <p><sup>1</sup>iPhone 15, iPhone 15 Plus, iPhone 15 Pro và iPhone 15 Pro Max có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.&nbsp;</p>
            <p><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật chuẩn, kích thước màn hình theo đường chéo là 6,12 inch (iPhone&nbsp;15&nbsp;Pro, iPhone&nbsp;15) hoặc 6,69 inch (iPhone&nbsp;15&nbsp;Pro&nbsp;Max, iPhone&nbsp;15&nbsp;Plus). Diện tích hiển thị thực tế nhỏ hơn.</p>
            <p><sup>3</sup>Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình; truy cập  để biết thêm thông tin.</p>
            <p><sup>4</sup>Yêu cầu cáp USB 3 với tốc độ 10Gb/s để đạt tốc độ truyền nhanh hơn đến 20x trên các phiên bản iPhone 15 Pro.</p>
            <p><sup>5</sup>Wi-Fi 6E khả dụng tại các quốc gia và khu vực có hỗ trợ.</p>
            <p><sup>6</sup>iPhone 15 và iPhone 15 Pro có thể phát hiện va chạm ô tô nghiêm trọng và gọi trợ giúp. Yêu cầu kết nối mạng di động hoặc Cuộc Gọi Wi-Fi.</p>
            <p>&nbsp;</p>
            <h3>Thông số kỹ thuật</h3>
            <p>Truy cập  để xem cấu hình đầy đủ.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>
            ',
            'sku' => '1187339741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/2c43f07b8fadacf77c41af02799f546e.jpg.webp',
                'images/products/2023/11/a028ac965e9ab94cec5f1e855d7a7da6.jpg.webp',
                'images/products/2023/11/cd0594d7530cefb5066ee280bf258fcf.jpg.webp',
            ]),
            'variants' => json_encode([
                'Màu sắc' => [
                    'variant_name' => 'Màu sắc',
                    'variant_values' => [
                        'Titan trắng' => [
                            'quantity' => 50,
                            'selling_price' => 33790000,
                            'sale_price' => 0,
                            'product_code' => 'OM38134'
                        ],
                        'Titan tự nhiên' => [
                            'quantity' => 50,
                            'selling_price' => 33900000,
                            'sale_price' => 0,
                            'product_code' => 'OM388'
                        ],
                        'Titan xanh' => [
                            'quantity' => 50,
                            'selling_price' => 33490000,
                            'sale_price' => 33000000,
                            'product_code' => 'OM383'
                        ],
                    ],
                ],
                'Dung lượng' => [
                    'variant_name' => 'Dung lượng',
                    'variant_values' => [
                        '256GB' => [
                            'quantity' => 150,
                            'selling_price' => 33490000,
                            'sale_price' => 0,
                            'product_code' => 'OM3854'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Máy tính bảng Masstel Tab 10.4 - Hàng chính hãng',
            'regular_price' => 3990000,
            'sale_price' => 0,
            'stock_qty' => 200,
            'thumbnail_url' => 'images/products/2023/11/2b89b14a506205c4fb0e2129536ced99.png.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Thiết kế hiện đại với kiểu dáng sang trọng</h3>
            <p>Masstel Tab 10.4 sở hữu thiết kế phẳng, tối giản dù có mức giá rẻ nhưng được chế tác từ kim loại một cách cứng cáp, sang trọng và tinh tế với độ bền cao.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/f0/60/38/ffbd51232790222d027c3d246b33d1a6.jpg" alt="" width="750" height="419"></p>
            <p>Mặt lưng với 2 tone màu đậm nhạt khác nhau, tạo điểm nhấn cũng như sự ấn tượng cho thiết bị đến với người dùng.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/0d/73/13/48611e88861a7e760aed8137578aaf62.jpg" alt="" width="750" height="477"></p>
            <p>Dù là một chiếc máy tính bảng lớn nhưng tổng thể Masstel Tab 10.4 vẫn gọn nhẹ với trọng lượng chỉ 440 gram, thuận tiện cho việc cầm nắm, cho vào balo và mang đi sử dụng ở bất cứ đâu.</p>
            <h3>Màn hình sắc nét, hiển thị ấn tượng</h3>
            <p>Chiếc máy tính bảng này của Masstel được trang bị màn hình với kích thước lớn 10.4 inch độ phân giải 1200 x 2000 Pixels và sử dụng tấm nền IPS LCD có chất lượng hiển thị tuyệt đẹp, góc nhìn rộng và độ sáng cao mang tới trải nghiệm học tập, đọc sách, lướt web, xem phim hay chơi game đều rất ấn tượng.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/eb/20/fb/fc141637589234ef2cffd4db34539e58.jpg" alt="" width="750" height="419"></p>
            <p>Phần viền màn hình với 4 cạnh được làm đều nhau giúp máy có cái nhìn cân đối hơn, dễ dàng thao tác, có điểm tựa và đồng thời mang tới trải nghiệm mãn nhãn hơn khi sử dụng.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/27/3d/9c/399b21c3d86c38150080184c414a8c6b.jpg" alt="" width="750" height="477"></p>
            <p>Không chỉ sắc nét, màn hình còn hỗ trợ khả năng cảm ứng tới 10 điểm, giúp bạn vuốt chạm được phản hồi một cách nhanh chóng và chính xác, trải nghiệm mượt mà hơn bao giờ hết.</p>
            <p>Để giải trí thêm hấp dẫn, Masstel còn trang bị cho thiết bị của mình hệ thống âm thanh sống động và tuyệt vời, đặc biệt là khi xem bộ phim yêu thích hay chơi những tựa game thú vị trên chiếc máy tính bảng đa năng này.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/e6/4a/b0/e84535bda4a2ee6424ed97c896e2cc39.jpg" alt="" width="750" height="419"></p>
            <p>Trong khi đó camera trước độ phân giải 5 MP sẽ là một phương tiện để bạn chụp ảnh selfie, gọi video với chất lượng ổn, đặc biệt là hỗ trợ tốt trong học tập, làm việc online một cách hiệu quả.</p>
            <h3>Thời lượng pin ấn tượng</h3>
            <p>Pin trên Masstel Tab 10.4″ có dung lượng lên tới 6000 mAh, giúp người dùng có thể sử dụng máy liên tục nhiều giờ mà không phải sạc lại pin giữa chừng. Công nghệ pin Li-Po giúp diện tích pin nhỏ gọn hơn, trọng lượng nhẹ hơn, chịu được nhiệt độ cao, an toàn khi sử dụng và có thể sạc dễ dàng qua cổng kết nối Type-C.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/f5/ec/2a/a90200239f2bce0d712bb738c64a1f7d.jpg" alt="" width="750" height="419"></p>
            <p>Máy được hỗ trợ và đi kèm với công suất sạc 10 W, mức sạc không quá cao nên bạn có thể sạc qua đêm. Tuy nhiên, với mức dung lượng 6000 mAh, bạn hoàn toàn yên tâm máy có thể đáp ứng tốt cả một ngày dài.</p>
            <p><strong>BẢO HÀNH</strong></p>
            <h4 class="c1"><span class="c9">Bảo hành 12 tháng – Đổi trả 1 đổi 1 trong 100 ngày</span></h4><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>
            ',
            'sku' => '111339741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 7,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/2b89b14a506205c4fb0e2129536ced99.png.webp',
                'images/products/2023/11/0a67a712e1c83c858457617a616ad29f.jpg.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Apple iPad Air (5th Gen) Wi-Fi, 2022 ',
            'regular_price' => 13650000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/ipad-hong_3.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Nội dung về tính năng</h3>
            <p>iPad Air 5 M1 hoàn toàn mới. Linh hoạt hơn bao giờ hết. Màn hình Liquid Retina 10.9 inch tuyệt đẹp với dải màu rộng cho bạn trải nghiệm thị giác vô cùng sống động và chi tiết khi xem ảnh hay video cũng như khi chơi game trên thiết bị (1). Chip Apple M1 nổi bật với hiệu năng vận hành mạnh mẽ và các tính năng máy học cao cấp, hỗ trợ tối đa tác vụ biên tập video 4K, soạn bài thuyết trình đẹp mắt hay thiết kế mô hình 3D - mọi tác vụ đều thật dễ dàng. Thiết bị giờ đã hỗ trợ Magic Keyboard và Apple Pencil (thế hệ thứ 2) (2), Touch ID nhanh nhạy, dễ sử dụng, bảo mật cao, camera sau 12MP góc siêu rộng hỗ trợ Center Stage và camera FaceTime HD 12MP góc rộng, cổng kết nối USB-C hỗ trợ sạc và phụ kiện, thời lượng pin bền bỉ cả ngày (3), công nghệ Wi-Fi 6. Với iPad Air 5 trong tay, bạn đã có đủ sức mạnh để hiện thực hóa mọi ý tưởng của bản thân.</p>
            <h3>Tính năng nổi bật</h3>
            <ul>
            <li>Màn hình Liquid Retina 10.9 inch tuyệt đẹp với True Tone và dải màu rộng P3 (1)</li>
            <li>Chip Apple M1</li>
            <li>Xác thực bảo mật với Touch ID</li>
            <li>Camera trước: 12MP góc rộng, Camera sau: 12MP góc siêu rộng hỗ trợ Center Stage</li>
            <li>Hiện có các màu xám, trắng, hồng, tím, xanh</li>
            <li>Âm thanh stereo rộng</li>
            <li>Thời lượng pin lên đến 10 giờ (3)</li>
            <li>Wi-Fi 6 (802.11ax)</li>
            <li>Cổng kết nối USB-C để sạc và kết nối phụ kiện</li>
            <li>Hỗ trợ Magic Keyboard, Smart Keyboard Folio và Apple Pencil (thế hệ thứ 2) (2)</li>
            <li>iPadOS 15 mang đến cho bạn các chức năng mới được thiết kế dành riêng cho iPad</li>
            </ul>
            <h3>Pháp lý</h3>
            <p>Ứng dụng có sẵn trên App Store. Nội dung được cung cấp có thể thay đổi.</p>
            <p>(1) Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình iPad Air (thế hệ thứ 4) là 10.86 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p>
            <p>(2) Phụ kiện được bán riêng. Khả năng tương thích tùy thuộc thế hệ sản phẩm.</p>
            <p>(3) Thời lượng pin khác nhau tùy theo cách sử dụng và cấu hình. Truy cập để biết thêm thông tin.</p>
            <p>(4) Cần có gói cước dữ liệu. Liên hệ với nhà mạng tại thị trường của bạn để biết thêm chi tiết. Tốc độ có thể thay đổi tùy địa điểm.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>
            ',
            'sku' => '1185639741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/ipad-hong_3.webp',
                'images/products/2023/11/f785e585dc087015a8dcb4517c3ece3a.jpg.webp',
                'images/products/2023/11/2e6caea6c2e30cfb65abb1b2cdc03480.jpg.webp',
            ]),
            'variants' => json_encode([
                'Màu sắc' => [
                    'variant_name' => 'Màu sắc',
                    'variant_values' => [
                        'Hồng ' => [
                            'quantity' => 50,
                            'selling_price' => 13650000,
                            'sale_price' => 0,
                            'product_code' => 'OM324'
                        ],
                        'Trắng' => [
                            'quantity' => 50,
                            'selling_price' => 13650000,
                            'sale_price' => 0,
                            'product_code' => 'OM328'
                        ],
                    ],
                ],
                'Dung lượng' => [
                    'variant_name' => 'Dung lượng',
                    'variant_values' => [
                        '64GB' => [
                            'quantity' => 150,
                            'selling_price' => 13650000,
                            'sale_price' => 0,
                            'product_code' => 'OM3354'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Điện thoại Xiaomi Redmi Note 12 (8GB/128GB) - Hàng chính hãng',
            'regular_price' => 4590000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/f3e8fa4ad4db9dc297d9b7c8664335f8.png.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3><strong>Vẻ ngoài thời trang cùng màu sắc mới mẻ</strong></h3>
            <p>Redmi Note 12 được tạo hình bằng một vẻ ngoài quen thuộc với các cạnh cùng hai mặt vát phẳng tinh tế, những vị trí giao nhau giữa mặt lưng và bộ khung cũng sẽ được bo cong nhẹ để mang lại cảm giác cầm nắm thoải mái.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/6b/6a/41/23d167b9697526c597b6c239a236b958.jpg" alt="" width="750" height="419"></p>
            <p>Ở lần ra mắt này, nhà Xiaomi mang đến cho người dùng bộ phiên bản gồm 3 màu sắc đó chính là: Xám, Xanh Lá và Xanh Dương, cả ba mẫu smartphone này đều được làm với tone màu dịu nhẹ và không bị quá rực, điều này giúp cho máy có được một cái nhìn tối giản và sang trọng hơn.</p>
            <h3><strong>Hiệu năng đáp ứng tốt nhiều tác vụ</strong></h3>
            <p>Redmi Note 12 sở hữu cho mình một con chip khá tốt trong tầm giá đến từ nhà Qualcomm, Snapdragon 685 sẽ là một trợ thủ đắc lực trong việc tối ưu hóa độ mượt mà trên các trò chơi hay đảm bảo mọi tác vụ cơ bản của bạn đều được vận hành một cách ổn định.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/23/a7/e1/c3e30748adc6746b45003c755cb14b76.jpg" alt="" width="750" height="419"></p>
            <p>Về việc đảm bảo hiệu quả cho các tác vụ đa nhiệm thì phiên bản này vẫn mang lại một sự ổn định khá tốt trong tầm giá, bởi đây là mẫu điện thoại RAM 4 GB và còn được bổ sung thêm tính năng mở rộng thêm, nhờ vậy mà bạn có thể an tâm đa nhiệm cùng lúc nhiều ứng dụng như vừa xem phim, vừa trả lời tin nhắn hay video call với bạn bè.</p>
            <h3><strong>Camera 50 MP nổi bật trong phân khúc</strong></h3>
            <p>Có thể nói camera là một thế mạnh của chiếc điện thoại Xiaomi Redmi này khi máy được trang bị đầy đủ 3 camera, hỗ trợ chụp ảnh độ phân giải cao thông qua camera chính 50 MP, mở rộng góc chụp với camera góc siêu rộng 8 MP và cuối cùng là khả năng chụp ảnh cận nhờ cảm biến macro 2 MP.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/1c/7e/29/4f3918ed38a3d742b64220c38b4c4f77.jpg" alt="" width="750" height="419"></p>
            <h3><strong>Màn hình AMOLED kích thước lớn</strong></h3>
            <p>Redmi Note 12 sẽ được trang bị trên phần màn hình một tấm nền AMOLED với kích thước rất lớn là 6.72 inch, điều này đem tới một không gian rộng rãi để bạn xem được đầy đủ mọi nội dung và màu sắc rực rỡ trên mọi khung hình.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/bf/0d/16/e09975d694dcb5d3ec11365e2e115170.jpg" alt="" width="750" height="419"></p>
            <p>Tuy máy chỉ là chiếc điện thoại nằm ở mức giá tầm trung nhưng lại được trang bị màn hình 120 Hz và độ sáng tối đa 1200 nits rất ấn tượng, nhờ đó máy mang đến khả năng phản hồi giữa màn hình và thao tác vuốt chạm của người dùng trở nên tốt hơn, tăng cường độ sáng cũng sẽ đem đến tiện ích cho những trường hợp sử dụng máy ở ngoài trời.</p>
            <h3><strong>Tích hợp pin lớn cùng công nghệ sạc nhanh 33 W</strong></h3>
            <p>Bên trong máy sẽ là viên pin có dung lượng 5000 mAh với khả năng duy trì việc sử dụng trong nhiều giờ liền mà không cần bận tâm đến vấn đề sạc, theo như hãng đề cập thì máy có thể đảm bảo cho bạn sử dụng với các tác vụ cơ bản trong 1.35 ngày.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/5b/c6/8c/43def9b9c6ddd5d4c07346d8e81bd4ff.jpg" alt="" width="750" height="419"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>',
            'sku' => '22239741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/f3e8fa4ad4db9dc297d9b7c8664335f8.png.webp',
                'images/products/2023/11/cb7defa29b848116d60917e6ce789047.jpg.webp',
                'images/products/2023/11/1e9b3a6d4f1283afa952870ad4a2291c.jpg.webp',
                'images/products/2023/11/1b471df8ace0367799e31e2982e4776b.jpg.webp'
            ]),
            'variants' => json_encode([
                'Màu sắc' => [
                    'variant_name' => 'Màu sắc',
                    'variant_values' => [
                        'Vàng' => [
                            'quantity' => 20,
                            'selling_price' => 4590000,
                            'sale_price' => 0,
                            'product_code' => 'OM214'
                        ],
                        'Xanh dương' => [
                            'quantity' => 10,
                            'selling_price' => 4490000,
                            'sale_price' => 0,
                            'product_code' => 'OM215'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Điện thoại Samsung Galaxy Z Flip 4 (8GB/128GB) - Hàng chính hãng',
            'regular_price' => 21430000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/eed46980c01c6332b513831e13dd14cf.jpg.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><h3>Nhỏ gọn trong lòng bàn tay của bạn</h3>
            <p><strong>Samsung Galaxy Z Flip4</strong>&nbsp;sở hữu ngoại hình bắt trend với các cạnh được gia công phẳng một cách tinh tế. Ra mắt với 4 phiên bản màu sắc giúp người dùng có thêm nhiều sự lựa chọn dành cho bản thân, cùng với tone màu trẻ trung thời thượng giúp người dùng toát lên được vẻ ngoài sang trọng và đầy tính hiện đại.</p>
            <p>Lần ra mắt này Samsung cho biết hãng đã nâng cấp phần bản lề để tăng tổng số lần gập trên Flip4, giúp thiết bị có thể đồng hành với người dùng trong khoảng thời gian lâu dài hơn mà ít khi khi gặp phải các tình trạng hỏng hóc.</p>
            <p>Tổng thể chiếc Galaxy Z Flip4 được bao bọc bởi bộ khung làm từ vật liệu nhôm Armor Aluminum cao cấp, không chỉ gia tăng độ bền cho máy mà nó còn giúp cho điện thoại toát lên được vẻ ngoài sang trọng và đẳng cấp nhờ khả năng phản quang óng ánh.</p>
            <p>Galaxy Z Flip4 sẽ có một thân hình thon gọn nhờ ứng dụng tỉ lệ màn hình 22:9, điều này giúp cho quá trình cầm nắm của bạn trở nên dễ chịu hơn bởi bề rộng của máy được tối ưu đi. Với kích thước chiều dài sau khi gập là 84.9 mm, vì thế thiết bị có thể dễ dàng nằm gọn trong lòng bàn tay để bạn có thể cầm nắm một cách chắc chắn.</p>
            <p>Samsung cho biết đây là điện thoại gập có hỗ trợ chuẩn kháng nước IPX8, giờ đây mọi người có thể an tâm hơn trong những tình huống khi vô tình tiếp xúc với nước.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/d4/db/fc/2c9590285c2d1817ca2b5d00062cd952.png"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/36/cc/f4/4fd8f9978e32c73634c770dd53d9f4d9.png"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/cd/c4/61/42758d548bae231ddacd18eebb407347.png"></p>
            <h3>Hiển thị hình ảnh sinh động</h3>
            <p>Trang bị trên máy là tấm nền Dynamic AMOLED 2X cao cấp đến từ nhà Samsung với khả năng tái hiện hình ảnh có màu sắc sống động và rực rỡ. Màu đen trên màn hình cũng được hiển thị sâu giúp cho người dùng có thể trải nghiệm nội dung trên các tựa game hay bộ phim hành động trở nên chân thực hơn.</p>
            <p>Mật độ điểm ảnh được gia tăng lên 425 PPI vì máy được trang bị màn hình kích thước 6.7 inch cùng độ phân giải Full HD+ (1080 x 2640 Pixels). Các tác vụ chỉnh sửa ảnh sẽ được xử lý dễ dàng hơn trên chiếc Galaxy Z Flip4 bởi độ sắc nét mà nó mang lại là rất cao.</p>
            <p>Phần mặt lưng của máy sẽ được trang bị một màn hình phụ có kích thước 1.9 inch giúp người dùng có thể đọc nhanh những thông báo, thậm chí ở phiên bản này máy còn hỗ trợ nhận cuộc gọi trực tiếp từ màn hình phụ mà không không cần phải mở điện thoại.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/82/85/5d/c5c777e1b4b7ccb53a89e6cba6e6469d.png"></p>
            <p>Với tần số quét lên đến 120 Hz ở màn hình chính giúp cho mọi thao tác hàng ngày của bạn được diễn ra mượt hơn hẳn, ngoài ra máy còn có khả năng tự động điều chỉnh xuống còn 1 Hz cho những tác vụ không cần cuộn lướt quá nhiều để tiết kiệm điện năng tiêu thụ.</p>
            <p>Độ sáng của Galaxy Z Flip4 đạt mức tối đa là 1200 nits, giúp thiết bị có khả năng hiển thị hình ảnh được rõ ràng hơn mỗi khi người dùng sử dụng điện thoại ở ngoài trời có độ sáng cao. Điều này thực sự hữu ích trong những tình huống như chụp ảnh ngoài trời hay xem bản đồ trong lúc di chuyển ngoài đường.</p>
            <h3>Chụp ảnh quay phim sắc nét</h3>
            <p>Galaxy Z Flip4 sở hữu ở phần mặt lưng là bộ đôi camera có cùng độ phân giải 12 MP với khả năng thu lại hình ảnh sắc nét, cũng như giúp bạn có thể quay được những thước phim đạt chuẩn 4K.</p>
            <p>Đi kèm với đó sẽ là tính năng chụp ảnh góc siêu rộng lên đến 123 độ, giờ đây người dùng có thể ghi lại những tấm ảnh có độ bao quát tốt hơn để mang trọn khung cảnh hùng vĩ vào trong bức hình. Chống rung quang học OIS cũng sẽ được bổ sung trên máy, đây chắc hẳn là tính năng rất hữu ích dành cho các bạn vlogger bởi sự giảm thiểu độ rung lắc trên khung hình mà bạn quay được.</p>
            <p>Phía mặt trước của máy sẽ là camera 10 MP được thiết kế theo dạng nốt ruồi quen thuộc. Cùng với đó sẽ là nhiều tính năng hữu ích giúp xử lý da của bạn trở nên mịn màng hơn, người dùng có thể tự tin chia sẻ những bức ảnh tự chụp lên các trang mạng xã hội để khoe với bạn bè.</p>
            <p>Ngoài ra bạn cũng có thể selfie bằng cụm camera sau một cách dễ dàng nhờ sự hỗ trợ đến từ màn hình phụ, bởi màn hình này sẽ cho bạn biết chất lượng ảnh mà máy sẽ thu lại ra sao để từ đó tìm cách điều chỉnh khung hình hay gương mặt sao cho bức ảnh trở nên ưng ý nhất.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/e4/d6/91/acef6e7b083aa96b5da0ef2a422d6e6e.png" width="750" height="358"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/e9/8d/e4/1e1449c35f5f13738c09a4fb21c6c896.png"></p>
            <h3>Cân mọi tác vụ với chipset hàng đầu đến từ Qualcomm</h3>
            <p>Bộ vi xử lý Snapdragon 8+ Gen 1 là cái tên được Samsung chọn để trang bị trên chiếc điện thoại flagship này, với hiệu năng mạnh mẽ nên mọi tác vụ cơ bản hàng ngày khó mà làm chiếc Galaxy Z Flip4 xảy ra tình trạng giật lag. Hơn thế nữa, ở mức cấu hình khủng như vậy thì máy hoàn toàn đáp ứng cho bạn khả năng chơi mượt nhiều tựa game đồ họa cao đang hiện hành.</p>
            <p>Điện thoại RAM 8 GB nên người dùng có thể an tâm hơn trong việc mở đồng thời nhiều ứng dụng mà không cần tắt đa nhiệm, bởi đây được xem là mức dung lượng khá cao cho việc lưu trữ các thông tin tạm thời mà không cần quá lo lắng đến việc máy sẽ giật lag hay tải lại ứng dụng.</p>
            <h3>Lấp đầy viên pin chỉ trong tích tắc</h3>
            <p>Bên trong một thiết bị có thân hình thanh mảnh sẽ là viên pin có dung lượng 3700 mAh, mặc dù con số này được xem là không quá lớn nhưng đây vẫn đủ để bạn có thể sử dụng cho việc liên lạc hay nghe nhạc cả ngày.</p>
            <p>Với công nghệ sạc nhanh 25 W nên việc lấp đầy viên pin trên Galaxy Z Flip4 sẽ chỉ còn trong tích tắc, ngoài ra người dùng còn thể sử dụng tính năng sạc không dây hết sức thuận tiện khi không phải loay hoay trong việc tìm jack cắm.</p>
            <p><img alt="" src="https://salt.tikicdn.com/ts/tmp/ba/37/c0/312b946758fe2ab07db32a02d2f107df.png" width="750" height="556"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/25/e0/3c/962d1aab922a77469acbb045aa0cffd6.png"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/d0/32/66/a1e9a0563995fdbb293b45e523e66c12.png"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/70/d5/1c/36df23cf753edfacbb0e1742d63ba1e1.png" alt="" width="750" height="850"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/c2/9a/a4/4cb268b06971674035b5040c357791cc.png"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/de/7d/73/fce304b661395d88e8e441c5d995c9b4.png"></p>
            <p>&nbsp;</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>
            ',
            'sku' => '14239741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/eed46980c01c6332b513831e13dd14cf.jpg.webp',
                'images/products/2023/11/4ebf2c21a9dfd9f60b62d5fab018e806.jpg.webp',
                'images/products/2023/11/c6a3f0ef50016d0553e2e5c07d2ebec8.jpg.webp',
            ]),
            'variants' => json_encode([
                'Màu sắc' => [
                    'variant_name' => 'Màu sắc',
                    'variant_values' => [
                        'Xanh dương' => [
                            'quantity' => 10,
                            'selling_price' => 21430000,
                            'sale_price' => 0,
                            'product_code' => 'OM115'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Máy đọc sách Kindle Scribe - Hàng nhập khẩu',
            'regular_price' => 12590000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/7b51868c1d7a251b6e66cde178f04d85.jpg.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><strong>Đọc và viết tự nhiên như khi làm trên giấy</strong></p>
            <p>Với màn hình E-ink 10,2 inch, độ phân giải 300 ppi chống lóa. Kindle Scribe hoàn hảo để đọc và viết, ngay cả dưới ánh sáng mặt trời. Màn hình lớn cung cấp cho bạn đủ không gian để ghi chú và viết nhật ký. Đồng thời giúp bạn dễ dàng điều chỉnh kích thước phông chữ và độ rộng lề nâng cao sự thoải mái khi đọc. Khả năng hiện thị cao khiến việc viết trên Kindle Scribe giống như viết trên giấy. Từ việc cầm bút dễ dàng, đến âm thanh bạn nghe thấy khi viết, bề mặt của Kindle Scribe được chế tạo để mang lại trải nghiệm.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/23/23/18/241ed095978c1bb2b3654bb6d276a3ee.jpg" alt="" width="750" height="416"></p>
            <p><strong>Sức mạnh của cây bút</strong></p>
            <p>Kindle Scribe bao gồm Bút cơ bản hoặc Bút cao cấp.&nbsp;Cả hai đều cung cấp cho bạn nhiều cách để sử dụng Kindle của mình hơn bao giờ hết.&nbsp;Đối với bút cơ bản, bạn có thể sử dụng mà không cần phải sạc. Ngoài ra, bút cao cấp có một công cụ tẩy chuyên dụng và một nút phím tắt giúp chuyển đổi giữa các loại bút như bút viết, bút đánh dấu và hơn thế nữa.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/b0/3b/3f/75221d7198176d9bafcb1bd50e2edd4a.jpg" alt="" width="750" height="304"></p>
            <p><strong>Thêm ghi chú viết tay vào sách của bạn</strong></p>
            <p>Bạn có thể tạo ghi chú viết tay trong hàng triệu quyển sách điện tử từ Kindle Store.&nbsp;Chỉ cần chạm vào nơi bạn muốn chèn ghi chú trên trang và đặt bút viết.&nbsp;Các ghi chú được tự động sắp xếp theo từng cuốn sách, vì vậy bạn có thể dễ dàng tìm kiếm, xem lại và xuất tất cả các ghi chú và nội dung đánh dấu trong sách của mình.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/a1/6e/4d/ed15989c2354a9fc228a50e0c7531477.png" alt="" width="750" height="632"></p>
            <p><strong>Đơn hóa mọi ghi chú của bạn</strong></p>
            <p>Kindle Scribe được thiết kế giống như một sổ ghi chép và nhật ký với các mẫu giấy đi kèm như giấy lót, giấy trắng, danh sách việc cần làm, &nbsp;Các file ghi chú được sắp xếp và dễ dàng tìm kiếm theo tên.&nbsp;Bạn có thể đồng bộ hóa những ghi chú đó sang ứng dụng Kindle trên điện thoại (sắp ra mắt vào đầu năm 2023).</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/51/d1/fc/44c0cb597577980a540014596862164d.jpg" alt="" width="750" height="750"></p>
            <p><strong>Ghi chú trong tài liệu của bạn</strong></p>
            <p>Dễ dàng nhập và kiểm soát các ghi chú trong tệp PDF hoặc trong Microsoft Word và các định dạng tương thích khác.&nbsp;Chia sẻ chúng tới Kindle Scribe của bạn thông qua trình duyệt web trên máy tính để bàn hoặc qua ứng dụng Kindle bằng nút “Chia sẻ” trên thiết bị iOS hoặc Android của bạn.&nbsp;Đến đầu năm 2023, bạn cũng sẽ có thể gửi tài liệu tới Kindle Scribe trực tiếp thông qua Microsoft Word.</p>
            <p><strong>Đọc và viết dưới mọi ánh sáng</strong></p>
            <p>Ánh sáng ấm có thể điều chỉnh và ánh sáng phía trước tự động điều chỉnh mang lại trải nghiệm đọc và viết thoải mái, được cá nhân hóa, dù ngày hay đêm.&nbsp;Và với tính năng sạc USB-C và thời lượng pin kéo dài hàng tháng để đọc và hàng tuần để viết, bạn có thể đắm mình trong nội dung của mình mà không phải lo lắng về việc tìm ổ cắm điện.</p>
            <p><strong>Thư viện sách đẳng cấp thế giới</strong></p>
            <p>Kindle Scribe là chiếc máy đọc sách hoàn hảo danh cho những ấn phẩm chứa nhiều hình ảnh, hình minh họa và đồ thị. Cửa hàng sách Kindle cung cấp hơn 13 triệu đầu sách, đa dạng như truyện tranh, sách nói, tạp chí, tiểu thuyết và sách phi hư cấu….được bổ sung và cập nhật liên tục.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/e3/33/a1/3651c3cf1e51cee0a2a240ce7f6d5330.jpg" alt="" width="750" height="228"></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>
            ',
            'sku' => '128839741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/7b51868c1d7a251b6e66cde178f04d85.jpg.webp',
                'images/products/2023/11/1c74d941c7531df95029fb2f4893aaf2.jpg.webp',
                'images/products/2023/11/f8914ee43aa0a0538ce11051eb14f46b.jpg.webp',
            ]),
            'variants' => json_encode([
                'Dung lượng' => [
                    'variant_name' => 'Dung lượng',
                    'variant_values' => [
                        '32GB - Premium Pen' => [
                            'quantity' => 10,
                            'selling_price' => 12590000,
                            'sale_price' => 0,
                            'product_code' => 'OM129'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Máy tính bảng Nexta Smart Study 1 - Hàng Chính Hãng',
            'regular_price' => 5490000,
            'sale_price' => 0,
            'stock_qty' => 250,
            'thumbnail_url' => 'images/products/2023/11/2630898943974373c3a7f2b18ce55533.jpg.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><p><span style="font-weight: 400;">Sản phẩm </span><strong><em>Smart Study 1</em></strong><span style="font-weight: 400;"> hướng tới sự toàn diện – “All in one”, với sự tích hợp toàn vẹn giữa 4 cấu phần chính:&nbsp; thiết bị phần cứng, chương trình học, hệ thống quản lý giáo dục và dịch vụ hỗ trợ học tập tận tâm.</span></p>
            <p><strong>Cấu phần thứ nhất: Thiết bị phần cứng là một máy tính bảng hiện đại với đầy đủ tính năng:</strong><span style="font-weight: 400;"> Màn hình lớn 10.4 inch full HD, độ phân giải 1200 x 2000 pixcel đem lại chất lượng hiển thị đẹp, góc nhìn rộng và độ sáng cao. ram 4Gb, bộ nhớ trong 64 Gb giúp trẻ học tập dễ dàng. Pin 6000mah cho phép trẻ học tập trong nhiều giờ không phải sạc pin và dừng lại giữa chừng. Đặc biệt thiết bị Smart Study 1.0 được trang bị đi kèm vỏ bọc bảo vệ với thiết kế độc đáo, thời trang, chân đỡ xoay 360 độ, 4 lớp bảo vệ cấu thành từ bọt biển và silicon cách điện giúp học sinh thuận tiện và an toàn khi sử dụng.&nbsp;&nbsp;</span></p>
            <p><strong>Cấu phần thứ 2 là nội dung học tập</strong><span style="font-weight: 400;"> với 3 môn toán tiếng việt và tiếng anh từ lớp 1 đến lớp 5 được tích hợp mặc định trên máy. Chương trình học được xây dựng theo khung chương trình tiểu học của Bộ giáo dục với hơn 1000 video giảng dạy và hơn 20.000 bài tập tương tác từ cấp độ cơ bản đến nâng cao phù hợp với năng lực học sinh tiểu học. Chương trình được xây dựng bởi hội đồng cố vấn của Nexta là các chuyên gia giáo dục, những thầy giáo cô giáo có kinh nghiệm, trình độ cũng như tâm huyết với sự nghiệp giáo dục. Tài nguyên học tập sẽ được tự động cập nhật theo sự thay đổi của chương trình giáo dục, sách giáo khoa đổi mới theo từng năm học và không ngừng được bổ sung.</span></p>
            <p><strong>Cấu phần thứ 3 là Hệ thống quản lý giáo dục</strong><span style="font-weight: 400;">. Đi kèm với thiết bị học tập Smart Study 1 là ứng dụng quản lý dành cho phụ huynh. Sau khi cài đặt ứng dụng quản lý Nexta Parent trên điện thoại, phụ huynh có thể</span><span style="font-weight: 400;"> kết nối, tương tác và hỗ trợ con từ xa</span><span style="font-weight: 400;">. Từ đó, phụ huynh có thể </span><span style="font-weight: 400;">lập thời gian biểu học tập cho con, theo dõi tình hình học tập của con hàng ngày, quản lý các ứng dụng</span><span style="font-weight: 400;"> con sử dụng trên máy. Hệ thống này đảm bảo phụ huynh </span><span style="font-weight: 400;">hoàn toàn yên tâm và tin tưởng</span><span style="font-weight: 400;"> con sẽ không bị ảnh hưởng bởi những ứng dụng và trang web không phù hợp. Ngoài ra, phụ huynh&nbsp; có thể giới hạn được thời gian sử dụng phù hợp một ngày để an toàn cho mắt và sức khỏe của con.&nbsp;</span></p>
            <p><strong>Cấu phần thứ tư là Dịch vụ giáo dục từ tâm</strong><span style="font-weight: 400;">: Trong 7 ngày đầu tiên sử dụng sản phẩm, chuyên gia Nexta sẽ h</span><strong>ướng dẫn quý phụ huynh hiểu và sử dụng hiệu quả tối đa các tính năng của sản phẩm</strong><span style="font-weight: 400;">. Hơn nữa, đội ngũ thầy cô giáo và chuyên gia giáo dục của Nexta sẽ hỗ trợ giải đáp các vướng mắc của phụ huynh và các con trong quá trình học tập trên thiết bị.&nbsp;</span></p>
            <p><span style="font-weight: 400;">&nbsp;- Với phương châm </span><strong>Giáo dục từ tâm</strong><span style="font-weight: 400;">, Nexta kỳ vọng mang đến giải pháp học tập THÔNG MINH - AN TOÀN VÀ HIỆU QUẢ cho các con khi ứng dụng công nghệ vào học tập.&nbsp;</span></p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>
            ',
            'sku' => '128839741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/2630898943974373c3a7f2b18ce55533.jpg.webp',
                'images/products/2023/11/b4765041416922386b213483f5b6a1d1.jpg.webp',
                'images/products/2023/11/204e65c3598a4be36e0b6f797fd9ebfc.png.webp',
            ]),
            'variants' => json_encode([]),
        ],
        [
            'name' => 'Điện thoại bàn Panasonic  KX-TS500MX-hàng chính hãng',
            'regular_price' => 300000,
            'sale_price' => 0,
            'thumbnail_url' => 'images/products/2023/11/b709b99a31a6355f82549c5320caa3c1.jpg.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb"><ul>
            <li>Treo tường hoặc để bàn</li>
            <li>Điều chỉnh âm lượng, chuông</li>
            <li>Quay số nhanh</li>
            <li>Đèn tín hiệu</li>
            <li>Sản xuất tại Malaysia</li>
            <li>Bảo hành 1 năm chính hãng Panasonic&nbsp;</li>
            <li>Giá bán đã thuế 10% VAT</li>
            </ul><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div></div></div>
            ',
            'sku' => '129939741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 8,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/b709b99a31a6355f82549c5320caa3c1.jpg.webp',
                'images/products/2023/11/a954e56e090581f692244109845b93ad.jpg.webp',
                'images/products/2023/11/a27e99afa7d4bb5a1df206f6523fe4c8.jpg.webp',
            ]),
            'variants' => json_encode([
                'Màu sắc' => [
                    'variant_name' => 'Màu sắc',
                    'variant_values' => [
                        'Trắng' => [
                            'quantity' => 20,
                            'selling_price' => 299000,
                            'sale_price' => 0,
                            'product_code' => 'OM219'
                        ],
                        'Xanh đen' => [
                            'quantity' => 20,
                            'selling_price' => 300000,
                            'sale_price' => 0,
                            'product_code' => 'OM2192'
                        ],
                        'Xám' => [
                            'quantity' => 20,
                            'selling_price' => 300000,
                            'sale_price' => 0,
                            'product_code' => 'OM2191'
                        ],
                    ],
                ],
            ]),
        ],
        [
            'name' => 'Điện thoại oukitel WP22 (Loa to,Chống nước ,chống sốc IP68/IP69K,Ram 13Gb(8GB+5Gb mở rộng),Rom 256Gb,Màn hình 6.58 FHD,tầm nhìn ban đêm,Pin 10.000mAh)- Hàng chính hãng',
            'regular_price' => 5990000,
            'sale_price' => 0,
            'stock_qty' => 250,
            'thumbnail_url' => 'images/products/2023/11/fb0fd9999e91bab2a00c53f0ac4c9049.jpg.webp',
            'description' => '
            <div class="style__Wrapper-sc-13sel60-0 dGqjau content"><div class="ToggleContent__Wrapper-sc-fbuwol-1 xbBes"><div class="ToggleContent__View-sc-fbuwol-0 imwRtb" style=""><ul><li>Dài 174mm Rộng 83.5mm Dày 19mm,Nặng 398g</li>
            <li>CPU: MTK Helio P90</li>
            <li>Hệ điều hành: Android 13</li>
            <li>RAM: 13Gb(8GB+5Gb mở rộng),Rom: 256GB</li>
            <li>SIM: Thẻ nano kép hoặc thẻ nano + thẻ T</li>
            <li>Màn hình FHD+ 6.58“</li>
            <li>Độ phân giải màn hình: 2408*1080</li>
            <li>Tỷ lệ khung hình: 20,5:9</li>
            <li>Tốc độ làm mới: 90Hz</li>
            <li>Camera trước: 16MP</li>
            <li>Camera sau: Camera chính 48MP + Camera nhìn đêm 20MP + Camera macro 2MP</li>
            <li>Pin: 10000mAh , Sạc ngược</li>
            <li>Mở khóa bằng vân tay</li>
            <li>Hỗ trợ Mở khóa bằng khuôn mặt</li>
            <li>Bluetooth: BT5.0</li>
            <li>Các tính năng khác: NFC, google play, Face ID, SOS cũng như OTG</li>
            <li>Điều hướng: GPS, Glonass, Beidou cũng như Galileo</li>
            <li>Dải tần mạng của Điện thoại Tough WP22 (Phiên bản toàn cầu)</li>
            <li>2G GSM: B2/B3/B5/B8</li>
            <li>WCDMA 3G: B1/B2/B4/B5/B8</li>
            <li>4G TDD: B38/B40/B41</li>
            <li>4G FDD: B1/B2/B3/B4/B5/B7/B8/B12/B13/B17/B18/B19/B20/B25/B26/B28(A+B)/B66</li>
            <li>Đa ngôn ngữ : có tiếng Việt</li>
            </ul><p>&nbsp;OUKITEL&nbsp;WP22</p>
            <ol style="list-style-type: lower-alpha;"><li>Điện&nbsp;thoại&nbsp;thông&nbsp;minh&nbsp;chắc&nbsp;chắn&nbsp;với&nbsp;âm&nbsp;thanh&nbsp;đột&nbsp;phá</li>
            </ol><p><img src="https://salt.tikicdn.com/ts/tmp/1f/d5/d4/dd8361e42edf59d25e9af8f0d9d674ec.jpg" alt="" width="750" height="547"></p>
            <p>&nbsp;</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/8c/b5/23/0e6595d8899f9f91564f36cacc9d6d1c.png" alt="" width="750" height="422"></p>
            <ol><li>Điện&nbsp;thoại&nbsp;thông&nbsp;minh&nbsp;chắc&nbsp;chắn&nbsp;WP22&nbsp;có&nbsp;loa&nbsp;điện&nbsp;thoại&nbsp;thông&nbsp;minh&nbsp;lớn&nbsp;nhất&nbsp;và&nbsp;to&nbsp;nhất&nbsp;</li>
            </ol><p><img src="https://salt.tikicdn.com/ts/tmp/5d/71/c5/500a83426de262a9cd11f6c0491ba6f3.png" alt="" width="750" height="507"></p>
            <p>Âm&nbsp;thanh&nbsp;vô&nbsp;song</p>
            <p>Hiệu&nbsp;suất&nbsp;Nổi&nbsp;bật&nbsp;với&nbsp;loa&nbsp;toàn&nbsp;dải&nbsp;36mm&nbsp;và&</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/5f/be/fb/df225858cf5fa13f3da5158056d31aaa.png" alt="" width="750" height="397"></p>
            <ol style="list-style-type: lower-roman;"><li>Âm&nbsp;thanh&nbsp;lớn&nbsp;và&nbsp;hiệu&nbsp;suất&nbsp;âm&nbsp;thanh&nbsp;đáng&nbsp;kinh&nbsp;ngạc&nbsp;dễ&nbsp;dàng&nbsp;tạo&nbsp;ra&nbsp;bầu&nbsp;không&nbsp;khí&nbsp;sôi&nbsp;động&nbsp;cho&nbsp;bất&nbsp;kỳ&nbsp;dịp&nbsp;tụ&nbsp;tập&</li>
            </ol><p><img src="https://salt.tikicdn.com/ts/tmp/29/1a/77/c23ec916283dffdea3da92fb4cfbb473.png" alt="" width="750" height="580"></p>
            <p>Không&nbsp;bao&nbsp;giờ&nbsp;bỏ&nbsp;lỡ&nbsp;bất&nbsp;kỳ&nbsp;,&nbsp;Cuộc&nbsp;gọi&nbsp;hoặc&nbsp;Thông&nbsp;báo</p>
            <p>WP22&nbsp;không&nbsp;chỉ&nbsp;có&nbsp;chất&nbsp;lượng&nbsp;loa&nbsp;tuyệt&nbsp;vời&nbsp;để&nbsp;giọng&nbsp;nói&nbsp;rõ&nbsp;hơn&nbsp;trong&nbsp;các&nbsp;cuộc&nbsp;gọi.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/12/d2/45/87001a99147825ec17467d1b1990e8cc.png" alt="" width="750" height="557"></p>
            <p>Dành&nbsp;nhiều&nbsp;thời&nbsp;gian&nbsp;hơn&nbsp;để&nbsp;tận&nbsp;hưởng&nbsp;và&nbsp;ít&nbsp;thời&nbsp;gian&nbsp;sạc&nbsp;hơn.&nbsp;Sao&nbsp;lưu&nbsp;trải&nbsp;nghiệm&nbsp;ngoài&nbsp;trời&nbsp;của&nbsp;bạn&nbsp;với&nbsp;pin&nbsp;lớn&nbsp;10000mAh.&nbsp;Niềm&nbsp;vui&nbsp;không&nbsp;bao&nbsp;giờ&nbsp;kết&nbsp;thúc!</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/b7/63/45/d3978db3b421224b1f3d9c088a83f85a.png" alt="" width="750" height="607"></p>
            <p>Được&nbsp;thiết&nbsp;kế&nbsp;đặc&nbsp;biệt&nbsp;để&nbsp;chịu&nbsp;đựng&nbsp;môi&nbsp;trường&lỏng&nbsp;đồng&nbsp;thời&nbsp;cho&nbsp;phép&nbsp;âm&nbsp;thanh&nbsp;đi&nbsp;qua.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/59/c1/99/015d38a98593330a324872356b5f5f4b.png" alt="" width="750" height="815"></p>
            <p>Oukitel&nbsp;WP22&nbsp;có&nbsp;màn&nbsp;hình&nbsp;cảm&nbsp;ứng&nbsp;IPS&nbsp;6,58"&nbsp;FHDnbsp;thoải&nbsp;mái.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/01/a0/20/49d9fb3001e53e594f6809b47fbeeb70.png" alt="" width="750" height="526"></p>
            <p>Điện&nbsp;thoại&nbsp;thông&nbsp;minh&nbsp;đi&nbsp;kèm&nbsp;với&nbsp;Android&nbsp;13,&nbsp;bộ&nbsp;xử&nbsp;lý&nbsp;MediaTek&nbsp;Helio&nbsp;P90,&nbsp;lõi&nbsp;tám,&nbsp;RAM&nbsp;8GB&dụng,&nbsp;tệp&nbsp;lớn,&nbsp;ảnh&nbsp;và&nbsp;video&nbsp;có&nbsp;độ&nbsp;phân&nbsp;giải&nbsp;cao.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/f5/b7/05/0e3131cfc6013060527f0ce8d409c4c6.png" alt="" width="750" height="543"></p>
            <p>Điện&nbsp;thoại&nbsp;thông&nbsp;minh&nbsp;OUKITEL&nbsp;WP22&nbsp;sử&nbsp;dụng&nbsp;bố&nbsp;Camera&nbsp;chính&nbsp;48MP&nbsp;có&nbsp;khả&nbsp;năng&nbsp;quay&nbsp;video&nbsp;4K&nbsp;(3840x2160).</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/7e/55/1b/d47d36afbd0b299d372d443a8d635d92.png" alt="" width="750" height="544"></p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/6a/d8/78/260b1a3cb18417d38b98f0cb34abab05.png" alt="" width="750" height="826"></p>
            <p>MÁY&nbsp;ẢNH&nbsp;AI&nbsp;48MP</p>
            <p>Dễ&nbsp;dàng&nbsp;chụp&nbsp;những&nbsp;bức&nbsp;ảnh&nbsp;phong&nbsp;cảnh&nbsp;ngoạn&nbsp;nbsp;nội&nbsp;dung&nbsp;video&nbsp;thú&nbsp;vị.</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/b2/4b/d1/0d8e3db0e62c0974423ac133ec4b018a.png" alt="" width="750" height="778"></p>
            <p>sản phẩm full box,nguyên seal</p>
            <p><img src="https://salt.tikicdn.com/ts/tmp/75/30/77/56442b104dc5d4d0112af316f8a30bce.png" alt="" width="750" height="555"></p>
            <p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p></div><a class="btn-more" data-view-id="pdp_view_description_button">Thu gọn </a></div></div>
            ',
            'sku' => '1266839741',
            'status' => 'selling',
            'origin' => 'VN',
            'rating' => rand(30, 50) / 10,
            'sold_count' => rand(0, 100),
            'view_count' => rand(100, 1000),
            'shop_id' => 10,
            'category_id' => 2,
            'supplier_id' => 5,
            'gallery' => json_encode([
                'images/products/2023/11/fb0fd9999e91bab2a00c53f0ac4c9049.jpg.webp',
                'images/products/2023/11/d00fa21e83ede7fa55c189453d41c4dd.png.webp',
            ]),
            'variants' => json_encode([]),
        ],
    ]
];
