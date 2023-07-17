<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    private static $experience;

    public static function newExperience($request)
    {
        self::$experience = new Experience();
        self::$experience->name  = $request->name;
        self::$experience->designation  = $request->designation;
        self::$experience->duration_time  = $request->duration_time;
        self::$experience->description  = $request->description;
        self::$experience->save();
    }


    public static function updatedExperience($request, $id)
    {
        self::$experience = Experience::find($id);

        self::$experience->name  = $request->name;
        self::$experience->designation  = $request->designation;
        self::$experience->duration_time  = $request->duration_time;
        self::$experience->description  = $request->description;
        self::$experience->save();
    }

    public static function deleteExperience($id)
    {
        self::$experience = Experience::find($id);
        self::$experience->delete();
    }
}
