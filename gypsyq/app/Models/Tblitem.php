<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblitem extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='tblitem';
    protected $primaryKey='CustID';
    protected $fillable = [
          'CustID',
          'Code',
          'NameOF',
          'SupplierID',
          'CategoryID',
          'ModelNo',
          'SerialNo',
          'BrandName',
          'Cost',
          'SellingPrice',
          'WholeSalePrice',
          'Discount',
          'ProfitMargin',
          'IsActive',
          'BinID',
          'ScaleID',
          'ColorIDs',
          'SizeIDs',
          'SubCatId',
          'SpecialCatId',
          'sizeid',
          'colorid',
          'styleid',
          'brandid',
          'DisRate',
          'VatRate',
          'PackSize',
          'ManufacturerID',
          'Barcode',
          'WarrantyPeriod',
          'ImgPath',
          'IsPrepItem',
        ];
}
