<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\ReviewMedia;
use Illuminate\Database\Seeder;

class ReviewMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imageUrls = [
            "images/products/2023/11/6e5b8f8adde5d83d440132299b73d106.jpg.webp",
            "images/products/2023/11/5d37a9dd3b3220eea898ce6fd6e0997d.png.webp",
            "images/products/2023/11/4de19a048738335ae014b2ec49096329.jpg.webp",
            "images/products/2023/11/3b776b1a7fe5b0c4422d30fca8975a94.jpg.webp",
            "images/products/2023/11/2e093eca4b22dfa429baf62d9823605d.jpg.webp",
            "images/products/2023/11/2bfc4d97e69e4cad60eec1f253855510.jpg.webp",
            "images/products/2023/11/2b2ccd8d7130123f1f046fcf722e5938.jpg.webp",
            "images/products/2023/11/2aee870b81c410dc3f17be70787caead.jpg.webp",
            "images/products/2023/11/1f805f3f685671cdd6b28196b4e82bc9.jpg.webp",
            "images/products/2023/11/0e99e879463cb2f60ebbe7d36d705934.jpg.webp",
            "images/products/2023/11/419d747d3347c85e228f7fa421412e17.jpg.webp",
            "images/products/2023/11/191fa53a557a28a34780f153953f39c1.jpg.webp",
            "images/products/2023/11/53cba60039a6e2be88dfbf50305b48e1.jpg.webp",
            "images/products/2023/11/36c451905fc85297a3746f169884fd10.jpg.webp",
            "images/products/2023/11/34f15736dede729b1f6225202a0fa2a1.jpg.webp",
            "images/products/2023/11/33a7020e5dad0bf0d72bf802934a408c.jpg.webp",
            "images/products/2023/11/026e5b21ce9131b10eaf850eca0ad5a7.jpg.webp",
            "images/products/2023/11/9f6705cd40364f712c72cc9a500cb2c7.JPG.webp",
            "images/products/2023/11/9b06dde6b8e435328d260f2d097496b1.jpg.webp",
            "images/products/2023/11/09d65f1c6cbdcc720511956c2a39a234.jpg.webp",
            "images/products/2023/11/862693fc57b29d0f410f7c7d7615a374.jpg.webp",
            "images/products/2023/11/517079e11a594f3da6146130d2e9186f.PNG.webp",
            "images/products/2023/11/61096d93026da6e38af480ad3e1783af.jpg.webp",
            "images/products/2023/11/50183e8d9ff5b6788ef8e75a967fe653.jpg.webp",
            "images/products/2023/11/4457e1d160dc144cdd3b3ac4c05b2ab8.jpg.webp",
            "images/products/2023/11/3719ecede12596736ded3f4545a5a744.jpg.webp",
            "images/products/2023/11/3396e594ac104e2dba893b6ca34d8c23.jpg.webp",
            "images/products/2023/11/2023c57eacaa644b37beee48548d2b49.jpg.webp",
            "images/products/2023/11/529e768644d60d7e27c39f5ab05cd2bf.jpg.webp",
            "images/products/2023/11/b5163013892a770310d612f36372a2c3.jpg.webp",
            "images/products/2023/11/b631ffbdb4e79aea6aacd7701b3ca375.jpg.webp",
            "images/products/2023/11/b4b5fc79401e7aad4295a1bd9f73ddba.jpg.webp",
            "images/products/2023/11/af74750d0d3ca1bf7a5761c1572d8143.jpg.webp",
            "images/products/2023/11/aab8f4ee4e35c1659c20a0145cc2ccbc.jpg.webp",
            "images/products/2023/11/a72891d2ac7504fa740a785bb0a19e22.jpg.webp",
            "images/products/2023/11/a784f033c17b3b38cc38ae3ec95a5849.jpg.webp",
            "images/products/2023/11/a0358bd98515552c7aab5f43b9a6f6e1.jpg.webp",
            "images/products/2023/11/a95ea824c94e40054c489d49ded2938a.png.webp",
            "images/products/2023/11/42781894921e93601af1dcafe1b97397.jpg.webp",
            "images/products/2023/11/ff9b487ba2821c339107a9717135d7e5.jpg.webp",
            "images/products/2023/11/f4c2c188a082e1bfe7011830b61a4448.jpg.webp",
            "images/products/2023/11/f1aac6bb20e5b10f72c3ddeeef43f9ec.jpg.webp",
            "images/products/2023/11/eca7f0299aae3c543ef10c6468f1c5ef.jpg.webp",
            "images/products/2023/11/e97d31a04f933a92a14b735d7642f855.jpg.webp",
            "images/products/2023/11/e87abb1a874c76815d2b5bc140bdc410.jpg.webp",
            "images/products/2023/11/dbb80800bae2adfb6e7706eeef3252f8.jpg.webp",
            "images/products/2023/11/d4364c5f25d5baafae61fc34ec1f2f57.jpg.webp",
            "images/products/2023/11/d9edcb7abda1b851189ac93ee75f45d7.jpg.webp",
            "images/products/2023/11/c55f3fee2128c5f02580bc77ccb2a493.jpg.webp",
        ];

        foreach (range(1, 100) as $index) {
            $numImages = rand(0, 4);

            for ($i = 0; $i < $numImages; $i++) {
                $imageIndex = array_rand($imageUrls);
                $image = $imageUrls[$imageIndex];

                ReviewMedia::insert([
                    'review_id'  => $index,
                    'media'      => $image,
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString()
                ]);
            }
        }
    }
}