<?php

namespace App\Http\Controllers;

use App\Models\major;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index() {
        $majors = Major::orderBy('id','DESC')->paginate(10);
        return view('majors',['majors' => $majors]);
    }
    // public function major() {
    //     return view('add-major');
    // }
    // public function addmajor(Request $request){
    //     // dd($request->name);
    //     $request->validate([
    //         'name' => ['required', 'string', 'min:5', 'max:20'],
    //         'image' => ['required', 'string']
    //     ]);
    //     $major = new major();
    //     $major->name = $request->name;
    //     $major->image = $request->image;
    //     $major->save();
    //     return redirect('/add_major')->with('success', "Major Added Successfully");
       
    // }
}
