<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    public function getShortDescriptionAttribute(){
        return substr(strip_tags($this->attributes["description"]),0,20).'..';
    }
}