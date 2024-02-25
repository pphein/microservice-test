<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'survey';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'age',
        'occupation'
    ];
}