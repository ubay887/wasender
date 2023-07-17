<?php

namespace App\Autoload;

use Illuminate\Support\Str;

trait HasUid
{
    /**
     * Override the boot function from Laravel so that
     * we give the model a new UUID when we create it.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    /**
     * Override the getIncrementing() function to return false to tell
     * Laravel that the identifier does not auto increment (it's a string).
     */
    public function getIncrementing(): bool
    {
        return false;
    }

    /**
     * Tell laravel that the key type is a string, not an integer.
     */
    public function getKeyType(): string
    {
        return 'string';
    }
}
