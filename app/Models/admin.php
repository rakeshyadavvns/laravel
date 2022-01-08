<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class admin extends Model
{
Protected $fillable = ['username','password'];
Protected $table = 'admin';
Protected $primaryKey='id';
const CREATED_AT = 'creation_date';
const UPDATED_AT = 'updated_date';
}