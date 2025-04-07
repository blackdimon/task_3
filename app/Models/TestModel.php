<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $table = 'test';
    protected $connection = 'mysql2';
    protected $primaryKey = 'test_id';
    public $timestamps = true;
    public $incrementing = 'true';
    protected $attributes = [
        'test_attribute1',
        'test_attribute2',
        'test_attribute3',
    ];
    //
}
