<?php

namespace App\Repositories;

use App\Models\University_coordinators;
use App\Repositories\BaseRepository;

/**
 * Class University_coordinatorsRepository
 * @package App\Repositories
 * @version March 4, 2020, 2:29 am UTC
*/

class University_coordinatorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'university_id'
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
        return University_coordinators::class;
    }
}
