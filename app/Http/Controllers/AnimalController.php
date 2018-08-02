<?php

namespace CARE\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use CARE\Animal;
use Faker\Factory as Faker;


use CARE\Http\Controllers\Controller;

class AnimalController extends Controller
{

    public function getIndex(){

        // $animals = DB::table('animals')->get();



        //
        return view('animals.index');
                // ->with('animals', $animals);
        // return 'Display all the animals';
    }

    public function getSearch(Request $request){
        $searchResults = [];

        $searchTerm = $request->input('searchTerm', null);



        if ($searchTerm){

          $animalsRawData = file_get_contents(database_path().'/testCats.json');
          dump($animalsRawData);
          $animals = json_decode($animalsRawData, true);
          dump($animals);

          foreach($animals as $name => $animal){
            if ($request->has('caseSensitive')) {
              $match = $title == $searchTerm;
            } else {
              $match = strtolower($title) == strtolower($searchTerm);
            }

            if ($match){
              $searchResults[$name] = $animal;
            }
          }
        }

        return view('animals.search')->with([
          'searchTerm' => '',
          'caseSensitive' => $request->has('caseSensitive'),
          'searchResults' => ''
        ]);
    }

    public function practice(){
        $faker = Faker::create();
        $dates = array();
        for ($j=0; $j < 3; $j++) {
            array_push($dates, $faker->date($format = 'Y-m-d', $max = 'now'));
        }
        sort($dates);

        $animal = new Animal();

        $animal->name = "Cricket";
        $animal->sex = "Female";
        $animal->sub_species = "Lion";
        $animal->bio = "Prefers to go to bed at 8:30pm";
        $animal->image = $faker->imageUrl($width = 300, $height = 300, 'cats');
        $animal->enclosure = "F";
        $animal->birth_date = $dates[0];
        $animal->care_date = $dates[1];
        $animal->rainbow_date = $dates[2];

        $animal->save();

        dump('Added: '.$animal->name);

    }


    public function getCreate(){

        $sub_species_for_dropdown = Animal::subSpeciesForDropdown();

        return view('animals.create')->with([
            'sub_species_for_dropdown' => $sub_species_for_dropdown
        ]);

      //  return 'Display form for adding animal';
        //return view('animals.create');
    }

    public function postStore(Request $request){

        # validate the $Request object
        $this->validate($request,[
            'name' => 'required',
            'sex' => 'required',
            'sub_species' => 'required',
            'enclosure' => 'required',
        ]);

        dump($request);


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
