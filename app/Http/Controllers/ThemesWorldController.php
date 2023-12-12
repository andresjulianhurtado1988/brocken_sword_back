<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\ImgThemesWorld;

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
}
