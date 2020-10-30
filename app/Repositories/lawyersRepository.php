<?php

namespace App\Repositories;

use App\Models\lawyers;
use App\Repositories\BaseRepository;

/**
 * Class lawyersRepository
 * @package App\Repositories
 * @version October 30, 2020, 3:58 pm UTC
*/

class lawyersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mobile_no',
        'description'
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
        return lawyers::class;
    }
}
