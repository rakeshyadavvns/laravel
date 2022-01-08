<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class contact extends Model
{
Protected $fillable = ['firstname','lastname','country','subject'];
Protected $table = 'contact';
Protected $primaryKey='id';
const CREATED_AT = 'creation_date';
const UPDATED_AT = 'updated_date';
}