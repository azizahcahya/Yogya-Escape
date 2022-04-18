<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $table = "destinasis";

    protected $fillable = [
        'nama', 'lokasi', 'image', 'deskripsi'];
}
