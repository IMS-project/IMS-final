<?php

namespace App\Repositories;

use App\Models\Advisor;
use App\Repositories\BaseRepository;

/**
 * Class AdvisorRepository
 * @package App\Repositories
 * @version March 4, 2020, 2:28 am UTC
*/

class AdvisorRepository extends BaseRepository
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
        return Advisor::class;
    }
}
