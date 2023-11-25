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
            ]),
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

    ]
];
