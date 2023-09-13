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
        $params_array = json_decode($json, true);

        // save character

        //   $is_user = $params_array['id_magic_system'];

        $magic_user = 0;

        //     if ($is_user > 1) {
        //         $magic_user = 1;
        //    }

        //`````````magic_user````````````first_apparition```

        $character = new Characters();
        $character->id_land = 1;
        $character->id_race = 1;
        $character->id_magic_system = 1;
        $character->character_name = 'juan';
        $character->age = 16;
        $character->description = 'hola mundo';
        $character->story = 'hola mundo';
        $character->magic_user = 1;
        //   $character->image = $params_array['image'];
        $character->status = 1;
        $character->position = 1;

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