<?php

namespace App\Repositories;

use App\Models\University;
use App\Repositories\BaseRepository;

/**
 * Class UniversityRepository
 * @package App\Repositories
 * @version March 11, 2020, 12:29 am UTC
*/

class UniversityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return University::class;
    }
}
