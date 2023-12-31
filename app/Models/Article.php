<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'category','body','price','img','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function consoles(){
        return $this->belongsToMany(Console::class);
    }
}
