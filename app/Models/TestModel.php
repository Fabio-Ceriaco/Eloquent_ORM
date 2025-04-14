<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    // define from each table is the model
    protected $table = 'products';

    // define primary key\

    protected $primaryKey = 'id';

    // if want change incrementing
    public $incrementing = false;

    // if wnat change key type
    protected $keyType = 'string';

    // if want change time stamps
    public $timestamps = false;

    protected $dateFormat = 'Y-m-d H:i:s';

    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_atualizacao';

    // if want apply to changes too differents connections
    protected $connection = 'mysql_new';
}
