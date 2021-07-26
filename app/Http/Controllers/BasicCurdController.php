<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BasicCurdController extends Controller
{
    public function onSelect() {
        $selecData = DB::select('select * from students');
        // $data = json_decode($selecData);
        return view('select', ['selectKey' => $selecData]);

    }
    // inser data
    public function onInsert( Request $req) {
        
        
        // name: document.getElementById('st_name').value,
        // st_class : document.getElementById('st_class').value,
        // st_roll : document.getElementById('st_roll').value
        
        $name = $req->input('name');
        $class = $req->input('class');
        $roll = $req->input('roll');
        
        $results = DB::insert("INSERT INTO students(`name`, `class`, `roll`) VALUES (?,?,?)", [$name, $class, $roll]);


        if($results == true) {
            return "success";
        } else {
            return "faild";
        }




    }
    public function onDelete() {
        return view('delete');
    }
    public function onUpdate() {
        return view('update');
    }
}
