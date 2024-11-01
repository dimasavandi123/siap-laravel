<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $quarded = ['id'];
    protected $fillable = ['user_id', 'book_id', 'tgl_pinjam', 'tgl_habis_pinjam', 'tgl_kembali', 'lama_pinjam', 'telat', 'denda', 'status', 'admin_id'];
   
    
}