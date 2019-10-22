<?php

namespace Xzxzyzyz\LaravelNova\StatusLabelField;

use Illuminate\Support\Arr;
use Laravel\Nova\Fields\Select;

class StatusLabel extends Select
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'laravel-nova-status-label-field';

    /**
     * @param mixed $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function infoValue($value)
    {
        return $this->withMeta([
            'info' => Arr::wrap($value)
        ]);
    }

    /**
     * @param string $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function infoStyle($value)
    {
        return $this->withMeta([
            'infoStyle' => $value
        ]);
    }

    /**
     * @param mixed $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function successValue($value)
    {
        return $this->withMeta([
            'success' => Arr::wrap($value)
        ]);
    }

    /**
     * @param string $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function successStyle($value)
    {
        return $this->withMeta([
            'successStyle' => $value
        ]);
    }

    /**
     * @param mixed $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function warningValue($value)
    {
        return $this->withMeta([
            'warning' => Arr::wrap($value)
        ]);
    }

    /**
     * @param string $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function warningStyle($value)
    {
        return $this->withMeta([
            'warningStyle' => $value
        ]);
    }

    /**
     * @param mixed $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function dangerValue($value)
    {
        return $this->withMeta([
            'danger' => Arr::wrap($value)
        ]);
    }

    /**
     * @param string $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function dangerStyle($value)
    {
        return $this->withMeta([
            'dangerStyle' => $value
        ]);
    }

    /**
     * @param string $value
     * @return \Xzxzyzyz\LaravelNova\StatusLabelField\StatusLabel
     */
    public function disableStyle($value)
    {
        return $this->withMeta([
            'disableStyle' => $value
        ]);
    }
}
