<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'Name',
        'BirthDate',
        'IsYoungDriver',
    ];
    public function Sales(): HasMany
    {
        return $this->hasMany(Sales::class, 'CustomerId', 'Id');
    }
}
