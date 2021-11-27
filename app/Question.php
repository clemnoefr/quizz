<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'categorie', 'reponse1','reponse2','reponse3','reponse4',
    ];
}
