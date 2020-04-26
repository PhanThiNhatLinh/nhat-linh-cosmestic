<?php

use App\Groupproduct;
use Illuminate\Database\Seeder;

class groupproductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group1 = new Groupproduct();
        $group1->group_code = 1;
        $group1->group_name = "CHĂM SÓC DA MẶT";
        $group1->description = "CHĂM SÓC DA MẶT";
        $group1->save();

        $group2 = new Groupproduct();
        $group2->group_code = 2;
        $group2->group_name = "CHĂM SÓC CƠ THỂ";
        $group2->description = "CHĂM SÓC CƠ THỂ";
        $group2->save();

        $group3 = new Groupproduct();
        $group3->group_code = 3;
        $group3->group_name = "CHĂM SÓC TÓC";
        $group3->description = "CHĂM SÓC TÓC";
        $group3->save();

        $group4 = new Groupproduct();
        $group4->group_code = 4;
        $group4->group_name = "TRANG ĐIỂM";
        $group4->description = "TRANG ĐIỂM";
        $group4->save();

        $group5 = new Groupproduct();
        $group5->group_code = 5;
        $group5->group_name = "PHỤ KIỆN";
        $group5->description = "PHỤ KIỆN CHĂM SÓC DA MẶT";
        $group5->save();

        $group6 = new Groupproduct();
        $group6->group_code = 6;
        $group6->group_name = "THỰC PHẨM CHỨC NĂNG";
        $group6->description = "THỰC PHẨM CHỨC NĂNG";
        $group6->save();
    }
}
