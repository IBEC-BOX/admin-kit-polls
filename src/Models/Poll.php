<?php

namespace AdminKit\Polls\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Polls\Database\Factories\PollFactory;

class Poll extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_polls';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): PollFactory
    {
        return new PollFactory();
    }
}
