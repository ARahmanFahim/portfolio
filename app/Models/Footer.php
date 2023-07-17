<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;


    private static $footer,$image,$directory,$imageUrl,$imageName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/portfolio-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newFooter($request)
    {
        self::$footer = new Footer();
        self::$footer->image                             = self::getImageUrl($request);
        self::$footer->name                              = $request->name;
        self::$footer->designation                       = $request->designation;
        self::$footer->description                       = $request->description;
        self::$footer->number                            = $request->number;
        self::$footer->email                             = $request->email;
        self::$footer->save();
    }

    public static function updatedFooter($request, $id)
    {
        self::$footer = Footer::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$footer->image))
            {
                unlink(self::$footer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$footer->image;
        }
        self::$footer->image                             = self::getImageUrl($request);
        self::$footer->name                              = $request->name;
        self::$footer->designation                       = $request->designation;
        self::$footer->description                       = $request->description;
        self::$footer->number                            = $request->number;
        self::$footer->email                             = $request->email;
        self::$footer->save();
    }

    public static function deleteFooter($id)
    {
        self::$footer = Footer::find($id);

        if (file_exists(self::$footer->image))
        {
            unlink(self::$footer->image);
        }
        self::$footer->delete();
    }
}
