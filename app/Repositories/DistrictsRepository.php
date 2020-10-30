<?php

namespace App\Repositories;

use App\Models\Districts;
use App\Repositories\BaseRepository;

/**
 * Class DistrictsRepository
 * @package App\Repositories
 * @version October 30, 2020, 3:29 pm UTC
*/

class DistrictsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'division_id',
        'name',
        'bn_name',
        'lat',
        'lon',
        'website'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Districts::class;
    }
}
