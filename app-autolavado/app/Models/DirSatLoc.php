<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class DirSatLoc extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dir_sat_loc';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'LocCod';

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
        'EdoCod',
        'LocCod',
        'LocNom',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'EdoCod' => 'string',
        'LocCod' => 'string',
        'LocNom' => 'string',
    ];

    /**
     * Log the retrieval of location by location code.
     *
     * @param  string  $locationCode
     * @return \App\Models\DirSatLoc
     */
    public static function getByLocationCode($locationCode)
    {
        // Obtain the location record based on the location code provided
        $dirSatLoc = self::where('LocCod', $locationCode)->first();

        // Log the retrieval of location by location code
        Log::info("Retrieved location by location code: LocCod=$locationCode");

        return $dirSatLoc;
    }
}
