<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('judges')->insert(
            array(
                array(
                    'judge_name' => 'Vathos-Kam "Lord of the Spiders"',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => 8
                ),
                array(
                    'judge_name' => 'Alissía Ondrika',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => 5
                ),
                array(
                    'judge_name' => 'Lady Jessamine of Numbra',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => 6
                ),
                array(
                    'judge_name' => 'Roe Kushic',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Delia Irnsir',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Robert Rósbam',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Sira Nalie Morssette IV',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Borgen from Bergstorm',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Alphons Hauck "The Fury"',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Véril of Kápitel',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Egeni Poros',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Krystel "The Quiet"',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Clarty Hemel',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => 'Lord Varus "The Blind"',
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),
                array(
                    'judge_name' => fake()->name(),
                    'judge_img' => '',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'order_id' => mt_rand(1, 7)
                ),

            )
        );
    }
}