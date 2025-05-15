<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'account';
    protected $fillable = ['idUser', 'balance'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
