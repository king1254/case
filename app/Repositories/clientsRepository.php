<?php

namespace App\Repositories;

use App\Models\clients;
use App\Repositories\BaseRepository;

/**
 * Class clientsRepository
 * @package App\Repositories
 * @version October 30, 2020, 3:52 pm UTC
*/

class clientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return clients::class;
    }
}
