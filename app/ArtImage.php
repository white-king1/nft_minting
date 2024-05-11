<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArtImage extends Model
{
    public function upload(): BelongsTo
    {
        return $this->belongsTo(Upload::class,  'art_id', 'id');
    }


}
