<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Works extends Model
{
    protected $table = 'work_with_us';

    protected $fillable = [
        'name',
        'working_at_moment',
        'if_yes_working_at_moment',
        'position',
        'pj',
        'salary',
        'email',
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
