<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Faker\Provider\Image;
class HomeController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function index($section)
    {
     switch ($section){
         case('mobile-banner'): $filename = 'mory-middlemobile.jpg';
             $label='Mobile Banner Background Picture';

             break;
         case('mobile-main'): $filename = 'handmobileblack.jpg';
             $label='Mobile Main Background Picture';

             break;
         case('desktop-banner'): $filename = 'morymid.jpg';
             $label='Desktop Banner Background Picture';

             break;
         case('1-3-4-sections'): $filename = 'hand.jpg';
             $label='Desktop 1-3-4-sections Background';

             break;
         case('second-section'): $filename = 'handblur.jpg';
             $label='Desktop Second Section Background';
             break;

     }
//    return view('admin.background.index',compact('background','label','url'));
    return view('admin.background.index',compact('label','filename'));
    }




    public function bgupdate(Request $request,$filename)

    {

        $file=$request->file('image');

        if (!empty($file)) {
            unlink('frontend/img/'.$filename);
            $file->move("frontend/img/",$filename);
            $notification=array(
                'message'=>'Background Updated',
                'alert-type'=>'success'
            );
//            switch ($filename){
//                case('mobilebanner'):
//
//
//
//
//
//                    break;
//                case('mobilemain'):
//                    unlink($background);
//
//                    $file->move("frontend/img/",'handmobileblack.jpg');
//
//                    $notification=array(
//                        'message'=>'Mobile Main background updated',
//                        'alert-type'=>'success'
//                    );
//                    break;
////                case('desktop-banner'): $background = 'frontend/img/mory-middlemobile.jpg';
////                    $label='Desktop Banner Background Picture';
////                    $url='mobile.main.update';
////                    break;
////                case('1-3-4-sections'): $background = 'frontend/img/hand.jpg';
////                    $label='Desktop 1-3-4-sections Background';
////                    $url='mobile.main.update';
////                    break;
////                case('second-section'): $background = 'frontend/img/handblur.jpg';
////                    $label='Desktop Second Section Background';
////                    $url='mobile.main.update';
////                    $url='mobile.main.update';
////                    break;
//
//            }


            return redirect()->back()->with($notification);
        }


        $notification=array(
            'message'=>'No change',
            'alert-type'=>'warning'
        );
        return redirect()->back()->with($notification);

    }
//    public function mainupdate(Request $request)
//
//    {
//        $file=$request->file('image');
//
//        if (!empty($file)) {
//
//
//            return redirect()->back()->with($notification);
//        }
//
//
//        $notification=array(
//            'message'=>'No change',
//            'alert-type'=>'warning'
//        );
//        return redirect()->back()->with($notification);
//
//    }
//    public function desktopupdate(Request $request)
//
//    {
//        $file=$request->file('image');
//
//        if (!empty($file)) {
//
//            unlink('frontend/img/mory-middlemobile.jpg');
//
//            $file->move("frontend/img/",'mory-middlemobile.jpg');
//
//            $notification=array(
//                'message'=>'Mobile banner updated',
//                'alert-type'=>'success'
//            );
//            return redirect()->back()->with($notification);
//        }
//
//
//        $notification=array(
//            'message'=>'No change',
//            'alert-type'=>'warning'
//        );
//        return redirect()->back()->with($notification);
//
//    }


}
