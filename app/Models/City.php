<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';

    protected $fillable = [
        'id',
        'name'
    ];

    public function customer(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

}
