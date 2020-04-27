<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Views extends Model
{
    public static function incrementing(int $id) {
        DB::table('views')->increment('count', $id);
    }
}
