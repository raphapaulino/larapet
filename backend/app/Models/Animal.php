<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class Animal extends Model
{
    use HasUuid, Sluggable;

    protected $fillable = [
        'company_id',
        'photo',
        'name',
        'born_date',
        'slug',
        'specie',
        'color',
        'gender',
        'size',
        'coat',
        'breed',
        'age',
        'age_months',
        'age_group',
        'is_neutered',
        'is_active',
    ];

    // from slugglabe package
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
