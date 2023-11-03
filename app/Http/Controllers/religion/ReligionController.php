<?php

namespace App\Http\Controllers\religion;

use App\Http\Controllers\Controller;
use App\Models\Judges;
use App\Models\Orders;
use App\Models\Religion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReligionController extends Controller
{

    public function getJudge($id_order)
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'info' => Judges::where('order_id', $id_order)->get()
        ]);
    }

    public function getAllJudges()
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'judges' => Judges::all()
        ]);
    }

    public function getDeity($id_order)
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'info' => Religion::where('order_pattern_id', $id_order)->get()
        ]);
    }

    public function getOrders() // religion
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'orders' => Orders::all(),
            'deitiys' => Religion::all()
        ]);
    }
}