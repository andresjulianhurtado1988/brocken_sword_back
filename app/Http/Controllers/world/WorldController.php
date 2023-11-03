<?php

namespace App\Http\Controllers\world;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Chapters;
use App\Models\CharacterContent;
use App\Models\MagicSystems;
use App\Models\Protagonist;
use App\Models\Races;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
}