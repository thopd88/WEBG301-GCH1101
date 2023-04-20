<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
        'BirthDate',
        'Image',
        'IsYoungDriver',
    ];
    public function Sales(): HasMany
    {
        return $this->hasMany(Sales::class);
    }
}
