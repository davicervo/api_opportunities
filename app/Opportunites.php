<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opportunites extends Model
{
    protected $table = "opportunities";
    
    protected $fillable = [
        'opportunity',
        'contacted_by',
        'description',
        'city',
        'contraction_type',
        'salary',
        'status',
        'contacted',
    ];

    protected $dates = [
        'contacted',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'contacted' => 'datetime:d/m/Y H:i:s',
        'created_at' => 'datetime:d/m/Y H:i:s',
        'updated_at' => 'datetime:d/m/Y H:i:s',
        'deleted_at' => 'datetime:d/m/Y H:i:s',
    ];

    use SoftDeletes;



    
}
