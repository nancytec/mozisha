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
        'title', 'image', 'category', 'content', 'slug', 'continue_1', 'continue_image_1', 'view',
        'continue_2', 'continue_image_2', 'continue_3', 'continue_image_3', 'quote', 'quote_by',
        'status', 'user_id', 'status',
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }


    public function getImagePathAttribute(){

        return Storage::disk('public')->url($this->image);

    }
    public function getContinue1ImagePathAttribute(){

        return Storage::disk('public')->url($this->continue_image_1);

    }
    public function getContinue2ImagePathAttribute(){

        return Storage::disk('public')->url($this->continue_image_2);

    }

    public function getContinue3ImagePathAttribute(){

        return Storage::disk('public')->url($this->continue_image_3);

    }
}
