<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dades_empleat extends Model
{
    //
    protected $table = 'dades_empleats';

    protected $fillable = [
       'codi_seg_social',
       'num_nomina',
       'IBAN',
       'especialitat',
       'carrec',
       'data_inici_contracte',
       'data_fi_contracte',
       'id_horari'
    ];
}
