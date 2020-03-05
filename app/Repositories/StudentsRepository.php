<?php

namespace App\Repositories;

use App\Models\Students;
use App\Repositories\BaseRepository;

/**
 * Class StudentsRepository
 * @package App\Repositories
 * @version March 4, 2020, 2:00 am UTC
*/

class StudentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'university_id',
        'company_id',
        'advisor_id',
        'supervisor_id',
        'year',
        'department_id',
        'grade'
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
        return Students::class;
    }
}
