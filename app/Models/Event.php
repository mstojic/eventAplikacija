<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function organizer()
    {
        return $this->belongsTo('App\Models\User', 'organizer_id');
    }
}
