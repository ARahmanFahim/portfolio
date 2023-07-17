<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wellcome extends Model
{
    use HasFactory;

    private static $wellcome,$image,$directory,$imageUrl,$imageName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/portfolio-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newWellcome($request)
    {
        self::$wellcome = new Wellcome();
        self::$wellcome->name   = $request->name;
        self::$wellcome->description   =$request->description;
        self::$wellcome->image   = self::getImageUrl($request);
        self::$wellcome->save();
    }

    public static function updatedWelcome($request, $id)
    {
        self::$wellcome = Wellcome::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$wellcome->image))
            {
                unlink(self::$wellcome->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$wellcome->image;
        }
        self::$wellcome->name   = $request->name;
        self::$wellcome->description   =$request->description;
        self::$wellcome->image          = self::$imageUrl;
        self::$wellcome->save();
    }

    public static function deleteWelcome($id)
    {
        self::$wellcome = Wellcome::find($id);

        if (file_exists(self::$wellcome->image))
        {
            unlink(self::$wellcome->image);
        }
        self::$wellcome->delete();
    }



}
