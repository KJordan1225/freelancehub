<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description', 
        'user_id',       
    ];

    public $timestamps = true;

    /**
     * Get the [many] users this [one] role has.
     */
    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }
}
