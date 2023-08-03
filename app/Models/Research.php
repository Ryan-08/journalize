<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Research extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    public $collection = "research";

    protected $fillable = [
        'title',
        'author',
        'link',
        'citation',
        'tahun',
        'desc',
        'pdfLink',
    ];
}
