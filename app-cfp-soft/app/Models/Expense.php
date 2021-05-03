<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'expense';

    protected $primaryKey = 'expid';

    protected $fillable = ['expdate', 'expvalue'];

    public function expensiveType() {
        return $this->belongsToMany(ExpensiveType::class, 'expensive_type');
    }
}
