<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaction.index')->with([
            'peminjaman' => peminjaman::select('*', 'transaction.id as peminjaman_id', 'books.id as book_id', 'users.id as user_id')
            ->join('books', 'books.id', '=', 'transaction.book_id')
            ->join('users', 'users.id', '=', 'transaction.user_id')
            ->orderBy('transaction.id', 'DESC')
            ->where('transaction.status', 0)
            ->paginate(10),
        ]);
    }

    public function cetak()
    {
        return view('cetak.peminjaman')->with([
            'peminjaman' => peminjaman::select('*', 'transaction.id as peminjaman_id', 'books.id as book_id', 'users.id as user_id')
            ->join('books', 'books.id', '=', 'transaction.book_id')
            ->join('users', 'users.id', '=', 'transaction.user_id')
            ->orderBy('transaction.id', 'DESC')
            ->where('transaction.status', 0)
            ->get(),
        ]);
    }

    public function kembali($id)
    {
        $peminjaman = peminjaman::find($id);
        $batasPengembalian = strtotime($peminjaman->tgl_habis_pinjam);
        $tglPinjam = strtotime($peminjaman->tgl_pinjam);
        $tglHariIni = strtotime(date('Y-m-d'));
        $jarak = $tglHariIni - $batasPengembalian;
        $lamapinjam = $tglHariIni - $tglPinjam;
        $lamapinjam = $lamapinjam / 60 / 60 / 24;
        $telat = $jarak / 60 / 60 / 24;
        $telat = max(0, $telat, false);
        $denda = $telat * 1000;
        $peminjaman->id = $id;
        $peminjaman->status = true;
        $peminjaman->tgl_kembali = date('Y-m-d');
        $peminjaman->telat = $telat;
        $peminjaman->lama_pinjam = $lamapinjam;
        $peminjaman->denda = $denda;
        $peminjaman->admin_id = Auth()->user()->id;
        
        $peminjaman->save();
        return  redirect('peminjaman');
    }
}