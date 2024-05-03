<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class DirSatCol extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dir_Sat_Col';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ColCod';
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
        'ColCod', 'ColNom',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'ColNom' => 'string',
    ];
    /**
     * Retrieve all colonies associated with the given postal code.
     *
     * @param  string  $cp
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getByPostalCode($cp)
    {
        // Retrieve all colonies associated with the given postal code
        $colonies = static::where('CP', $cp)->get();
        // Log the retrieval of colonies for the given postal code
        Log::info("Retrieved colonies for postal code: $cp");
        return $colonies;
    }
}
