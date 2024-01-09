<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'logo',
        'description',
        'founded_at',
        'headquarters_address',
        'size_range',  //staff  size
    ];


    public function image(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value ? 'storage/company/'.$value : 'storage/company/'.'default.png',
            set: fn ($value) => $value,
        );
    }


    /**
     * The industries that belong to the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function industries(): BelongsToMany
    {
        return $this->belongsToMany(Industry::class, 'company_industry');
    }

    /**
     * The projects that belong to the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'company_project');
    }
}
