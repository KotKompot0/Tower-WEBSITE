<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

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
