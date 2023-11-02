<?php

namespace App\Http\Controllers\ideas;

use App\Http\Controllers\Controller;
use App\Models\Ideas;
use App\Models\Themes;
use DB;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    public function getThemes()
    {

        $data = array(
            'status' => 'success',
            'code' => 200,
            'themes' => Themes::all()
        );

        // devolver resultado
        return response()->json($data, $data['code']);

    }

    public function createIdea(Request $request)
    {


        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $ideas = new Ideas();
        $ideas->theme_id = $params_array['themes_id'];
        $ideas->description_idea = $params_array['description'];
        $ideas->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'ideas' => $ideas
        );


        return response()->json($data, $data['code']);
    }

    public function getIdeas()
    {

        $ideas = DB::table('ideas AS i')
            ->select(DB::raw('COUNT(i.theme_id) AS cant_ideas'), 't.description', 'i.theme_id')
            ->leftJoin('themes AS t', 't.id', 'i.theme_id')
            ->groupBy('i.theme_id', 't.description')
            ->get();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'ideas' => $ideas
        );


        return response()->json($data, $data['code']);

    }

}
