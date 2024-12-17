<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = [
        'specialist_name',
        'githublink',
        'pagelink',
        'membersname'
    ];
}
