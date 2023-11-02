<?php

namespace App\Http\Controllers\world;

use App\Http\Controllers\Controller;
use App\Models\Chapters;
use App\Models\CharacterContent;
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

    public function getChaptersByCharacter($book_id, $character_id)
    {
        $chaptersByCharacter = DB::table('chapters')
            ->select(
                'id',
                'name',
                'pages',
                'description'
            )->where([['book_id', $book_id], ['protagonist_id', $character_id]])
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'chaptersByCharacter' => $chaptersByCharacter
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

        // devolver resultado
        return response()->json($data, $data['code']);

    }



    public function getChapters($chapter_id)
    {
        $chapters = DB::table('chapters AS c')
            ->select(
                'c.id',
                'c.name',
                'c.pages',
                'c.description',
                'p.name AS protagonist'
            )
            ->leftJoin('protagonist AS p', 'p.id', 'c.protagonist_id')
            ->where('c.id', $chapter_id)
            ->first();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'chapters' => $chapters
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

        // devolver resultado
        return response()->json($data, $data['code']);
    }

    public function getStoryByChapter($chapter_id)
    {


        $chapters = DB::table('chapters_content')
            ->select('description')
            ->where('chapter_id', $chapter_id)
            ->orderBy('id', 'ASC')
            ->get();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'chapters' => $chapters
        ]);
    }
}