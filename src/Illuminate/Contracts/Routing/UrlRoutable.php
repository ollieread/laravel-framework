<?php

namespace Illuminate\Contracts\Routing;

interface UrlRoutable
{
    /**
     * Get the value of the object's route key.
     *
     * @return mixed
     */
    public function getRouteKey();

    /**
     * Get the route key for the object.
     *
     * @return string
     */
    public function getRouteKeyName();

    /**
     * Retrieve the object for a bound value.
     *
     * @param  mixed  $value
     * @param  string|null  $field
     * @return \Illuminate\Database\Eloquent\Model|object|null
     */
    public function resolveRouteBinding($value, $field = null);

    /**
     * Retrieve the child object for a bound value.
     *
     * @param  string  $childType
     * @param  mixed  $value
     * @param  string|null  $field
     * @return \Illuminate\Database\Eloquent\Model|object|null
     */
    public function resolveChildRouteBinding($childType, $value, $field);
}
