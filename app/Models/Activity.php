<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property array|null $description
 * @property string $photo_preview
 * @property string $photo
 * @property string $icon
 * @property int|null $admin_id
 * @property string|null $slug
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Property> $properties
 * @property-read int|null $properties_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Slider> $sliders
 * @property-read int|null $sliders_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ActivityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Activity findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity wherePhotoPreview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity withoutTrashed()
 * @property string $photo_round
 * @method static \Illuminate\Database\Eloquent\Builder|Activity wherePhotoRound($value)
 * @mixin \Eloquent
 */
class Activity extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $guarded = [];

    protected $casts = [
        'description' => 'json',
    ];

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class)->withPivot('value')->withTimestamps();
    }
    public function sliders(): HasMany
    {
        return $this->hasMany(Slider::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
