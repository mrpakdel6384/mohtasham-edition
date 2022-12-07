<?php

namespace App\Http\Controllers\Admin;

use App\ImageProduct;
use App\Product;
use App\UserContentGallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{

    protected function uploadImages($file,$directory)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/$directory/images/{$year}/";
        $filename = str_replace(" ","-",$file->getClientOriginalName());

        $file = $file->move(public_path($imagePath) , $filename);

        $sizes = ["300" , "600" , "900"];
        $url['images'] = $this->resize($file->getRealPath() , $sizes , $imagePath , $filename);
        $url['thumb'] = $url['images'][$sizes[0]];
        return $imagePath.$filename;
    }

    private function resize($path , $sizes , $imagePath , $filename)
    {
        $images['original'] = $imagePath . $filename;
        foreach ($sizes as $size) {
            $images[$size] = $imagePath . "{$size}_" . $filename;

            Image::make($path)->resize($size, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path($images[$size]));
        }

        return $images;
    }

    protected function UploadCv($file,$directory)
    {
        $year = Carbon::now()->year;
        $filePath = "/upload/$directory/{$year}/";
        $filename = str_replace(" ","-",$file->getClientOriginalName());

        $file = $file->move(public_path($filePath) , $filename);



        return $filePath.$filename;
    }

    protected function UploadVideoSound($file,$directory)
    {
        $year = Carbon::now()->year;
        $filePath = "/upload/$directory/videoSound/{$year}/";
        $fileName = $file->getClientOriginalName();
        $file = $file->move(public_path($filePath),$fileName);
        return $filePath.$fileName;
    }

    protected function setCourseTime($episode){
        $course = $episode->course;
        $course->time = $this->getCourseTime($course->episodes->pluck('time'));
        $course->save();
    }

    protected function getCourseTime($times)
    {
        $timestamp = Carbon::parse('00:00:00');
        foreach($times as $time){
            $t = strlen($time) == 5 ? strtotime('00:'.$time) : strtotime($time);
            $timestamp->addSecond($t);
        }

        return $timestamp->format('H:i:s');
    }

    protected function uploadSingleImage($file,$directory)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/$directory/$year/";
        $imageName = str_replace(" ","-",$file->getClientOriginalName());
        $file = $file->move(public_path($imagePath),$imageName);
        return $imagePath.$imageName;

    }


    protected function dropzoneImage(Request $request)
    {

        $image = $request->file('file');
        $directory = $request->input('directory');
        $multiple = $request->input('multiple');
        $returnName = $request->input('returnName');
        $year = Carbon::now()->year;
        $imageName = $image->getClientOriginalName();
        $imagePath = "/upload/$directory/images/{$year}/";
        $file = $image->move(public_path($imagePath),$imageName);
        $sizes = ["300" , "600" , "900"];
        $url['images'] = $this->resize($file->getRealPath() , $sizes , $imagePath , $imageName);
        return response()->json([
            'url'=>$imagePath.$imageName,
            'returnName'=>$returnName,
            'multiple'=>$multiple,
        ]);
    }


    protected function dropzoneFile(Request $request)
    {

        $image = $request->file('file');
        $directory = $request->input('directory');
        $multiple = $request->input('multiple');
        $returnName = $request->input('returnName');
        $year = Carbon::now()->year;
        $imageName = $image->getClientOriginalName();
        $imagePath = "/upload/$directory/file/{$year}/";
        $file = $image->move(public_path($imagePath),$imageName);
        return response()->json([
            'url'=>$imagePath.$imageName,
            'returnName'=>$returnName,
            'multiple'=>$multiple,
        ]);
    }

    protected  function upload_product_image(Request $request){
        $images = $request->file('file');
        $product_id = $request->product_id;
        $have_primary = $this->check_primary_image($product_id);
        $url= [];
        $uploaded = "";
        $i = 0;
        foreach($images as $image){
            $is_default = ($i == 0 ? 1 : 0);
            $directory = 'product';
            $year = Carbon::now()->year;
            $imageName = $image->getClientOriginalName();
            $imagePath = "/upload/$directory/images/{$year}/";
            $file = $image->move(public_path($imagePath),$imageName);
            $sizes = ["300" , "600" , "900"];
            $url['images'] = $this->resize($file->getRealPath() , $sizes , $imagePath , $imageName);

            $image_product = ImageProduct::create([
                'product_id'=>$product_id,
                'image'=>$imagePath.$imageName,
                'is_default'=> $is_default,
            ]);
            if($have_primary){
                $btn = "btn-accent";
            }else{
                $btn = ($i == 0 ? "btn-danger" : "btn-accent");
            }
            $uploaded .= "<div class=\"col-md-4 set_image_default m--margin-top-10 m--padding-10\" id=\"$image_product->id\"  style=\"background:url({$imagePath}{$imageName})\">

                            <span class=\"btn $btn \">
                                <i class='fa fa-check-circle'></i>
                            </span>
                            <span class=\"btn $btn delete m_sweetalert_demo_9 \" data-id=\"$image_product->id\" data-route=\"imagesProduct\" data-lang=\"".app()->getLocale()."\"  data-confirm=\"".__('admin.Yes')."\" data-cancel=\"".__('admin.No')."\" data-text=\"".__('admin.text_delete')."\" data-title=\"".__('admin.message_delete')."\" >
                                <i class='fa fa-trash'></i>
                            </span>
                          </div>";
            $i++;

        }
        return response()->json([
            'images'=>$uploaded,
        ]);
    }

    public function check_primary_image($product_id){
        $image = ImageProduct::whereProduct_id($product_id)->where('is_default',1)->first();
        if($image){
            return true;
        }

        return false;
    }



    protected function uploadVideo($file,$directory)
    {
        $year = Carbon::now()->year;
        $filePath = "/upload/$directory/file/{$year}/";
        $filename = str_replace(" ","-",$file->getClientOriginalName());

        $file = $file->move(public_path($filePath) , $filename);
        return $filePath.$filename;
    }

    protected  function upload_user_content_file(Request $request){
        $images = $request->file('file');
        $user_content_id = $request->user_content_id;
        foreach($images as $image){
            $directory = 'usercontent';
            $year = Carbon::now()->year;
            $imageName = $image->getClientOriginalName();
            $imagePath = "/upload/$directory/images/{$year}/";
            $type = explode('/',$image->getClientMimeType());
            $file = $image->move(public_path($imagePath),$imageName);
            $file_content = UserContentGallery::create([
                'user_content_id'=>$user_content_id,
                'file'=>$imagePath.$imageName,
                'type'=>$type[1],
            ]);


        }
        return response()->json([
            'res'=>1,
        ]);
    }
}
