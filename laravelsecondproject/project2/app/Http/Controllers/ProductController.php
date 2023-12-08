<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Faker\Core\File as FakerFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index(){
         $products = Product::all();
        return view('products.index',['products'=>$products]);

    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
           $data = $request->validate([
            'movie_name'=>'required',
            'movie_description'=>'required',
            'movie_gener'=>'required',
            'movie_img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
           ]);
           if($request->hasfile('movie_img')){
            $image = $request->file('movie_img');
            $extension = $image->getClientOriginalExtension();
            $imagename = time().'.'.$extension;
            $image->storeAs('/public/images/',$imagename);
            $data['movie_img'] = $imagename;
           }
           $newproduct = Product::create($data);
           return redirect(route('product.index'));
    }

    public function edit(Product $product){
           return view('products.edit',['product'=>$product]);
    }
    public function update(Product $product, Request $request){
             $data = $request->validate([
            'movie_name'=>'required',
            'movie_description'=>'required',
            'movie_gener'=>'required',
            'movie_img'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
           ]);
             if($request->hasfile('movie_img')){
                $destination_path = '/public/images/'.$product->movie_img;
                if(File::exists($destination_path)){
                File::delete($destination_path);
            }
            $image = $request->file('movie_img');
            $extension = $image->getClientOriginalExtension();
            $imagename = time().'.'.$extension;
            $image->storeAs('/public/images/',$imagename);
            $data['movie_img'] = $imagename;
           }
           $product->update($data);
           return redirect(route('product.index'))->with('success','Movie updated successfully');
    }
    public function destroy(Product $product){
       $imagepath = '/public/images/'.$product->movie_img;
        if (Storage::disk('local')->exists($imagepath)) {
            // Delete the image from storage
            Storage::disk('local')->delete($imagepath);
        }
           $product->delete();
           return redirect(route('product.index'))->with('success','Movie deleted successfully');
    }
}
