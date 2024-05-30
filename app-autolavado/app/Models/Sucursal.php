<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'cdf_suc_web';

    protected $fillable = [
        'Sucursal', 'Calle', 'NumeroExterior', 'NumeroInterior', 'Colonia',
        'CP', 'Localidad', 'Municipio', 'Estado', 'Pais', 'Serie', 'Folio',
        'SerieTck', 'PreCte'
    ];
}
