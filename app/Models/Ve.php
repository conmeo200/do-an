<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;
    protected $table="ve";

    /**
     * Get all of the comments for the Ve
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Customer()
    {
        return $this->hasMany(Customer::class, 'ID_CTM', 'ID');
    }
    public function Phim()
    {
        return $this->hasMany(Phim::class, 'ID_PHIM', 'ID');
    }
    public function Type_Ve()
    {
        return $this->hasMany(Type_Ve::class, 'ID_Loai', 'ID');
    }
    public function Payment()
    {
        return $this->beLongsTo(Payment::class, 'ID_Ve', 'ID');
    }
}
