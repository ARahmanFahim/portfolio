<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tastimonial extends Model
{
    use HasFactory;


    private static $testimonial,$image,$directory,$imageUrl,$imageName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/portfolio-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newTestimonial($request)
    {
        self::$testimonial = new Tastimonial();
        self::$testimonial->image                             = self::getImageUrl($request);
        self::$testimonial->client_name                       = $request->client_name;
        self::$testimonial->testimonial_designation           = $request->testimonial_designation;
        self::$testimonial->work_name                         = $request->work_name;
        self::$testimonial->delivery_date                     = $request->delivery_date;
        self::$testimonial->description                       = $request->description;
        self::$testimonial->save();
    }

    public static function updatedTestimonial($request, $id)
    {
        self::$testimonial = Tastimonial::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$testimonial->image))
            {
                unlink(self::$testimonial->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$testimonial->image;
        }
        self::$testimonial->image                             = self::$imageUrl;
        self::$testimonial->client_name                       = $request->client_name;
        self::$testimonial->testimonial_designation           = $request->testimonial_designation;
        self::$testimonial->work_name                         = $request->work_name;
        self::$testimonial->delivery_date                     = $request->delivery_date;
        self::$testimonial->description                       = $request->description;
        self::$testimonial->save();
    }

    public static function deleteTestimonial($id)
    {
        self::$testimonial = Tastimonial::find($id);

        if (file_exists(self::$testimonial->image))
        {
            unlink(self::$testimonial->image);
        }
        self::$testimonial->delete();
    }
}
