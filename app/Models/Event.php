<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    public $table = 'uus_treening';
    public $primaryKey = 'event_id';
    public $incrementing = true;
    public $timestamps = false;

    
}
