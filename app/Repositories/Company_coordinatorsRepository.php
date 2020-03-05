<?php

namespace App\Repositories;

use App\Models\Company_coordinators;
use App\Repositories\BaseRepository;

/**
 * Class Company_coordinatorsRepository
 * @package App\Repositories
 * @version March 4, 2020, 2:30 am UTC
*/

class Company_coordinatorsRepository extends BaseRepository
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
        return Company_coordinators::class;
    }
}
