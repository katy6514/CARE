<?php

namespace CARE\Http\Controllers;

use Illuminate\Http\Request;

use CARE\Http\Controllers\Controller;

class AnimalController extends Controller
{

    public function getIndex(){
        return 'Display all the animals';
    }

    public function getCreate(){
        return 'Display form for adding animal';
    }

    public function postStore(){
        return 'Process form to add animal to database';
    }

    public function getShow($id){
        return view('animals.show')->with('id', $id);
    }

    public function getEdit(){
        return 'Display form for editing animal\'s data';
    }

    public function putUpdate(){
        return 'Process edit form, display newly edited animal';
    }

    public function destroy(){
        return 'Process soft delete';
    }

}
