<?php

namespace App;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class AssociationMessage extends Model
{
    use CrudTrait;

    protected $guarded = [ 'id' ];

    public function getFullNameAttribute()
    {
        return $this->lastname . ' ' . $this->firstname;
    }
}
