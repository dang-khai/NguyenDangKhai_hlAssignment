<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;
    protected $table = 'vote';
    protected $fillable = ['content_id', 'vote'];

    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
}
