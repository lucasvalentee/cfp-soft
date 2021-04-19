<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueType extends Model
{
    use HasFactory;

    protected $table = 'revenue_type';

    protected $primaryKey = 'revid';

    protected $fillable = ['revdescription'];
}
