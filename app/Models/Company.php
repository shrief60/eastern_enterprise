<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo', 'description', 'address', 'owner_id', 'symbol'];

    public function getLogoAttribute($value)
    {
        if( in_array($this->symbol, ['AAPL', 'IBM', 'MSFT']))
            return $value;
        else
            return 'storage/' . $value;
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
