<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


/**
 * App\Identity
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nameable_type
 * @property int $nameable_id
 * @property string $name
 * @property-read \App\Identity $nameable
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity whereNameableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity whereNameableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Identity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Identity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @return MorphTo
     */
    public function nameable (): MorphTo
    {
        return $this->morphTo();
    }
}
