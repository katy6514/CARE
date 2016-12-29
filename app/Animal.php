<?php

namespace CARE;

use Illuminate\Database\Eloquent\Model;
use DB;

class Animal extends Model
{
    public static function subSpeciesForDropdown() {

        $sub_species = DB::select("SELECT DISTINCT sub_species FROM animals");
        $sub_species_for_dropdown = [];
        for ($i=0; $i < count($sub_species); $i++) {
            $sub_species_for_dropdown[$i] = $sub_species[$i]->sub_species;
        }

        return $sub_species_for_dropdown;
    }


    public function procedure() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->hasMany('\CARE\Procedure');
    }
}
