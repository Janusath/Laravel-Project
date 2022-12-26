<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbltable extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='tbltable';
    protected $primaryKey='CustID';
    protected $fillable = [
          'CustID',
          'Code',
          'NameOF',
          'IsActive',
          'DescriptionOf',
          'AreaId',
          'MaximumSeats'
        ];
}
