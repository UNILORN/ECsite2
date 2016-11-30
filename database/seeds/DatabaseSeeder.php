<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('Girls')->truncate();

      $Girls1 =[
        'name'=>'女の子1',
        'img'=>'img/1.png',
        'price'=>'500'
      ];

      $Girls2 =[
        'name'=>'女の子2',
        'img'=>'img/2.png',
        'price'=>'500'
      ];

      $Girls3 =[
        'name'=>'女の子3',
        'img'=>'img/3.png',
        'price'=>'500'
      ];

      $Girls4 =[
        'name'=>'女の子4',
        'img'=>'img/4.png',
        'price'=>'500'
      ];

      $Girls5 =[
        'name'=>'女の子5',
        'img'=>'img/5.png',
        'price'=>'500'
      ];

      $Girls6 =[
        'name'=>'女の子6',
        'img'=>'img/6.png',
        'price'=>'500'
      ];

      DB::table('Girls')->insert([$Girls1,$Girls2,$Girls3,$Girls4,$Girls5,$Girls6]);

    }
}
