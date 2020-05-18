<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';

    protected $primaryKey = 'language_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
