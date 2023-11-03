<?php

namespace App\Http\Controllers\ideas;

use App\Http\Controllers\Controller;
use App\Models\Ideas;
use App\Models\Themes;
use DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

        if (empty($params_array['abouth_id'])) {
            $abouth_id = 0;
        } else {
            $abouth_id = $params_array['abouth_id'];
        }


        $ideas = new Ideas();
        $ideas->theme_id = $params_array['themes_id'];
        $ideas->abouth = $abouth_id;
        $ideas->description_idea = $params_array['description'];
        $ideas->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'ideas' => $ideas
        );


        return response()->json($data, $data['code']);
    }

    public function getAllIdeas()
    {

        $data = array(
            'status' => 'success',
            'code' => 200,
            'ideas' => DB::table('ideas AS i')
                ->select(DB::raw('COUNT(i.theme_id) AS cant_ideas'), 't.description', 'i.theme_id')
                ->leftJoin('themes AS t', 't.id', 'i.theme_id')
                ->groupBy('i.theme_id', 't.description')
                ->get()
        );

        return response()->json($data, $data['code']);

    }

    public function getIdeas($theme_id)
    {

        $data = array(
            'status' => 'success',
            'code' => 200,
            'ideas' => Ideas::where('theme_id', $theme_id)->get()
        );

        return response()->json($data, $data['code']);

    }

    public function pdfIdeas($theme_id)
    {

        $data = Ideas::where('theme_id', $theme_id)->get();
        $pdf = Pdf::loadView('/pdf_ideas', compact('data'));
        return $pdf->stream();


    }

}
