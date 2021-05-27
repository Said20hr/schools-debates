<?php
namespace App\Helper;

use App\Models\Category;
use App\Models\region;
use Illuminate\Http\Request;


/**
 * Class Helper
 * @package App\Helper
 */
class Helper
{


    /**
     * @param Request $request
     * @return string
     */
    /**
     * @param Request $request
     * @param $directory
     * @param $file
     * @return string
     */
 public static function uploadImage(Request $request,$directory,$file)
    {
        if ($request->hasFile($file)) {
            $image = $request->file($file);
            $extension = $image->getClientOriginalName();
            $name = time() . '.' . $extension;
            $image->move('storage/'.$directory.'/', $name);
            return  $name;
        }
        else {
            return  '';
        }
    }

    public static function uploadImages(Request $request,$directory)
    {

        if ($request->hasFile('images')) {
            $images=array();
            foreach($request->file('images') as $file) {
                $extension = $file->getClientOriginalName();
                $name = time() . '.' . $extension;
                $file->move('storage/' . $directory . '/', $name);
                $images[] = $name;
            }
            return '["'.implode('","', $images).'"]';
        } else {
            return  '';

        }
    }
    public static function getCategoryName($id)
    {
        return Category::find($id)->name;

    }
    public static function getRegionName($id)
    {
        return region::find($id)->name;

    }
}
