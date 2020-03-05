<?php

namespace App\Repositories;

use App\Models\Placements;
use App\Repositories\BaseRepository;

/**
 * Class PlacementsRepository
 * @package App\Repositories
 * @version March 4, 2020, 2:33 am UTC
*/

class PlacementsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'company_id',
        'university_id',
        'work_area',
        'start_date',
        'end_date',
        'number_of_days'
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
        return Placements::class;
    }
}
