<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    // p.77 라우트명의 관례

    public function index()
    {
        $list = Board::select(['id', 'title', 'hits', 'created_at'])->orderBy('id', 'desc')->get();
        return view('board/index')->with('list', $list);
        // return view('board/index')->with('list', Board::orderBy('id','desc')->get()); 
    }

    public function create()
    {
        return view('board/create');
    }

    public function store(Request $req)
    {
        $board = new Board([
            "title" => $req->input("title"),
            "ctnt" => $req->input("ctnt"),
            "hits" => 0,
        ]);
        $board->save();
        return redirect('/boards');
    }

    public function show(Request $req)
    {
        $id = $req->input('id');
        return view('board/show')->with("data", Board::findOrFail($id));
    }
}
