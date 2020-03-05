<?php

namespace App\Repositories;

use App\Models\Supervisors;
use App\Repositories\BaseRepository;

/**
 * Class SupervisorsRepository
 * @package App\Repositories
 * @version March 4, 2020, 2:28 am UTC
*/

class SupervisorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'company_id'
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
        return Supervisors::class;
    }
}
