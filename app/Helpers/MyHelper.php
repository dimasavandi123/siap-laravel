<?php

namespace App\Helpers;
use Carbon\Carbon;

class MyHelper
{
    public static function greeting($name)
    {
        return "Selamat pagi, $name!";
    }

    public static function formatDate($date)
    {
        return date('d F Y', strtotime($date));
    }

    public static function tglPengembalian($date, $days = 7)
    {
        return Carbon::parse($date)->addDays($days)->format('Y-m-d');
    }
}