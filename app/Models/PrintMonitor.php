<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrintMonitor extends Model
{
    protected $fillable = ['shop_id', 'printer_name', 'document', 'pages', 'printed_at'];
}
