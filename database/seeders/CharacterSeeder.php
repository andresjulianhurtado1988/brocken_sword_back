<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert(
            array(
                array(
                    'id_land' => 1,
                    'id_race' => 1,
                    'character_name' => 'Terissa of Numbra',
                    'magic_user' => 1,
                    'id_magic_system' => 6,
                    'age' => 16,
                    'description' => '',
                    'story' => 'La joven princesa Terissa, la menor de cuatro hermanas, nació durante el año de serpiente, lo que es una enorme ironía, ya que una serpiente marcaría su vida para siempre.
                    Cuando apenas contaba con seis años, fue mordida por una serpiente que dejaría una cicatriz no sólo en su pierna derecha sino en toda su vida al convertirse en una sangre-albina y llevar siempre aquella marca que los identifica como velganos. 
                    De niña, al igual que sus hermanas y su madre, llevaba las señales de la casa Numbra al tener el cabello rojo, similar a una hoguera, lizo y hermoso. Gozaba de aquel brillo y fortaleza que identifica la familia Numbrali que, desde el accidente con la serpiente, se tornaría completamente blanco. 
                    Pálido. Similar a un hueso puesto a secar al sol; Pastoso casi como el de una anciana, no obstante, trata de mantenerlo arreglado como la princesa que es.
                    Sus ojos, que antes eran verdes como los de su linaje, se tornaron rojos, como inyectados de sangre otorgando una apariencia fantasmal que, acentuado por su palidez, le hace destacar entre las mujeres de la corte.
                    Para nadie es un secreto que la joven princesa es una sangre-albina, no obstante, es para su propia madre, una extraña vergüenza que debe ocultar en la torre más recóndita de su palacio, sin embargo, para la muchacha, viene bien la vista y la brisa marina que entra por su ventana.
                    Acompañada siempre por su guardián, un Barakosi de no nombre Darius y de su nana, una numbrali de nombre Nera, aprende del mundo y su inmensidad, o al menos lo que su imaginación le permite, ya que jamás ha salido del palacio.
                    Más allá del mar. Más allá del puente de la viuda. Más allá de la muralla del oeste. Más allá de su torre.
                    Solo en sueños ve aquellos lugares que le describen, con añoranza, espera poder salir alguna vez.
                    ',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 2,
                    'id_race' => 1,
                    'character_name' => 'Haguen of Merak',
                    'magic_user' => 1,
                    'id_magic_system' => 3,
                    'age' => 35,
                    'description' => '',
                    'story' => 'Nacido durante la guerra de sucesión del imperio norteño Merak, fue criado para la guerra y entregado a los campos de entrenamiento. Desarrollando las habilidades necesarias para la batalla, se desempeñó como guardia de uno de los duques que apoyaban el reclamo de uno de los herederos al imperio.
                    Su padre por el contrario, se vio atrapado en el sitio de Farro, al sur del imperio, donde sería atrapado y torturado para revelar la posición de los duques que se oponían y exterminarlos.
                    Haguen. Cuando escuchó de la captura de su padre, junto a su hermano y otros guerreros amigos, fue a su rescate ante las objeciones del duque. Acusado de traición, a su cabeza se le puso precio, por lo cual debían llegar al palacio Gadiari por otros caminos que solo conocían los contrabandistas del imperio.
                    "La Jauría", como se hacían llamar, tuvo que separarse para entrar al imperio por diferentes caminos. Haguen fue con los contrabandistas que debían salir por algunos kilómetros del imperio, al campo Irilion, cuando se alzó la maldición de Merak.',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 4,
                    'id_race' => 1,
                    'character_name' => 'Ardos of Meldáric',
                    'magic_user' => 1,
                    'id_magic_system' => 7,
                    'age' => 27,
                    'description' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 4,
                    'id_race' => 1,
                    'character_name' => 'Hanna Black Fish',
                    'magic_user' => 1,
                    'id_magic_system' => 5,
                    'age' => 24,
                    'description' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 5,
                    'id_race' => 1,
                    'character_name' => 'Darius',
                    'magic_user' => 0,
                    'id_magic_system' => 1,
                    'age' => 50,
                    'description' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 1
                ),
                array(
                    'id_land' => 6,
                    'id_race' => 2,
                    'character_name' => 'Dágoren',
                    'magic_user' => 1,
                    'id_magic_system' => 8,
                    'age' => 1000,
                    'description' => '',
                    'story' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aperiam itaque sed suscipit numquam atque, ullam, amet totam facilis quis mollitia earum pariatur sint delectus modi, praesentium nihil excepturi adipisci?',
                    'status' => 1,
                    'first_apparition' => 'A Dance with Shadows',
                    'position' => 2
                )
            )
        );
    }
}