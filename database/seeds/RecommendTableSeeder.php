<?php

use Illuminate\Database\Seeder;

class RecommendTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recommend')->delete();
        
        \DB::table('recommend')->insert(array (
            0 => 
            array (
                'id' => 1,
                'position_id' => 2,
                'type' => 'successcase',
                'recommend_id' => 8,
                'recommend_type' => 'image',
                'recommend_name' => '厦门小吃餐厅营销方案',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/task/successDetail/8',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-13 06:11:03',
            ),
            1 => 
            array (
                'id' => 2,
                'position_id' => 2,
                'type' => 'successcase',
                'recommend_id' => 2,
                'recommend_type' => 'image',
                'recommend_name' => '土特产包装设计',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/task/successDetail/2',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-13 06:14:49',
            ),
            2 => 
            array (
                'id' => 3,
                'position_id' => 2,
                'type' => 'successcase',
                'recommend_id' => 5,
                'recommend_type' => 'image',
                'recommend_name' => '学缘网',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/task/successDetail/5',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-13 06:15:55',
            ),
            3 => 
            array (
                'id' => 4,
                'position_id' => 2,
                'type' => 'successcase',
                'recommend_id' => 4,
                'recommend_type' => 'image',
                'recommend_name' => '卡通形象修改设计',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/task/successDetail/4',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-13 06:17:11',
            ),
            4 => 
            array (
                'id' => 5,
                'position_id' => 2,
                'type' => 'successcase',
                'recommend_id' => 6,
                'recommend_type' => 'image',
                'recommend_name' => '这是一个测试',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/task/successDetail/6',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-13 06:18:04',
            ),
            5 => 
            array (
                'id' => 6,
                'position_id' => 2,
                'type' => 'successcase',
                'recommend_id' => 3,
                'recommend_type' => 'image',
                'recommend_name' => '音箱外观设计',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/task/successDetail/3',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-13 06:24:50',
            ),
            6 => 
            array (
                'id' => 7,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 1,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪1',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/1',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:43:25',
            ),
            7 => 
            array (
                'id' => 8,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 2,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪2',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/2',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:43:44',
            ),
            8 => 
            array (
                'id' => 9,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 3,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪3',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/3',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:44:05',
            ),
            9 => 
            array (
                'id' => 10,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 4,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪4',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/4',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:44:21',
            ),
            10 => 
            array (
                'id' => 11,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 5,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪5',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/5',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:47:42',
            ),
            11 => 
            array (
                'id' => 12,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 6,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪6',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/6',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:48:15',
            ),
            12 => 
            array (
                'id' => 13,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 7,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪7',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/7',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:49:07',
            ),
            13 => 
            array (
                'id' => 14,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 8,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪8',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/8',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:49:48',
            ),
            14 => 
            array (
                'id' => 15,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 9,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪9',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/9',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:50:22',
            ),
            15 => 
            array (
                'id' => 16,
                'position_id' => 12,
                'type' => 'shop',
                'recommend_id' => 10,
                'recommend_type' => 'image',
                'recommend_name' => '我的店鋪10',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/10',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 01:51:30',
            ),
            16 => 
            array (
                'id' => 17,
                'position_id' => 13,
                'type' => 'work',
                'recommend_id' => 1,
                'recommend_type' => 'image',
                'recommend_name' => '作品1',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyGoods/1',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:44:24',
            ),
            17 => 
            array (
                'id' => 18,
                'position_id' => 13,
                'type' => 'work',
                'recommend_id' => 2,
                'recommend_type' => 'image',
                'recommend_name' => '作品2',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyGoods/2',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:45:48',
            ),
            18 => 
            array (
                'id' => 19,
                'position_id' => 13,
                'type' => 'work',
                'recommend_id' => 3,
                'recommend_type' => 'image',
                'recommend_name' => '作品3',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyGoods/3',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:49:14',
            ),
            19 => 
            array (
                'id' => 20,
                'position_id' => 13,
                'type' => 'work',
                'recommend_id' => 4,
                'recommend_type' => 'image',
                'recommend_name' => '作品4',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyGoods/4',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:50:15',
            ),
            20 => 
            array (
                'id' => 21,
                'position_id' => 13,
                'type' => 'work',
                'recommend_id' => 5,
                'recommend_type' => 'image',
                'recommend_name' => '作品5',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyGoods/5',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:53:55',
            ),
            21 => 
            array (
                'id' => 22,
                'position_id' => 13,
                'type' => 'work',
                'recommend_id' => 6,
                'recommend_type' => 'image',
                'recommend_name' => '作品6',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyGoods/6',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:55:39',
            ),
            22 => 
            array (
                'id' => 23,
                'position_id' => 14,
                'type' => 'server',
                'recommend_id' => 11,
                'recommend_type' => 'image',
                'recommend_name' => '这是一个服务1',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyservice/11',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:56:13',
            ),
            23 => 
            array (
                'id' => 24,
                'position_id' => 14,
                'type' => 'server',
                'recommend_id' => 12,
                'recommend_type' => 'image',
                'recommend_name' => '这是一个服务2',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyservice/12',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:56:36',
            ),
            24 => 
            array (
                'id' => 25,
                'position_id' => 14,
                'type' => 'server',
                'recommend_id' => 13,
                'recommend_type' => 'image',
                'recommend_name' => '这是一个服务3',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyservice/13',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:57:09',
            ),
            25 => 
            array (
                'id' => 26,
                'position_id' => 14,
                'type' => 'server',
                'recommend_id' => 14,
                'recommend_type' => 'image',
                'recommend_name' => '这是一个服务4',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyservice/14',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:57:54',
            ),
            26 => 
            array (
                'id' => 27,
                'position_id' => 14,
                'type' => 'server',
                'recommend_id' => 15,
                'recommend_type' => 'image',
                'recommend_name' => '这是一个服务5',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyservice/15',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:58:36',
            ),
            27 => 
            array (
                'id' => 28,
                'position_id' => 14,
                'type' => 'server',
                'recommend_id' => 16,
                'recommend_type' => 'image',
                'recommend_name' => '这是一个服务61',
                'recommend_pic' => '',
                'url' => 'http://www.kppw.cn/shop/buyservice/16',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 02:59:23',
            ),
            28 => 
            array (
                'id' => 29,
                'position_id' => 3,
                'type' => 'article',
                'recommend_id' => 1,
                'recommend_type' => 'image',
                'recommend_name' => '2016区域互联网生存状况报告',
                'recommend_pic' => 'attachment/sys/194e237c54cc598a34511b253c569011.jpg',
                'url' => 'http://www.kppw.cn/article/1',
                'start_time' => '0000-00-00 00:00:00',
                'end_time' => '0000-00-00 00:00:00',
                'sort' => 0,
                'is_open' => 1,
                'created_at' => '2017-12-14 03:02:21',
            ),
            29 =>
                array (
                    'id' => 30,
                    'position_id' => 3,
                    'type' => 'article',
                    'recommend_id' => 2,
                    'recommend_type' => 'image',
                    'recommend_name' => '平面设计师工作内容的十大分类',
                    'recommend_pic' => 'attachment/sys/194e237c54cc598a34511b253c569011.jpg',
                    'url' => 'http://www.kppw.cn/article/2',
                    'start_time' => '0000-00-00 00:00:00',
                    'end_time' => '0000-00-00 00:00:00',
                    'sort' => 0,
                    'is_open' => 1,
                    'created_at' => '2017-12-14 03:02:21',
                ),
            30 =>
                array (
                    'id' => 31,
                    'position_id' => 3,
                    'type' => 'article',
                    'recommend_id' => 3,
                    'recommend_type' => 'image',
                    'recommend_name' => '如何才能成为一名优秀的设计师？',
                    'recommend_pic' => 'attachment/sys/194e237c54cc598a34511b253c569011.jpg',
                    'url' => 'http://www.kppw.cn/article/3',
                    'start_time' => '0000-00-00 00:00:00',
                    'end_time' => '0000-00-00 00:00:00',
                    'sort' => 0,
                    'is_open' => 1,
                    'created_at' => '2017-12-14 03:02:21',
                ),
            31 =>
                array (
                    'id' => 32,
                    'position_id' => 3,
                    'type' => 'article',
                    'recommend_id' => 4,
                    'recommend_type' => 'image',
                    'recommend_name' => 'KPPW全方位升级夺目吸粉妥妥的',
                    'recommend_pic' => 'attachment/sys/194e237c54cc598a34511b253c569011.jpg',
                    'url' => 'http://www.kppw.cn/article/4',
                    'start_time' => '0000-00-00 00:00:00',
                    'end_time' => '0000-00-00 00:00:00',
                    'sort' => 0,
                    'is_open' => 1,
                    'created_at' => '2017-12-14 03:02:21',
                ),
            32 =>
                array (
                    'id' => 33,
                    'position_id' => 3,
                    'type' => 'article',
                    'recommend_id' => 5,
                    'recommend_type' => 'image',
                    'recommend_name' => '众包威客开源建站系统KPPW3预售来袭',
                    'recommend_pic' => 'attachment/sys/194e237c54cc598a34511b253c569011.jpg',
                    'url' => 'http://www.kppw.cn/article/5',
                    'start_time' => '0000-00-00 00:00:00',
                    'end_time' => '0000-00-00 00:00:00',
                    'sort' => 0,
                    'is_open' => 1,
                    'created_at' => '2017-12-14 03:02:21',
                ),
            33 =>
                array (
                    'id' => 34,
                    'position_id' => 3,
                    'type' => 'article',
                    'recommend_id' => 6,
                    'recommend_type' => 'image',
                    'recommend_name' => '	KPPW演示站燃情上线赶紧来体验吧',
                    'recommend_pic' => 'attachment/sys/194e237c54cc598a34511b253c569011.jpg',
                    'url' => 'http://www.kppw.cn/article/6',
                    'start_time' => '0000-00-00 00:00:00',
                    'end_time' => '0000-00-00 00:00:00',
                    'sort' => 0,
                    'is_open' => 1,
                    'created_at' => '2017-12-14 03:02:21',
                ),
        ));
        
        
    }
}