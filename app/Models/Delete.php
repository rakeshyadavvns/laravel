<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class LoginForm extends Model
{
Protected $fillable = ['id','emailid','password'];
Protected $table = 'loginform';
Protected $primaryKey='id';
const CREATED_AT = 'creation_date';
const UPDATED_AT = 'updated_date';
}