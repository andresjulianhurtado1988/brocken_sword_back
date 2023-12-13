<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\ImgThemesWorld;
use App\Models\ThemeWorld;
use Illuminate\Http\Request;

class ThemesWorldController extends Controller
{
    public function getThemesWorldAll()
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'themes_world' => ImgThemesWorld::all()
        ]);
    }
    public function getThemesWorldAllImages($filename)
    {
        $isset = \Storage::disk('img_world')->exists($filename);

        if ($isset) {
            $file = \Storage::disk('img_world')->get($filename);
            return new Response($file, 200);
        } else {
            $data = [
                'code' => 404,
                'status' => 'error',
            ];
        }

        return response()->json($data, $data['code']);
    }

    public function getThemesWorld($id)
    {
        $data = array(
            'status' => 'success',
            'code' => 200,
            'themeWorld' => ThemeWorld::where('id_img_theme_world', $id)->get()
        );

        return response()->json($data, $data['code']);
    }

    public function createThemeWorld(Request $request)
    {
        $json = $request->input('json', null);
        $params_array = json_decode($json, true);


        $themeWorld = new ThemeWorld();
        $themeWorld->allDescription = $params_array['allDescription'];
        $themeWorld->id_img_theme_world = $params_array['id_img_theme_world'];
        $themeWorld->title = $params_array['title'];
        $themeWorld->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'themeWorld' => $themeWorld
        );


        return response()->json($data, $data['code']);
    }

}
