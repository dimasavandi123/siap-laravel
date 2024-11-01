<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class pengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaction.pengembalian')->with([
            'peminjaman' => peminjaman::select('*', 'transaction.id as peminjaman_id', 'books.id as book_id', 'users.id as user_id')
            ->join('books', 'books.id', '=', 'transaction.book_id')
            ->join('users', 'users.id', '=', 'transaction.user_id')
            ->orderBy('transaction.id', 'DESC')
            ->where('transaction.status', 1)
            ->paginate(10),
        ]);
    }

    public function cetak()
    {
        return view('cetak.pengembalian')->with([
            'peminjaman' => peminjaman::select('*', 'transaction.id as peminjaman_id', 'books.id as book_id', 'users.id as user_id')
            ->join('books', 'books.id', '=', 'transaction.book_id')
            ->join('users', 'users.id', '=', 'transaction.user_id')
            ->orderBy('transaction.id', 'DESC')
            ->where('transaction.status', 1)
            ->get(),
        ]);
    }
}