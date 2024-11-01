<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Helpers\MyHelper;
use App\Models\Book;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('dashboard.index')->with($data);
    }
}