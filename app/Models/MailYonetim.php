<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailYonetim extends Model
{
    use HasFactory;
    protected $table = 'mailyonetim';
    protected $fillable=['id','baslik','metin','created_at','updated_at'];
}
