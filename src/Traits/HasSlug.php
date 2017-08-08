<?php

trait HasSlug
{
	/**
	 * Get slug if not get its ID
	 * 
	 * @param string $value
	 * 
	 * @return string|int
	 */
	public function getSlugAttribute($value)
	{
		if ($value) {
			return $value;
		} else {
			return $this->id;
		}
	}

	/**
	 * Set the slug attribute
	 *
	 * @param mixed $value
	 * 
	 * @return void
	 */
	public function setSlugAttribute($value)
	{
		$this->attributes['slug'] = str_slug($value, '-');
	}
}
