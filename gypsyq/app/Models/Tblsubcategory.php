<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblsubcategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='tblsubcategory';
    protected $primaryKey='CustID';
    protected $fillable = [
         'CustID',
         'Code',
         'NameOF',
         'IsActive',
         'DescriptionOf'
        ];
}
