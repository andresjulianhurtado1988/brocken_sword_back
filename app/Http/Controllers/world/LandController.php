<?php

namespace App\Http\Controllers\world;


use App\Models\Lands;
use App\Models\LandsAll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\MysticalPlaces;
use App\Models\MysticalPLaceGalery;
use Illuminate\Http\Response;

class LandController extends Controller
{

    public function getAllLands()
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'lands' => LandsAll::all()
        ]);

    }

    public function getLands()
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'lands' => DB::table('lands AS l')
                ->select(
                    'l.id',
                    'l.land_name',
                    'l.descripcion',
                    'lt.land_type_name'
                )
                ->leftjoin('land_type AS lt', 'lt.id', '=', 'l.land_type_id')
                ->get()
        ]);

    }

    public function showLand($id)
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'lands' => DB::table('lands AS l')
                ->select(
                    'l.id',
                    'l.land_name',
                    'l.descripcion',
                    'lt.land_type_name'
                )
                ->leftjoin('land_type AS lt', 'lt.id', '=', 'l.land_type_id')
                ->where('l.id', $id)->get()
        ]);

    }

    public function getAllMysticalPlaces()
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'mysticalPlaces' => DB::table('mystical_place AS m')
                ->select(DB::raw('COUNT(i.mystical_place_id) AS cant_img'),
                    'm.id',
                    'm.mystical_place_name',
                    'l.name AS land_name'
                )
                ->leftjoin('img_mystical_place AS i', 'i.mystical_place_id', '=', 'm.id')
                ->leftjoin('lands_names AS l', 'l.id', '=', 'm.land_name_id')
                ->groupBy('i.mystical_place_id', 'm.mystical_place_name', 'l.name', 'm.id')
                ->get()
        ]);
    }

    public function getMysticalPlace($mystical_place_id)
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'mystical_place' => MysticalPlaces::where('id', $mystical_place_id)->get()
        ]);
    }

    public function registerMysticalPlace(Request $request)
    {
        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $mystical_place = new MysticalPlaces();
        $mystical_place->mystical_place_name = $params_array['mystical_place_name'];
        $mystical_place->land_name_id = $params_array['land_name_id'];
        $mystical_place->description = $params_array['description'];


        $mystical_place->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'mystical_place' => $mystical_place
        );


        return response()->json($data, $data['code']);
    }

    public function registerMysticalPlaceImage(Request $request)
    {
        header('Access-Control-Allow-Headers: *');

        $mystical_place_id = intval($request->mystical_place_id);

        $image = $request->file('image');

        if ($image) {
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('mystical_places')->put($image_path, \File::get($image));
        }

        $creature_img = new MysticalPLaceGalery();
        $creature_img->img_name = $image->getClientOriginalName();
        $creature_img->img_mystical_place = $image_path;
        $creature_img->mystical_place_id = $mystical_place_id;
        $creature_img->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'creature' => $creature_img
        );

        return response()->json($data, 200);
    }

    public function getMysticalPlaceAllImages($mystical_place_id)
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'mystical_place' => MysticalPLaceGalery::where('mystical_place_id', $mystical_place_id)->get()
        ]);
    }

    public function getMysticalPlaceImage($filename)
    {


        $isset = \Storage::disk('mystical_places')->exists($filename);

        if ($isset) {
            $file = \Storage::disk('mystical_places')->get($filename);
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
