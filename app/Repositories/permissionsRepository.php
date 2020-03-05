<?php

namespace App\Repositories;

use App\Models\permissions;
use App\Repositories\BaseRepository;

/**
 * Class permissionsRepository
 * @package App\Repositories
 * @version March 4, 2020, 3:03 am UTC
*/

class permissionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug'
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
        return permissions::class;
    }
}
