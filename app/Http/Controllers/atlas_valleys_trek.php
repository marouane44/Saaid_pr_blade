<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class atlas_valleys_trek extends Controller
{
    public function index($id){

        $posts = file_get_contents(base_path('/storage/all_hikes.json'));
        $posts = json_decode($posts, true);
        $collection=collect($posts)->where('userId',$id);
       // dd($collection);
        
        return view('atlas_valleys_trek',[

            'uniqueUserIds'=>$collection,
          
        ]);
    }
}
