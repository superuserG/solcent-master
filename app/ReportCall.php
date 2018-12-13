<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportCall extends Model
{
    protected $table = "report_calls";
    protected $fillable = ['Team','months','year','presentedCall','handledCall','abandonedCall'];
}
