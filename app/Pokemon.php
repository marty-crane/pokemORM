<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pokemon extends Model
{
    protected $table = 'pokemon';

    protected $fillable = [
        'species_id',
        'trainer_id',
        'level',
    ];

    public function species(): BelongsTo
    {
        return $this->belongsTo(Species::class, 'species_id', 'id');
    }
//
//    public function trainer(): BelongsTo
//    {
//        return $this->belongsTo(Trainer::class, 'trainer', 'id');
//    }
}
