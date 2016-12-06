<?php

namespace CARE\Http\Controllers;

use Illuminate\Http\Request;

use CARE\Http\Controllers\Controller;

class AnimalController extends Controller
{

    public function getIndex(){
        return view('animals.index');
        // return 'Display all the animals';
    }

    public function getCreate(){
        return view('animals.create');
        // return 'Display form for adding animal';
    }

    public function postStore(Request $request){

        # validate the $Request object
        $this->validate($request,[
            'name' => 'required',
            'sex' => 'required',
            'enclosure' => 'required',
        ]);



        $name = $request->input('name');
        return 'Process adding new animal: '.$name;
    }

    public function getShow($id){
        return view('animals.show')->with('id', $id);
    }

    public function getEdit(){
        return view('animals.edit');
        // return 'Display form for editing animal\'s data';
    }

    public function putUpdate(){
        return 'Process edit form, display newly edited animal';
    }

    public function destroy(){
        return 'Process soft delete';
    }

}
