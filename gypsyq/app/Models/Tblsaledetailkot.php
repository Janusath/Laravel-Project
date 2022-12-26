<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblsaledetailkot extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='tblsaledetailkot';
    protected $primaryKey='TranID';
    protected $fillable = [
         'TranID',
         'ItemId',
         'SQty',
         'FreeQty',
         'UnitPrice',
         'TotalAmount',
         'Selling',
         'Cost',
         'LineDis',
         'LineDisAmount',
         'LineVatRate',
         'LineVatAmount',
         'IsReturn',
         'CostOfSale',
         'BriefID',
         'SerialNo'
        ];
}
