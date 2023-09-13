<?php

namespace App\Http\Controllers\world;


use App\Models\Lands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LandController extends Controller
{

    public function getLands()
    {

        $lands = DB::table('lands AS l')
            ->select(
                'l.id',
                'l.land_name',
                'l.descripcion',
                'lt.land_type_name'
            )
            ->leftjoin('land_type AS lt', 'lt.id', '=', 'l.land_type_id')
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'lands' => $lands
        ]);

    }

    public function showLand($id)
    {

        $lands = DB::table('lands AS l')
            ->select(
                'l.id',
                'l.land_name',
                'l.descripcion',
                'lt.land_type_name'
            )
            ->leftjoin('land_type AS lt', 'lt.id', '=', 'l.land_type_id')
            ->where('l.id', $id)->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'lands' => $lands
        ]);

    }
}