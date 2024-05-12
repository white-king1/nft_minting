<?php

namespace App\Http\Controllers;

use App\ArtImage;
use App\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadArts() {
        return view('user.upload_arts');
    }

    public function postUploadedArts(Request $request)
    {
        $request->validate([
            // 'display_image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
            'images.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
        ]);

        $post_uploadedarts = new Upload();
        $post_uploadedarts->title = $request->title;
        $post_uploadedarts->description = $request->description;
        $post_uploadedarts->save();

        foreach ($request->images as $img) {
            if ($img->isValid()) {
                $ext = $img->extension();
                $imageName = time() . uniqid() . '.' . $ext;
                $img->move(public_path('art_images'), $imageName);

                $artImage = new ArtImage();
                $artImage->name = $imageName;
                $artImage->art_id = $post_uploadedarts->id;
                $artImage->save();
            } else {
                // Handle file upload error
            }
        }

        return redirect()->route('mint.confirm');
    }

    public function mintConfirm(){
        return view('user.art_mint_confirmation');

    }
    public function makePayments(){
        return view('user.make_payments');
    }

    public function transactProgress(){
        return view('user.transaction_in_progress');
    }



    public function artCollectiondetails($id)
    {
        $post_uploadedarts = ArtImage::with('upload')->where('art_id', $id)->get();
        // dd($post_uploadedarts[0]->upload);
        return view('user.art_collection_details', compact('post_uploadedarts'));
    }


}
