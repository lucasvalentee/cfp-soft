<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $table = 'revenue';

    protected $primaryKey = 'renid';

    protected $fillable = ['rendate', 'renvalue'];

    public function revenueType() {
        return $this->belongsToMany(RevenueType::class, 'revenue_type');
    }
}
