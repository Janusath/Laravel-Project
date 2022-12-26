<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblsalebriefkot extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='tblsalebriefkot';
    protected $primaryKey='BillId';
    protected $fillable = [
         'BillId',
         'DateOn',
         'BillNo',
         'CustID',
         'Add1',
         'Add2',
         'City',
         'Tp1',
         'Tp2',
         'Tp3',
         'DescriptionOf',
         'GrossTotal',
         'NetTotal',
         'CNAmount',
         'TotalPaid',
         'ManAmount',
         'NetAmount',
         'CashTendered',
         'Balance',
         'PerformedOn',
         'UserID',
         'UserName',
         'CompID',
         'CompName',
         'IsDeleted',
         'DelUserID',
         'DelUserName',
         'DelCompID',
         'DelCompName',
         'IsActive',
         'DisRate',
         'DisAmount',
         'VatRate',
         'VatAmount',
         'StockRoomID',
         'SystemRefNo',
         'DueDate',
         'CSHPaidOn',
         'CHQPaidOn',
         'CCSPaidOn',
         'CREPaidOn',
         'MOP',
         'TranCode',
         'NameOf',
         'AdvanceAmount',
         'DueAmount',
         'RefundedAmount',
         'IsPaused',
         'WaiterID',
         'TableID',
         'IsSent',
         'IsPreparing',
         'IsReady',
         'IsDelivered',
         'MaxGuest',
        ];
}
