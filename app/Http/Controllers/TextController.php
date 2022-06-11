<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;
use App\text;
use Illuminate\Support\Facades\Redirect;

class TextController extends Controller
{
    //

    public function index()

    {

        $textList = text::all();
        return view('text.index' ,  ['text'=> $textList]);
    }

        // Display text form
        public function create(){
            // we call the form view
            return view('text.create' );
        }

        // save a new text = persistance
        public function store(request $request){
            $text = new text();

            $text->Theme= $request->input('theme');
            $text->Sous_Theme= $request->input('stheme');

        //    store excel file

           if($request->hasFile('file')){


            $filename= $request->file->getClientOriginalName();

            $text->file = $request->file->store('public/storage');

            $text->titre= $filename;

            $text->save();


            // after the upload we get the path;
           }


           return  redirect('text');
              }
    public function destroy(Request $request , $Id_text){

        $text = text::find($Id_text);
        $text->delete();

        return Redirect('text');
    }
}
