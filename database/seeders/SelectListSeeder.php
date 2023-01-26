<?php

namespace Database\Seeders;

use App\Models\SelectList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class SelectListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SelectList::truncate();

        $selectLists =  [
            [
                'id'=>'1',
                'name'=>'admin1',
                'type'=>'1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>'2',
                'name'=>'admin2',
                'type'=>'1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>'3',
                'name'=>'admin3',
                'type'=>'1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>'4',
                'name'=>'restaurent1',
                'type'=>'2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>'5',
                'name'=>'restaurent2',
                'type'=>'2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>'6',
                'name'=>'restaurent3',
                'type'=>'2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
          ];
          foreach ($selectLists as $selectList) {
            SelectList::create($selectList);
          }
    }
}
