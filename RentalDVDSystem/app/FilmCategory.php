<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmCategory extends Model
{
    protected $table = 'film_category';

    protected $primaryKey = 'film_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
