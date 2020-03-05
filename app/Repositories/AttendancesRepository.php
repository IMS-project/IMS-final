<?php

namespace App\Repositories;

use App\Models\Attendances;
use App\Repositories\BaseRepository;

/**
 * Class AttendancesRepository
 * @package App\Repositories
 * @version March 4, 2020, 11:45 pm UTC
*/

class AttendancesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'advisor_id',
        'supervisor_id',
        'date',
        'status'
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
        return Attendances::class;
    }
}
