<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Ve extends Model
{
    use HasFactory;
    protected $table="type_ve";

    /**
     * Get the user that owns the Type_Ve
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Ve()
    {
        return $this->belongsTo(Ve::class, 'ID_Loai', 'ID');
        
    }
}
