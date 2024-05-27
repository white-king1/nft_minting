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
        $post_uploadedarts->artist_name = $request->artist_name;
        $post_uploadedarts->art_price = $request->art_price;

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

    public function listOfArtCollection(){
        $list_collection =  ArtImage::with('upload')->latest()->get();
        // $uploads_details = Upload::latest()->get();
        // dd($list_collection);
        return view('user.list_of_art_collection',compact('list_collection'));
    }

    public function artCollectionList(){
        $art_collectionlist =  ArtImage::with('upload')->latest()->get();
        // $uploads_details = Upload::latest()->get();
        // dd($list_collection);
        return view('user.all_art_collection_list',compact('art_collectionlist'));
    }


}
