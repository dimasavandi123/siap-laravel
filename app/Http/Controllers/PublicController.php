<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Peminjaman;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.index')->with([
            'books' => Book::->paginate(6)
        ]);
    }

    public function all(Request $request)
    {
        return view('app.books')->with([
            $keyword = $request->q,
            'books' => Book::where('title', 'LIKE', '%'.$keyword.'%')
            ->orWhere('author' ,$keyword)
            ->orWhere('publisher' ,$keyword)
            ->paginate(12),
            'keyword' => $keyword,
            
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'book' =>  Book::find($id)
        ];
        
        return view('app.detail')->with($data);
    }
    public function profil()
    {
        return view('app.profil');
    }

    public function history()
    {
        $data = [
            'riwayat' => Peminjaman::select('transaction.*', 
            'books.*',  
            'transaction.id as peminjaman_id',
            'books.id as book_id')
            ->join('books', 'books.id', '=', 'transaction.book_id', 'LEFT')
            ->orderBy('transaction.id', 'DESC')
            ->paginate(10)
        ];
        
        return view('app.history')->with($data);
    }

}