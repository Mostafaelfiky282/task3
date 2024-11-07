<?php

namespace App\Http\Controllers\Admin;

use App\Models\major;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function create(){
        return view('admin.majors.create');
    }

    public function store(){
        request()->validate([
            "name"=>"required","string","min:5","max:35",
            "image"=>"required","image"
        ]);
        $image_name = request()->image->getClientOriginalName();
        $image_name = time().'_'. $image_name;
        request()->image->move(public_path('uploads/majors/'), $image_name);
        
        Major::create([
            "name"=>request()->name,
            "image"=>$image_name
        ]);
        return redirect('/majors/add')->with('success', "Major Added Successfully");
    }

}

