<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'plan_name',
        'trans_type',
        'departure',
        'destination',
        'start_date',
        'end_date',
        'note',
        'user_id',
    ];

    public function places()
    {
        return $this->hasMany(Place::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
