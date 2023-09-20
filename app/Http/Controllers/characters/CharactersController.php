<?php

namespace App\Http\Controllers\characters;

use App\Http\Controllers\Controller;
use App\Models\Characters;
use App\Models\ImgCharacter;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CharactersController extends Controller
{
    public function getCharacters()
    {

        $characters = DB::table('characters AS c')
            ->select(
                'c.id',
                'c.character_name',
                'c.description',
                'c.story',
                'i.img_character'

            )
            ->leftJoin('img_character AS i', 'i.character_id', '=', 'c.id')
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'characters' => $characters
        ]);
    }

    public function showCharacter($id)
    {

        $characters = DB::table('characters AS c')
            ->select(
                'c.id',
                'c.character_name',
                'c.description',
                'c.story',
                'i.img_character'

            )->where('c.id', $id)
            ->leftJoin('img_character AS i', 'i.character_id', '=', 'c.id')
            ->get();


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

        $is_user = $params_array['id_magic_system'];

        $magic_user = 0;

        if ($is_user > 1) {
            $magic_user = 1;
        }

        $character = new Characters();
        $character->id_land = $params_array['id_land'];
        $character->id_race = $params_array['id_race'];
        $character->id_magic_system = $params_array['id_magic_system'];
        $character->character_name = $params_array['character_name'];
        $character->age = $params_array['age'];
        $character->description = $params_array['description'];
        $character->story = $params_array['story'];
        $character->magic_user = $magic_user;

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

    public function registerCharacterImage(Request $request)
    {

        header('Access-Control-Allow-Headers: *');


        $id_chacaracter = intval($request->id_chacaracter);

        $image = $request->file('image');

        if ($image) {
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('characters')->put($image_path, \File::get($image));

        }


        $character_img = new ImgCharacter();
        $character_img->img_name = $image->getClientOriginalName();
        $character_img->img_character = $image_path;
        $character_img->character_id = intval($id_chacaracter);

        $character_img->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'character' => $character_img
        );

        return response()->json($data, 200);

    }

    public function getCharacterImage($filename)
    {
        $isset = \Storage::disk('characters')->exists($filename);

        if ($isset) {
            $file = \Storage::disk('characters')->get($filename);
            return new Response($file, 200);
        } else {
            $data = [
                'code' => 404,
                'status' => 'error',
            ];
        }

        return response()->json($data, $data['code']);
    }

}