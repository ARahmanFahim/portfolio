<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


    private static $skill;

    public static function newSkill($request)
    {
        self::$skill = new Skill();
        self::$skill->type  = $request->type;
        self::$skill->name  = $request->name;
        self::$skill->experience  = $request->experience;
        self::$skill->save();
    }


    public static function updatedExperience($request, $id)
    {
        self::$skill = Skill::find($id);
        self::$skill->type  = $request->type;
        self::$skill->name  = $request->name;
        self::$skill->experience  = $request->experience;
        self::$skill->save();
    }

    public static function deleteExperience($id)
    {
        self::$skill = Skill::find($id);
        self::$skill->delete();
    }
}
