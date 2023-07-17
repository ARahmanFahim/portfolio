<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;


    private static $settings,$image,$directory,$imageUrl,$imageName,$resume,$resumeurl,$resumeName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/settings-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function getResume($request)
    {
        self::$resume = $request->file('resume');
        self::$resumeName = self::$resume->getClientOriginalName();
        self::$directory = 'upload/settings-image/';
        self::$resume->move(self::$directory, self::$resumeName);
        self::$resumeurl = self::$directory.self::$resumeName;
        return self::$resumeurl;
    }


    public static function newSettings($request)
    {
        self::$settings = new Settings();
        self::$settings->image                             = self::getImageUrl($request);
        self::$settings->resume                             = self::getResume($request);
        self::$settings->name                              = $request->name;
        self::$settings->designation                       = $request->designation;
        self::$settings->description                       = $request->description;
        self::$settings->number                            = $request->number;
        self::$settings->email                             = $request->email;
        self::$settings->facebook_link                     = $request->facebook_link;
        self::$settings->twitter_link                      = $request->twitter_link;
        self::$settings->insta_link                        = $request->insta_link;
        self::$settings->save();
    }

    public static function updatedSettings($request, $id)
    {
        self::$settings = Settings::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$settings->image))
            {
                unlink(self::$settings->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$settings->image;
        }
        if ($request->file('resume'))
        {
            if (file_exists(self::$settings->resume))
            {
                unlink(self::$settings->resume);
            }
            self::$resumeurl = self::getResume($request);
        }
        else
        {
            self::$resumeurl = self::$settings->resume;
        }
        self::$settings->image                             = self::$imageUrl;
        self::$settings->resume                             = self::$resumeurl;
        self::$settings->name                              = $request->name;
        self::$settings->designation                       = $request->designation;
        self::$settings->description                       = $request->description;
        self::$settings->number                            = $request->number;
        self::$settings->email                             = $request->email;
        self::$settings->facebook_link                     = $request->facebook_link;
        self::$settings->twitter_link                      = $request->twitter_link;
        self::$settings->insta_link                        = $request->insta_link;
        self::$settings->save();
    }

    public static function deleteSettings($id)
    {
        self::$settings = Settings::find($id);

        if (file_exists(self::$settings->image))
        {
            unlink(self::$settings->image);
        }
        self::$settings->delete();
    }
}
