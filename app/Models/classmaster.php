<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class classmaster extends Model
{
Protected $fillable = ['classid','sessionno','classname','remarks','enteredby'];
Protected $table = 'classmaster';
Protected $primaryKey='c1assid';
const CREATED_AT = 'creation_date';
const UPDATED_AT = 'updated_date';
}