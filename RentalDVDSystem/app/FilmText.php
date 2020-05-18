<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmText extends Model
{
    protected $table = 'film_text';

    protected $primaryKey = 'film_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
