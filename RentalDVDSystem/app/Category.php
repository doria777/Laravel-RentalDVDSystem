<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $primaryKey = 'category_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
