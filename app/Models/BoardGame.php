<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $photo
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame query()
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BoardGame withoutTrashed()
 * @mixin \Eloquent
 */
class BoardGame extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'photo',
    ];
}
