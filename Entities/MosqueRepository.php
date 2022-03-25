<?php

namespace Modules\Mosque\Entities;

use Modules\Mosque\Entities\Mosque;
use Modules\Mosque\Entities\BaseRepository;

/**
 * Class MosqueRepository
 * @package App\Repositories
 * @version November 20, 2019, 1:40 am UTC
*/

class MosqueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'description',
        'address',
        'website',
        'prefectures',
        'city',
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
        return Mosque::class;
    }

    /**
     * Find model record for given id
     *
     * @param int $id
     * @param array $columns
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model|null
     */
    public function find($id, $columns = ['*'])
    {
        $query = $this->model->newQuery();

        return $query->findByHashid($id, $columns);
    }

    /**
     * Retrieve all records with given filter criteria
     *
     * @param array $search
     * @param int|null $skip
     * @param int|null $limit
     * @param array $columns
     * @param array $sort
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all($search = [], $skip = null, $limit = null, $columns = ['*'], $sort = array(['image', 'desc'],['id','desc']))
    {
        $query = $this->allQuery($search, $skip, $limit, $sort);

        return $query->with('event')->with('event.translations')->get($columns);

    }
}
