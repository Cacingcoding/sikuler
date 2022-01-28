<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'ekskul',
        'title',
        'description',
        'file',
        'status',
        'revisi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
