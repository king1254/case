<?php

namespace App\Repositories;

use App\Models\divisions;
use App\Repositories\BaseRepository;

/**
 * Class divisionsRepository
 * @package App\Repositories
 * @version October 30, 2020, 3:18 pm UTC
*/

class divisionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'bn_name'
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
        return divisions::class;
    }
}
