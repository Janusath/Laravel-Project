<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbllastid extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = false;
    protected $table='tbllastid';
    protected $primaryKey='TranID';
    protected $fillable = [
         'TranID',
         'LastID',
         'TranCode',
         'CompID'
        ];
}
