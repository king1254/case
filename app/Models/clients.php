<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients
 * @package App\Models
 * @version October 30, 2020, 3:52 pm UTC
 *
 * @property \App\Models\District $district
 * @property \App\Models\Division $division
 * @property string $name
 * @property integer $division_id
 * @property integer $district_id
 * @property string $mobile
 * @property string $email
 * @property string $gender
 * @property string $address
 * @property string $description
 * @property string $file
 * @property string $date
 */
class clients extends Model
{

    public $table = 'clients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'division_id',
        'district_id',
        'mobile',
        'email',
        'gender',
        'address',
        'description',
        'file',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'division_id' => 'integer',
        'district_id' => 'integer',
        'mobile' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'address' => 'string',
        'description' => 'string',
        'file' => 'string',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'division_id' => 'nullable|integer',
        'district_id' => 'nullable|integer',
        'mobile' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'gender' => 'nullable|string|max:15',
        'address' => 'nullable|string',
        'description' => 'nullable|string',
        'file' => 'nullable|string|max:255',
        'date' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function district()
    {
        return $this->belongsTo(\App\Models\District::class, 'district_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function division()
    {
        return $this->belongsTo(\App\Models\Division::class, 'division_id');
    }
}
