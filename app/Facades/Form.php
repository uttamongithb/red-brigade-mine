<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string open(array $options = [])
 * @method static string model(mixed $model, array $options = [])
 * @method static string close()
 * @method static string file(string $name, array $options = [])
 * @method static string label(string $name, string|null $value = null, array $options = [])
 *
 * @see \App\Services\FormBuilder
 */
class Form extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form';
    }
}
