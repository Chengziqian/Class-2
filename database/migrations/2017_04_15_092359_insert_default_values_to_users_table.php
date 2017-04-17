<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class InsertDefaultValuesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            [
                'name' => '徐婕妤',
                'stu_code' => '2016100102001',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '刘  鑫',
                'stu_code' => '2016100102002',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '穆宇杰',
                'stu_code' => '2016100102003',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '张宇皓',
                'stu_code' => '2016100102004',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '许开健',
                'stu_code' => '2016100102005',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '黄志晖',
                'stu_code' => '2016100102006',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '范俊怡',
                'stu_code' => '2016100102007',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '冯玉博',
                'stu_code' => '2016100102008',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '郭凯明',
                'stu_code' => '2016100102009',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '牟帅辉',
                'stu_code' => '2016100102010',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '付  钰',
                'stu_code' => '2016100102011',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '闫银松',
                'stu_code' => '2016100102012',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '李其达',
                'stu_code' => '2016100102013',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '马钰铭',
                'stu_code' => '2016100102014',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '吴天炜',
                'stu_code' => '2016100102015',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '周  圆',
                'stu_code' => '2016100102016',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '单疏桐',
                'stu_code' => '2016100102017',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '程凯新',
                'stu_code' => '2016100102018',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '程子骞',
                'stu_code' => '2016100102019',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '任静蓉',
                'stu_code' => '2016100102020',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '徐金华',
                'stu_code' => '2016100102021',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '王礼政',
                'stu_code' => '2016100102022',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '王乾康',
                'stu_code' => '2016100102023',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '张声远',
                'stu_code' => '2016100102024',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '李豫川',
                'stu_code' => '2016100102025',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '刘雪娇',
                'stu_code' => '2016100102026',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '郭  兴',
                'stu_code' => '2016100102027',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '陈书凝',
                'stu_code' => '2016100102028',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '夏裕东',
                'stu_code' => '2016100102029',
                'password'=>Hash::make('123456'),
                'type' => 0,
            ],
            [
                'name' => '冯导',
                'stu_code' => '2016100102000',
                'password'=>Hash::make('root'),
                'type'  => 0,
            ],
            [
                'name' => 'Admin',
                'stu_code' => 'Admin',
                'password'=>Hash::make('root'),
                'type'  => 1,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('delete from users');
    }
}
