<?php

namespace App\Http\Controllers\world;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorldController extends Controller
{
    public function getMagicSystem()
    {
        $magic_system = DB::table('magic_system')
            ->select(
                'id',
                'magic_name'
            )
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'magic_system' => $magic_system
        ]);
    }

    public function getRaces()
    {
        $races = DB::table('races')
            ->select(
                'id',
                'race_name'
            )
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'races' => $races
        ]);
    }

    public function getProtagonist()
    {
        $protagonist = DB::table('protagonist')
            ->select(
                'id',
                'name'
            )
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'protagonist' => $protagonist
        ]);
    }

    public function getBooks()
    {
        $books = DB::table('books')
            ->select(
                'id',
                'name'
            )
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'books' => $books
        ]);
    }
}