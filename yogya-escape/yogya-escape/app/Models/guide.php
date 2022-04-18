<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guide extends Model
{
    use HasFactory;
    public $table = "guide";

    protected $fillable = [
        'nama', 'noHp', 'image', 'deskripsi'];
}
