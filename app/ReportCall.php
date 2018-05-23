<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportCall extends Model
{
    protected $table = "report_calls";
    protected $nullable = ['months','presentCall','handledCall','abandonedCall'];
}
