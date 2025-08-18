<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
protected $table = 'access_log';
public $timestamps = true;

protected $fillable = [
'namaSekolah',
'link',
'created_at',
'updated_at',
];
}