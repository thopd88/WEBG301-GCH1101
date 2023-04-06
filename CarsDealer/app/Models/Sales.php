<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sales extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'Discount',
        'CarId',
        'CustomerId',
    ];

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customers::class, 'CustomerId', 'Id');
    }

    public function Car(): BelongsTo
    {
        return $this->belongsTo(Cars::class, 'CarId', 'Id');
    }
}
