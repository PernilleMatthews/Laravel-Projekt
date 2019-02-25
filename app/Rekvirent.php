<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekvirent extends Model
{
    protected $table = 'rekvirent';

    protected $guarded = [] ;
    /* OPPOSITE OF FILLABLE! DO NOT USE request()->all() in controllers!! Will make your database insecure */

    /* protected $fillabe = [
          'title',
          'description'
      ];*/
}
