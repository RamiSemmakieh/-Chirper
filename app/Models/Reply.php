<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'chirp_id',
        'user_id', // Add this line to allow mass assignment on user_id
        'body',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the chirp that the reply belongs to.
     */
    public function chirp()
    {
        return $this->belongsTo(Chirp::class);
    }

    /**
     * Get the user that created the reply.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
