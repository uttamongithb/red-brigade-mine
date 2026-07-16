<?php

namespace App\Services;

class FormBuilder
{
    protected $model;

    /**
     * Open a new HTML form.
     *
     * @param  array  $options
     * @return string
     */
    public function open(array $options = [])
    {
        $method = strtoupper($options['method'] ?? 'POST');
        $attributes = [];

        // Resolve action URL
        $action = '';
        if (isset($options['action'])) {
            if (is_array($options['action'])) {
                // If action helper array is passed (e.g. [Controller::class, 'method', $id])
                if (count($options['action']) >= 2 && is_string($options['action'][1]) && class_exists($options['action'][0])) {
                    $callable = [$options['action'][0], $options['action'][1]];
                    $args = array_slice($options['action'], 2);
                    $action = action($callable, $args);
                } else {
                    $action = action($options['action'][0], array_slice($options['action'], 1));
                }
            } else {
                if (is_string($options['action']) && str_contains($options['action'], '@')) {
                    $action = action($options['action']);
                } else {
                    $action = $options['action'];
                }
            }
        } elseif (isset($options['url'])) {
            $action = url($options['url']);
        } elseif (isset($options['route'])) {
            if (is_array($options['route'])) {
                $action = route($options['route'][0], array_slice($options['route'], 1));
            } else {
                $action = route($options['route']);
            }
        }

        $attributes['action'] = $action;
        $attributes['method'] = $method === 'GET' ? 'GET' : 'POST';

        if (isset($options['files']) && $options['files']) {
            $attributes['enctype'] = 'multipart/form-data';
        }

        // Merge any other attributes
        foreach ($options as $key => $value) {
            if (!in_array($key, ['method', 'action', 'url', 'route', 'files', 'model'])) {
                if (is_numeric($key)) {
                    $attributes[$value] = $value;
                } else {
                    $attributes[$key] = $value;
                }
            }
        }

        $html = '<form';
        foreach ($attributes as $key => $value) {
            $html .= ' ' . $key . '="' . e($value) . '"';
        }
        $html .= '>';

        if ($method !== 'GET' && $method !== 'POST') {
            $html .= "\n" . '<input type="hidden" name="_method" value="' . $method . '">';
        }

        return $html;
    }

    /**
     * Create a form bound to a model.
     *
     * @param  mixed  $model
     * @param  array  $options
     * @return string
     */
    public function model($model, array $options = [])
    {
        $this->model = $model;
        return $this->open($options);
    }

    /**
     * Close the current form.
     *
     * @return string
     */
    public function close()
    {
        $this->model = null;
        return '</form>';
    }

    /**
     * Generate a file input element.
     *
     * @param  string  $name
     * @param  array  $options
     * @return string
     */
    public function file($name, array $options = [])
    {
        $attributes = ['type' => 'file', 'name' => $name];

        foreach ($options as $key => $value) {
            if (is_numeric($key)) {
                $attributes[$value] = $value;
            } else {
                $attributes[$key] = $value;
            }
        }

        $html = '<input';
        foreach ($attributes as $key => $value) {
            $html .= ' ' . $key . '="' . e($value) . '"';
        }
        $html .= '>';

        return $html;
    }

    /**
     * Generate a label element.
     *
     * @param  string  $name
     * @param  string|null  $value
     * @param  array  $options
     * @return string
     */
    public function label($name, $value = null, array $options = [])
    {
        $attributes = ['for' => $name];

        foreach ($options as $key => $valueOpt) {
            $attributes[$key] = $valueOpt;
        }

        $html = '<label';
        foreach ($attributes as $key => $valueOpt) {
            $html .= ' ' . $key . '="' . e($valueOpt) . '"';
        }
        $html .= '>' . e($value ?? $name) . '</label>';

        return $html;
    }
}
