<?php

namespace CARE;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    public function animal() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\CARE\Animal');
    }
}
