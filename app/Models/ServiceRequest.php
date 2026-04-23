<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'professional_id',
        'title',
        'description',
        'image',
        'status',
        'progress',
        'scheduled_at'
    ];
    protected $casts = [
        'images' => 'array',
        'scheduled_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
