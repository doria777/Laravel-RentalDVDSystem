<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $primaryKey = 'staff_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
