<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'Make',
        'Model',
        'TravelledDistance',
    ];

    public function Parts(): BelongsToMany
    {
        return $this->belongsToMany(Parts::class, 'car_part', 'CarId', 'PartId');
    }
}
