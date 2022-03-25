<?php

namespace Modules\Mosque\Entities;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Country",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="iso",
 *          description="iso",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nicename",
 *          description="nicename",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="iso3",
 *          description="iso3",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="numcode",
 *          description="numcode",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="phonecode",
 *          description="phonecode",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Country extends Model
{
    use SoftDeletes;

    public $table = 'countries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $timestamps = false;


    protected $dates = ['deleted_at'];



    public $fillable = [
        'iso',
        'name',
        'nicename',
        'iso3',
        'numcode',
        'phonecode'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'iso' => 'string',
        'name' => 'string',
        'nicename' => 'string',
        'iso3' => 'string',
        'numcode' => 'integer',
        'phonecode' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'iso' => 'required',
        'name' => 'required',
        'nicename' => 'required',
        'phonecode' => 'required'
    ];

    
}
