<?php

namespace CARE\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use CARE\Animal;

use CARE\Http\Controllers\Controller;

class AnimalController extends Controller
{

    public function getIndex(){

        $animals = DB::table('animals')->get();

        return view('animals.index')
                ->with('animals', $animals);
        // return 'Display all the animals';
    }

    public function getCreate(){

        $sub_species_for_dropdown = Animal::subSpeciesForDropdown();

        return view('animals.create')->with([
            'sub_species_for_dropdown' => $sub_species_for_dropdown
        ]);
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
        return 'Display one animal: '.$id;


        // return view('animals.show')->with('id', $id);

        // $animal = \CareCats\Animal::find($id);
        //
        // $img = Image::make('img/babyLion1.jpg');
        //
        //         if(is_null($animal)) {
        //             \Session::flash('message','Animal not found');
        //             return redirect('/animals');
        //         } else {
        //             return view('animal')
        //                 ->with('img',$img)
        //                 ->with('animal',$animal);
        //         }
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
