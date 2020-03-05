<?php

namespace App\Repositories;

use App\Models\Reports;
use App\Repositories\BaseRepository;

/**
 * Class ReportsRepository
 * @package App\Repositories
 * @version March 4, 2020, 2:33 am UTC
*/

class ReportsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'advisor_id',
        'supervisor_id',
        'text',
        'evaluation',
        'attachment'
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
        return Reports::class;
    }
}
