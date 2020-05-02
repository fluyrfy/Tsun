<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => '/images/松阪豬肉飯.jpg',
            'title' => '松阪豬肉飯',
            'description' => '超級好吃= =',
            'price' => 120
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/泡菜牛肉蓋飯.jpg',
            'title' => '泡菜牛肉蓋飯',
            'description' => '超級好吃= =',
            'price' => 150
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/香蒜豬片飯.jpg',
            'title' => '香蒜豬片飯',
            'description' => '超級好吃= =',
            'price' => 90
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/頂級無刺鰆魚飯.jpg',
            'title' => '頂級無刺鰆魚飯',
            'description' => '超級好吃= =',
            'price' => 160
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/頂級鐵路便當.jpg',
            'title' => '頂級鐵路便當',
            'description' => '超級好吃= =',
            'price' => 130
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/招牌飯.jpg',
            'title' => '招牌飯',
            'description' => '超級好吃= =',
            'price' => 80
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/日式關東煮湯.jpg',
            'title' => '日式關東煮湯',
            'description' => '超級好吃= =',
            'price' => 60
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/健康時蔬湯.jpg',
            'title' => '健康時蔬湯',
            'description' => '超級好吃= =',
            'price' => 30
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/蘿蔔排骨湯.jpg',
            'title' => '蘿蔔排骨湯',
            'description' => '超級好吃= =',
            'price' => 50
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => '/images/QQ控肉.jpg',
            'title' => 'QQ控肉',
            'description' => '超級好吃= =',
            'price' => 30
        ]);
        $product->save();
  
        $product = new \App\Product([
            'imagePath' => '/images/什榖米飯.jpg',
            'title' => '什榖米飯',
            'description' => '超級好吃= =',
            'price' => 20
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => '/images/水煮蛋.jpg',
            'title' => '水煮蛋',
            'description' => '超級好吃= =',
            'price' => 10
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => '/images/加菜一碟.jpg',
            'title' => '加菜一碟',
            'description' => '超級好吃= =',
            'price' => 30
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => '/images/白飯.jpg',
            'title' => '白飯',
            'description' => '超級好吃= =',
            'price' => 10
        ]);
        $product->save();

        
        $product = new \App\Product([
            'imagePath' => '/images/雞腿排.jpg',
            'title' => '雞腿排',
            'description' => '超級好吃= =',
            'price' => 30
        ]);
        $product->save();
    }
}
