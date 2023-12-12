<?php

namespace App\Http\Controllers\world;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Chapters;
use App\Models\CharacterContent;
use App\Models\MagicSystems;
use App\Models\Races;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Creatures;
use App\Models\CreatureGalery;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class WorldController extends Controller
{
    public function getMagicSystem()
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'magic_system' => MagicSystems::all()
        ]);
    }

    public function getRaces()
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'races' => Races::all()
        ]);
    }

    public function getBooks()
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'books' => Books::all()
        ]);
    }

    public function getChaptersByCharacter($book_id, $character_id)
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'chaptersByCharacter' => DB::table('chapters')
                ->select(
                    'id',
                    'name',
                    'pages',
                    'description'
                )->where([['book_id', $book_id], ['protagonist_id', $character_id]])
                ->get()
        ]);
    }

    public function registerChapter(Request $request)
    {

        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $chapters = new Chapters();
        $chapters->name = $params_array['name'];
        $chapters->protagonist_id = $params_array['protagonist_id'];
        $chapters->book_id = $params_array['book_id'];
        $chapters->description = $params_array['description'];
        $chapters->pages = $params_array['pages'];
        $chapters->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'chapters' => $chapters
        );

        return response()->json($data, $data['code']);

    }
    public function getChapters($chapter_id)
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'chapters' => DB::table('chapters AS c')
                ->select(
                    'c.id',
                    'c.name',
                    'c.pages',
                    'c.description',
                    'p.name AS protagonist'
                )
                ->leftJoin('protagonist AS p', 'p.id', 'c.protagonist_id')
                ->where('c.id', $chapter_id)
                ->first()
        ]);
    }

    public function registerChapterContent(Request $request)
    {
        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $chapters = new CharacterContent();
        $chapters->chapter_id = $params_array['chapter_id'];
        $chapters->description = $params_array['chapter'];

        $chapters->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'chapters' => $chapters
        );

        return response()->json($data, $data['code']);
    }

    public function getStoryByChapter($chapter_id)
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'chapters' => DB::table('chapters_content')
                ->select('description')
                ->where('chapter_id', $chapter_id)
                ->orderBy('id', 'ASC')
                ->get()
        ]);
    }

    // FUNCTIONS TO CREATURES AND OTHERS MAGIC BEASTS
    public function getAllCreatures()
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'creatures' => DB::table('creatures AS c')
                ->select(DB::raw('COUNT(g.creature_id) AS cant_img'), 'c.creature_name', 'c.id')
                ->leftJoin('creatures_galery AS g', 'g.creature_id', 'c.id')
                ->groupBy('g.creature_id', 'c.creature_name', 'c.id')
                ->get()
        ]);

    }

    public function getCreature($creature_id)
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'creatures' => DB::table('creatures AS c')
                ->select('c.id', 'c.creature_name', 'c.description', 'l.name AS origin')
                ->leftJoin('lands_names AS l', 'l.id', 'c.land_id')
                ->where('c.id', $creature_id)
                ->orderBy('c.id', 'ASC')
                ->get()
        ]);
    }

    public function registerCreatureImage(Request $request)
    {

        header('Access-Control-Allow-Headers: *');

        $creature_id = intval($request->creature_id);

        $image = $request->file('image');

        if ($image) {
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('creatures')->put($image_path, \File::get($image));
        }

        $creature_img = new CreatureGalery();
        $creature_img->img_name = $image->getClientOriginalName();
        $creature_img->img_creature = $image_path;
        $creature_img->creature_id = $creature_id;
        $creature_img->save();

        $data = array(
            'status' => 'success',
            'code' => 200,
            'creature' => $creature_img
        );

        return response()->json($data, 200);
    }

    public function getCreatureImage($filename)
    {


        $isset = \Storage::disk('creatures')->exists($filename);

        if ($isset) {
            $file = \Storage::disk('creatures')->get($filename);
            return new Response($file, 200);
        } else {
            $data = [
                'code' => 404,
                'status' => 'error',
            ];
        }

        return response()->json($data, $data['code']);
    }


    public function createCreature(Request $request)
    {

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'creatures' => Creatures::all()
        ]);
    }

    public function getCreatureImageAll($creature_id)
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'creatures' => CreatureGalery::where('creature_id', $creature_id)->get()
        ]);
    }

}
