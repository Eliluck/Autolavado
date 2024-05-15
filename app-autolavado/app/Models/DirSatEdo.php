<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class DirSatEdo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dir_sat_edo';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'EdoCod';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Pais',
        'EdoCod',
        'EdoNom',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'Pais' => 'string',
        'EdoCod' => 'string',
        'EdoNom' => 'string',
    ];
    /**
     * Log retrieval of state by code.
     *
     * @param string $code
     * @return void
     */
    public static function logRetrievalByCode($code)
    {
        Log::info("Retrieved state by code: EdoCod=$code");
    }
}
