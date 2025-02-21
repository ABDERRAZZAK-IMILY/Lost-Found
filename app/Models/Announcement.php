<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'description', 'lieu', 'image', 'user_id'];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}