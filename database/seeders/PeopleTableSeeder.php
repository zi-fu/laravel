<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada',
            'age' => '12',
        ];
        DB::table('people')->insert($param);
        
        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@tanaka',
            'age' => '34',
        ];
        DB::table('people')->insert($param);
        
        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@nakase',
            'age' => '56',
        ];
        DB::table('people')->insert($param);
        
    }
}
