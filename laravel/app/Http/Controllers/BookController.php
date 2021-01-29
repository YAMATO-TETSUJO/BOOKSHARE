<?php

namespace App\Http\Controllers;

use App\Models\Book;
//開発環境用設定
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function top()
    {
        return view('top');
    }

    public function ans()
    {
        return view('ans');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['top', 'ans']);
    }

    public function index(Request $request)
    {
        $query = Book::query();

        $s_title = $request->input('s_title');
        $s_author = $request->input('s_author');
        $s_user_id = $request->input('s_user_id');

        // whereでtitleカラムから参照している。$s_titleは入力された値。これをカラムで参照している。nullの場合は弾く。
        if(!empty($s_title)) {
            $query->where('title', 'like', '%'.$s_title.'%');
        }
        if(!empty($s_author)) {
            $query->where('author', 'like', '%'.$s_author.'%');
        }
        if(!empty($s_user_id)) {
            $query->where('user_id', 'like', '%'.$s_user_id.'%');
        }
        
        foreach ($request->only(['title', 'author','user_id']) as $key => $value) {
            $query->where($key, 'like', '%'.$value.'%');
        }
        
        
        $books = $query->get();

        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $message = '新規書籍追加';
        return view('new', ['message' => $message]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $user = \Auth::user();

        $book->title = $request->title;
        $book->user_id = $user->id;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->day = $request->day;
        $book->save();
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, Book $book)
    {
        $message = 'Books information about ID:'.$id;
        $book = Book::find($id);
        return view('show', ['message' => $message, 'book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, Book $book)
    {
        $message = '本の情報を編集';
        $book = Book::find($id);
        return view('edit', ['message' => $message, 'book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Book $book)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->save();
        return redirect()->route('book.show', ['id' => $book->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id, Book $book)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
}
