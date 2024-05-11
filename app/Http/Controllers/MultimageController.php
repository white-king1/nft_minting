<?php

namespace App\Http\Controllers;

use App\Multimage;
use Illuminate\Http\Request;

class MultimageController extends Controller
{
    public function multImage()
    {
        return view('user.multiple_image');
    }

    public function postmultImage(Request $request)
    {
        $image = array();
        if ($files = $request->file('image')) {
            foreach ($files as $key => $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'public/storage/upload_images/';
                $image_url = $upload_path . $image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }
        Multimage::insert([
            'image' => implode('|', $image),
            'title' => $request->title,
        ]);
        return redirect()->route('multi.image')->with('flash_message', 'Submitted Successfully.')->with('flash_type', 'alert-success');
    }
}
