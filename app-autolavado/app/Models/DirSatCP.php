<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class DirSatCP extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dir_Sat_CP';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false; // No hay campos de timestamps en la tabla
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'PaisCod', 'EdoCod', 'MunCod', 'LocCod',
    ];
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false; // No hay autoincremento en los IDs
    /**
     * Retrieve the postal code associated with the given location code.
     *
     * @param  string  $locCod
     * @return \App\Models\DirSatCP|null
     */
    public static function getByLocationCode($locCod)
    {
        // Retrieve the postal code associated with the given location code
        $postalCode = static::where('LocCod', $locCod)->first();
        // Log the retrieval of postal code for the given location code
        Log::info("Retrieved postal code for location code: $locCod");
        return $postalCode;
    }
}
