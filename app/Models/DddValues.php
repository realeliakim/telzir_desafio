<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DddValues extends Model {

    use HasFactory;

    protected $table = 'ddd_values';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ddd_from',
        'ddd_to',
        'value_min'
    ];
}
