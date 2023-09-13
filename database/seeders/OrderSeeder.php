<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert(
            array(
                array(
                    'order_name' => 'The Order of Mercy',
                    //Orden de la misericordia
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'order_name' => 'Deliverers of Justice',
                    // Repartidores de justicia
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'order_name' => 'Road Watchmen',
                    // Vigías del camino
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'order_name' => 'Strength of the Weak',
                    // Fuerza de los débiles
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'order_name' => 'Guardians of Virtue',
                    // Guardianes de la virtud
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'order_name' => 'Bearers of Wisdom',
                    // Portadores de la sabiduría
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'order_name' => 'Benerators of the Dead',
                    // Beneradores de la muerte
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
                array(
                    'order_name' => 'Servants of the Thirteenth',
                    // Sirvientes del Treceavo
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                ),
            )
        );

    }
}