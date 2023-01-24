<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Admin::truncate();

        $admins =  [
            [
                'id'=>'1',
                'name'=>'admin',
                'email'=>'admin@mailinator.com',
                'password' => Hash::make('12345'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>'2',
                'name'=>'spark',
                'email'=>'spark@mailinator.com',
                'password' => Hash::make('12345'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
          ];
          foreach ($admins as $admin) {
            Admin::create($admin);
          }
          
    }
}
