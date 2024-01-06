<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addressable extends Model
{
    use HasFactory;

    protected $table = 'addressables';

    protected $fillable = [
        'address_id',
        'addressable_id',
        'addressable_type',
    ];

    public function address(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}
