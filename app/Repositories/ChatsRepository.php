<?php

namespace App\Repositories;

use App\Models\Chats;
use App\Repositories\BaseRepository;

/**
 * Class ChatsRepository
 * @package App\Repositories
 * @version March 3, 2020, 11:49 pm UTC
*/

class ChatsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sender_id',
        'reciever_id',
        'body',
        'date'
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
        return Chats::class;
    }
}
