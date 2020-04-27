<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RandomUsers extends Model
{
    protected $table = 'random_users';
    public $timestamps = false;

    public static function some_values(int $id) {
        return static::all()->random($id);
    }

    public static function recreation(array $keeping, int $id) {
        DB::table('random_users')->whereNotIn('id', $keeping)->delete();
        self::generate($id);
    }

    private static function generate(int $request) {
        for($i = 0; $i < $request; $i++) {
            $client = new RandomUsers();
            $client['nickname'] = self::generateRandomString(16);
            $client->save();
        }
    }

    private static function generateRandomString($length) {
        $characters = '0123456789_AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
