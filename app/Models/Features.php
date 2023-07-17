<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Monolog\Handler\selectErrorStream;

class Features extends Model
{
    use HasFactory;

    private static $features;

    public static function newFeatures($request)
    {
        self::$features = new Features();
        self::$features->name = $request->name;
        self::$features->description = $request->description;
        self::$features->save();
    }

    public static function updateFeatures($request , $id)
    {
        self::$features = Features::find($id);

        self::$features->name = $request->name;
        self::$features->description = $request->description;
        self::$features->save();

    }

    public static function deleteFeatures($id)
    {
        self::$features = Features::find($id);
        self::$features->delete();
    }
}
