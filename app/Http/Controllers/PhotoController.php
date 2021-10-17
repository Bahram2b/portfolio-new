<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{

    public function index()
    {
        $photo=Photo::latest()->paginate(10);
        return view('Admin.Photo.index',compact('photo'));
    }


    public function create()
    {
//        return file('resources/views/ajaxfile.php');
    }

    public function store(Request $request)
    {
        $photo= new Photo();
        $photo->description=$request->description;
        $photo->title=$request->title;
        $photo->category=$request->category;
        $file=$request->file('image');
        if (!empty($file)) {
            $image = time() .$file->getClientOriginalName();
            $thumbnail = "thumbnail".$image;

            Image::make($file)->fit(300,180)->save('backend/img/photos/thumbnails/'.$thumbnail);
//            Image::make($file)->fit(800, 600, function ($constraint) {
//                $constraint->upsize()->save('backend/img/photos/thumbnails/'.$thumbnail);
//            });
            $file->move("backend/img/photos/originals/", $image);
            $photo->image = $image;

            $photo->thumbnail = $thumbnail;

        }
        $photo->save();
        $notification=array(
            'message'=>'Photo added',
            'alert-type'=>'success'
        );
//        $photo=Slider::paginate(6);
        return redirect()->back()->with($notification);
//        return  view('Admin.slider.index',compact('slider'));
    }


    public function show(Photo $photo)
    {
        //
    }


    public function edit(Photo $photo)
    {
        //
    }


    public function update(Request $request, $id)
    {

        $data=Photo::findOrNew($id);
        $data->category=$request->category;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->save();
        $notification=array(
            'message'=>'Info Edited bitch',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function destroy($id)
    {
        {
            $photos=Photo::findorfail($id);
            $pathdelete="backend/img/photos/originals/".$photos->image;
            unlink($pathdelete);
            Photo::destroy($id);
            $notification=array(
                'message'=>'Photo deleted',
                'alert-type'=>'info'
            );
//        $photo=Slider::paginate(6);
            return redirect()->back()->with($notification);
        }
    }
}
