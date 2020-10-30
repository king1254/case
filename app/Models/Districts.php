<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Districts
 * @package App\Models
 * @version October 30, 2020, 3:29 pm UTC
 *
 * @property \App\Models\Division $division
 * @property \Illuminate\Database\Eloquent\Collection $clients
 * @property integer $division_id
 * @property string $name
 * @property string $bn_name
 * @property number $lat
 * @property number $lon
 * @property string $website
 */
class Districts extends Model
{
  

    public $table = 'districts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'division_id',
        'name',
        'bn_name',
        'lat',
        'lon',
        'website'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'division_id' => 'integer',
        'name' => 'string',
        'bn_name' => 'string',
        'lat' => 'float',
        'lon' => 'float',
        'website' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'division_id' => 'nullable|integer',
        'name' => 'nullable|string|max:255',
        'bn_name' => 'nullable|string|max:255',
        'lat' => 'nullable|numeric',
        'lon' => 'nullable|numeric',
        'website' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function division()
    {
        return $this->belongsTo(\App\Models\Division::class, 'division_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clients()
    {
        return $this->hasMany(\App\Models\Client::class, 'district_id');
    }
}
