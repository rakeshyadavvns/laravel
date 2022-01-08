<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class sessionmaster extends Model
{
Protected $fillable = ['sno','sessionfrom','sessionto','comments','enteredby'];
Protected $table = 'sessionmaster';
Protected $primaryKey='sno';
const CREATED_AT = 'creation_date';
const UPDATED_AT = 'updated_date';
}