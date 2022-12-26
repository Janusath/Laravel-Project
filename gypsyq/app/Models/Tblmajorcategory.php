<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblmajorcategory extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = false;
    protected $table='tblmajorcategory';
    protected $primaryKey='CustID';
    protected $fillable = [
         'CustID',
         'Code',
         'NameOF',
         'IsActive',
         'DescriptionOf',
         'ImgPath',
        ];
}
