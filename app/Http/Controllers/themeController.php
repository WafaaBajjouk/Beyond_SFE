<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;
use App\Soustheme;

class themeController extends Controller
{
    public function index(){
            $themeList = Theme::all();
            $soustheme = Soustheme::all();


            return view('theme.index' , ['theme' => $themeList] , ['soustheme' => $soustheme]);




        }

         // Display theme form
         public function create(){
            // we call the form view
            $soustheme = Soustheme::all();

            return view('theme.create', ['soustheme' => $soustheme]);
        }

        // save a new theme = persistance
        public function store(Request $request){
                $theme = new Theme();
                // $soustheme = new Soustheme();
                // $soustheme->titre= $request->input('soustheme');



                $theme->titre= $request->input('titre');

                $theme->soustheme= $request->input('soustheme');

                $theme->save();

                return redirect('theme');
        }

    }
