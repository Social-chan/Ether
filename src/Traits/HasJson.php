<?php

namespace Socialchan\Ether\Traits;

trait HasJson {
	/**
	 * Get data parsed to JSON
	 * 
	 * @param string $value
     * 
	 * @return string
	 */
	public function getDataAttribute($value)
	{
        if ($value) {
		    return json_decode($value);
        } else {
            return json_decode('{}');
        }
    }

	/**
     * Get a specific data property if hasData
     *
     * @param string $value
     * 
     * @return void
     */
    public function getData($value)
    {
        if ($this->hasData($value)) return $this->data->{$value};
    }

    /**
	 * Check if object data has specific property
	 * 
	 * @param string $value
	 * 
	 * @return string
	 */
	public function hasData($value)
	{
        if ($this->data) return property_exists($this->data, $value);
    }
}
