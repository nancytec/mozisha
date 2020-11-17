<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenticeship extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'details', 'company', 'start_month', 'start_year', 'end_month',
        'end_year', 'apprentice_period', 'mentor_period', 'apprentice_service', 'mentor_name', 'status',
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function CreatorDetails(){
        return $this->belongsTo(UserDetail::class, 'user_id');
    }

}
