<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensiveType extends Model
{
    use HasFactory;

    protected $table = 'expensive_type';

    protected $primaryKey = 'extid';

    protected $fillable = ['extdescription'];
}
