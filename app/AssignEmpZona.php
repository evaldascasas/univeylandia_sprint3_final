<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssigEmpZona extends Model
{
  protected $table = 'empleat_zona';

  protected $fillable = [
      'id_assignacio',
      'id_zona',
      'id_empleat',
      'data_inici',
      'data_fi'
  ];

}
