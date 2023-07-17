<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    private static $education;

    public static function newEducation($request)
    {
        self::$education = new Education();
        self::$education->title  = $request->title;
        self::$education->name  = $request->name;
        self::$education->duration_time  = $request->duration_time;
        self::$education->description  = $request->description;
        self::$education->save();
    }


    public static function updatedEducation($request, $id)
    {
        self::$education = Education::find($id);
        self::$education->title  = $request->title;
        self::$education->name  = $request->name;
        self::$education->duration_time  = $request->duration_time;
        self::$education->description  = $request->description;
        self::$education->save();
    }

    public static function deleteEducation($id)
    {
        self::$education = Education::find($id);
        self::$education->delete();
    }
}
