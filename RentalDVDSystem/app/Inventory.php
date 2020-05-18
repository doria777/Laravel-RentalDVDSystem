<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';

    protected $primaryKey = 'inventory_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
