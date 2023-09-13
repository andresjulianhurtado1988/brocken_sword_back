<?php

namespace App\Http\Controllers\characters;

use App\Http\Controllers\Controller;
use App\Models\Characters;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CharactersController extends Controller
{
    public function getCharacters()
    {
        $characters = DB::table('characters')
            ->select(
                'id',
                'character_name',
                'image',
                'description'
            )
            ->get();


        return response()->json([
            'code' => 200,
            'status' => 'success',
            'characters' => $characters
        ]);
    }

    public function showCharacter($id)
    {

        $characters = DB::table('characters')
            ->select(
                'id',
                'character_name',
                'image',
                'description',
                'story'
            )->where('id', $id)->get();


        return response()->json([
            'code' => 200,
            'status' => 'success',
            'characters' => $characters
        ]);

    }

    public function registerCharacter(Request $request)
    {



        // recoger datos por post
        $json = $request->input('json', null);


        //     var_dump($json);

        $params_array = json_decode($json, true);

        // save character

        $is_user = $params_array['id_magic_system'];

        $magic_user = 0;

        if ($is_user > 1) {
            $magic_user = 1;
        }

        //`````````magic_user````````````first_apparition```

        $character = new Characters();
        $character->id_land = $params_array['id_land'];
        $character->id_race = $params_array['id_race'];
        $character->id_magic_system = $params_array['id_magic_system'];
        $character->character_name = $params_array['character_name'];
        $character->age = $params_array['age'];
        $character->description = $params_array['description'];
        $character->story = $params_array['story'];
        $character->magic_user = $magic_user;
        //   $character->image = $params_array['image'];
        $character->status = 1;
        $character->position = $params_array['position'];

        $character->save();



        $data = array(
            'status' => 'success',
            'code' => 200,
            'character' => $character
        );

        // devolver resultado
        return response()->json($data, $data['code']);

    }



}