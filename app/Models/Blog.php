<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'image', 'category', 'content', 'slug',
        'status', 'user_id', 'status',
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }


    public function getImagePathAttribute(){

        return Storage::disk('public')->url($this->image);

    }


}
