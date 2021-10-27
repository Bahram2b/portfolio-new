<?php

namespace App\Http\Controllers;

use App\Models\Clip;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ClipController extends Controller
{

    public function index($cat)
    {
        switch ($cat){
            case('brolls'): $clip = Clip::latest()->where('category',"Broll")->paginate(15);
                break;
            case('index'):  $clip=Clip::latest()->paginate(15);
                break;
            case('motions'):$clip=Clip::latest()->where('category',"Motion")->paginate(15);
                break;
            case('commercials'):$clip=Clip::latest()->where('category',"Product")->paginate(15);
                break;
            case('musics'):$clip=Clip::latest()->where('category',"Music")->paginate(15);
                break;
        }

        return view('admin.clip.index',compact('clip'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $clip= new Clip();
        $clip->description=$request->description;
        $clip->category=$request->category;
        $clip->title=$request->title;
        $clip->link=$request->link;
        $file=$request->file('thumbnail');
        if (!empty($file)) {
            $thumbnail = time() .$file->getClientOriginalName();
            $thumbnail = "thumbnail".$thumbnail;

            Image::make($file)->fit(300,180)->save('backend/img/clips/thumbnails/'.$thumbnail);
//            Image::make($file)->fit(800, 600, function ($constraint) {
//                $constraint->upsize()->save('backend/img/clips/thumbnails/'.$thumbnail);
//            });

            $clip->thumbnail = $thumbnail;

        }
        $clip->save();
        $notification=array(
            'message'=>'Video added',
            'alert-type'=>'success'
        );
//        $clip=Slider::paginate(6);
        return redirect()->back()->with($notification);
//        return  view('Admin.slider.index',compact('slider'));
    }


    public function show(Clip $clip)
    {
        //
    }

    public function edit(Clip $clip)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $data=Clip::findOrNew($id);
        $data->category=$request->category;
        $data->title=$request->title;
        if ($request->renew) {
            $data->created_at=Carbon::now()->timestamp;
        }
        $data->description=$request->description;
        $data->link=$request->link;
        $data->save();
        $notification=array(
            'message'=>'video info edited',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        {
            $clips=Clip::findorfail($id);
            $pathdelete="backend/img/clips/thumbnails/".$clips->thumbnail;
            unlink($pathdelete);
            Clip::destroy($id);
            $notification=array(
                'message'=>'video deleted',
                'alert-type'=>'info'
            );
//        $clip=Slider::paginate(6);
            return redirect()->back()->with($notification);
        }
    }
}
