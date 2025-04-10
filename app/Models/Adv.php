<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adv extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'price',
        'Text1',
        'Text2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
