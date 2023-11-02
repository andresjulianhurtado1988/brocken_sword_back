<?php

namespace App\Http\Controllers\religion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReligionController extends Controller
{
    public function getReligion()
    {

        $religion = DB::table('orders')
            ->select(
                'id',
                'order_name'
            )
            ->groupBy('id')
            ->groupBy('order_name')
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'religion' => $religion
        ]);
    }

    public function getJudge($id_order)
    {
        $info = DB::table('judges')
            ->select(
                'id',
                'judge_name AS character_name',
                'judge_img AS img',
                'story',
                'description'
            )
            ->where('order_id', $id_order)
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'info' => $info
        ]);
    }

    public function getDeity($id_order)
    {
        $info = DB::table('religion')
            ->select(
                'id',
                'deity AS character_name',
                'deity_img AS img',
                'story',
                'description'
            )
            ->where('order_pattern_id', $id_order)
            ->get();


        return response()->json([
            'code' => 200,
            'status' => 'success',
            'info' => $info
        ]);
    }
}