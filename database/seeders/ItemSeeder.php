<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("items")->insert(
            [[
                "item_name"=>"Paprika 1",
                "item_desc_id"=>"Paprika 1 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 1 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>28000
            ],
            [
                "item_name"=>"Paprika 2",
                "item_desc_id"=>"Paprika 2 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 2 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>30000
            ],
            [
                "item_name"=>"Paprika 3",
                "item_desc_id"=>"Paprika 3 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 3 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>32000
            ],
            [
                "item_name"=>"Paprika 4",
                "item_desc_id"=>"Paprika 4 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 4 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>33000
            ],
            [
                "item_name"=>"Paprika 5",
                "item_desc_id"=>"Paprika 5 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 5 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>34000
            ],
            [
                "item_name"=>"Paprika 6",
                "item_desc_id"=>"Paprika 6 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 6 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>35000
            ],
            [
                "item_name"=>"Paprika 7",
                "item_desc_id"=>"Paprika 7 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 7 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>36000
            ],
            [
                "item_name"=>"Paprika 8",
                "item_desc_id"=>"Paprika 8 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 8 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>37000
            ],
            [
                "item_name"=>"Paprika 9",
                "item_desc_id"=>"Paprika 9 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 9 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>38000
            ],
            [
                "item_name"=>"Paprika 10",
                "item_desc_id"=>"Paprika 10 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Paprika 10 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Paprika.png",
                "price"=>39000
            ],
            [
                "item_name"=>"Brokoli 1",
                "item_desc_id"=>"Brokoli 1 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Brokoli 1 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Brokoli.png",
                "price"=>28000
            ],
            [
                "item_name"=>"Brokoli 2",
                "item_desc_id"=>"Brokoli 2 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Brokoli 2 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Brokoli.png",
                "price"=>58000
            ],
            [
                "item_name"=>"Brokoli 3",
                "item_desc_id"=>"Brokoli 3 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Brokoli 3 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Brokoli.png",
                "price"=>90000
            ],
            [
                "item_name"=>"Brokoli 4",
                "item_desc_id"=>"Brokoli 4 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Brokoli 4 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Brokoli.png",
                "price"=>92000
            ],
            [
                "item_name"=>"Brokoli 5",
                "item_desc_id"=>"Brokoli 5 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Brokoli 5 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Brokoli.png",
                "price"=>93000
            ],
            [
                "item_name"=>"Brokoli 6",
                "item_desc_id"=>"Brokoli 6 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Brokoli 6 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Brokoli.png",
                "price"=>94000
            ],
            [
                "item_name"=>"Brokoli 7",
                "item_desc_id"=>"Brokoli 7 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Brokoli 7 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Brokoli.png",
                "price"=>98000
            ],
            [
                "item_name"=>"Brokoli 8",
                "item_desc_id"=>"Brokoli 8 merupakan tomat yang berwarna hijau dan menyehatkan bagi kesehatan manusia, selain itu, juga banyak mendatangkan nutris baik dan membantu melawan bakteri yang jahat di dalam tubuh manusia.",
                "item_desc_en"=>"Brokoli 8 is a tomato that is green and healthy for human health. Apart from that, it also brings a lot of good nutrition and helps fight bad bacteria in the human body.",
                "item_picture"=>"Brokoli.png",
                "price"=>99000
            ]
            
            ]
       
        );
    }
}
