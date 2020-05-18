<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmActor extends Model
{
    protected $table = 'film_actor';

    protected $primaryKey = 'actor_id';

    const CREATED_AT = 'last_update';

    const UPDATED_AT = 'last_update';
}
