<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Monolog\Handler\selectErrorStream;

class Portfolio extends Model
{
    use HasFactory;

    private static $portfolio,$image,$directory,$imageUrl,$imageName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/portfolio-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newPortfolio($request)
    {
        self::$portfolio = new Portfolio();
        self::$portfolio->image          = self::getImageUrl($request);
        self::$portfolio->name           = $request->name;
        self::$portfolio->type           = $request->type;
        self::$portfolio->description    = $request->description;
        self::$portfolio->save();
    }

    public static function updatedPortfolio($request, $id)
    {
        self::$portfolio = Portfolio::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$portfolio->image))
            {
                unlink(self::$portfolio->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$portfolio->image;
        }
        self::$portfolio->image          = self::$imageUrl;
        self::$portfolio->name           = $request->name;
        self::$portfolio->type           = $request->type;
        self::$portfolio->description    = $request->description;
        self::$portfolio->save();
    }

    public static function deletePortfolio($id)
    {
        self::$portfolio = Portfolio::find($id);

        if (file_exists(self::$portfolio->image))
        {
            unlink(self::$portfolio->image);
        }
        self::$portfolio->delete();
    }
}
