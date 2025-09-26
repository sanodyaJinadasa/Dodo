<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
     protected $fillable = ['category', 'authors', 'year', 'title', 'journal', 'volume_issue', 'doi_link'];
}
