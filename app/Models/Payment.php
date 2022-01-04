<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table="payment";

    /**
     * Get all of the comments for the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Ve()
    {
        return $this->hasMany(Ve::class, 'ID_Ve', 'ID');
    }
}
