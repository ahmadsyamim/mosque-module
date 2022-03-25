<?php

namespace Modules\Mosque\Entities;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;
use Mtvs\EloquentHashids\HasHashid;
use Mtvs\EloquentHashids\HashidRouting;

/**
 * @SWG\Definition(
 *      definition="Event",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="image",
 *          description="image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="date_from",
 *          description="date_from",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="date_to",
 *          description="date_to",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="mosque_id",
 *          description="mosque_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Event extends Model
{
    use SoftDeletes;
    use HasHashid, HashidRouting;

    public $table = 'events';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $appends = ['image_url'];
    protected $dates = ['deleted_at'];

    use Translatable;
    protected $translatable = ['title', 'description'];

    public $fillable = [
        'title',
        'description',
        'image',
        'date_from',
        'date_to',
        'user_id',
        'mosque_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'image' => 'string',
        'date_from' => 'datetime',
        'date_to' => 'datetime',
        'user_id' => 'integer',
        'mosque_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function mosque()
    {
        return $this->belongsTo(\Modules\Mosque\Entities\Mosque::class, 'mosque_id');
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        } else {
            return asset('images/placeholder.png');
        }
    }
}
