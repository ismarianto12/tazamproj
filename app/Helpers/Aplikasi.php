<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Aplikasi
{
    public static function response($staus, $msg)
    {
        return response()->json([
            'status' => $staus,
            'msg' => $msg
        ]);
    }

    public function listblade()
    {
    }
}
