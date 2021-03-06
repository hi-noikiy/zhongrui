<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shop')->delete();
        
        \DB::table('shop')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uid' => 3,
                'type' => 1,
                'shop_pic' => 'attachment/user/2017/12/14/92a9334c4745c322271892535426762e.jpg',
                'shop_name' => '我的店鋪1',
                'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                'province' => 1,
                'city' => 45,
                'status' => 1,
                'total_comment' => NULL,
                'good_comment' => NULL,
                'shop_bg' => NULL,
                'seo_title' => NULL,
                'seo_keyword' => NULL,
                'seo_desc' => NULL,
                'is_recommend' => 0,
                'nav_rules' => '',
                'nav_color' => '',
                'banner_rules' => '',
                'central_ad' => '',
                'footer_ad' => '',
                'created_at' => '2017-12-14 09:57:11',
                'updated_at' => '2017-12-14 10:01:56',
            ),
            1 =>
                array (
                    'id' => 2,
                    'uid' => 1,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/1.png',
                    'shop_name' => '我的店鋪2',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            2 =>
                array (
                    'id' => 3,
                    'uid' => 2,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/2.png',
                    'shop_name' => '我的店鋪3',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            3 =>
                array (
                    'id' => 4,
                    'uid' => 4,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/3.png',
                    'shop_name' => '我的店鋪4',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            4 =>
                array (
                    'id' => 5,
                    'uid' => 5,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/4.png',
                    'shop_name' => '我的店鋪5',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            5 =>
                array (
                    'id' => 6,
                    'uid' => 6,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/5.png',
                    'shop_name' => '我的店鋪6',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            6 =>
                array (
                    'id' => 7,
                    'uid' => 7,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/6.png',
                    'shop_name' => '我的店鋪7',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            7 =>
                array (
                    'id' => 8,
                    'uid' => 8,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/15.png',
                    'shop_name' => '我的店鋪8',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            8 =>
                array (
                    'id' => 9,
                    'uid' => 9,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/8.png',
                    'shop_name' => '我的店鋪9',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            9 =>
                array (
                    'id' => 10,
                    'uid' => 10,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/9.png',
                    'shop_name' => '我的店鋪10',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            10 =>
                array (
                    'id' => 11,
                    'uid' => 11,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/10.png',
                    'shop_name' => '我的店鋪11',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            11 =>
                array (
                    'id' => 12,
                    'uid' => 12,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/11.png',
                    'shop_name' => '我的店鋪12',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            12 =>
                array (
                    'id' => 13,
                    'uid' => 13,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/12.png',
                    'shop_name' => '我的店鋪13',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            13 =>
                array (
                    'id' => 14,
                    'uid' => 14,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/13.png',
                    'shop_name' => '我的店鋪14',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),
            14 =>
                array (
                    'id' => 15,
                    'uid' => 15,
                    'type' => 1,
                    'shop_pic' => 'attachment/user/2017/12/14/14.png',
                    'shop_name' => '我的店鋪15',
                    'shop_desc' => '我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1我的店鋪1',
                    'province' => 1,
                    'city' => 45,
                    'status' => 1,
                    'total_comment' => NULL,
                    'good_comment' => NULL,
                    'shop_bg' => NULL,
                    'seo_title' => NULL,
                    'seo_keyword' => NULL,
                    'seo_desc' => NULL,
                    'is_recommend' => 0,
                    'nav_rules' => '',
                    'nav_color' => '',
                    'banner_rules' => '',
                    'central_ad' => '',
                    'footer_ad' => '',
                    'created_at' => '2017-12-14 09:57:11',
                    'updated_at' => '2017-12-14 10:01:56',
                ),

        ));
        
        
    }
}
