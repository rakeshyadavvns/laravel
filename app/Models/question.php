<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class question extends Model
{
Protected $fillable = ['questionno','question','opta','optb','optc','optd','correctanswer','comments'];
Protected $table = 'questions';
Protected $primaryKey='questionno';
const CREATED_AT = 'creation_date';
const UPDATED_AT = 'updated_date';
}