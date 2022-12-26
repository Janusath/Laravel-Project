<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblfloor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='tblfloor';
    protected $primaryKey='CustID';
    protected $fillable = [
         'CustID',
         'Code',
         'NameOF',
         'IsActive',
         'DescriptionOf'
        ];
}
