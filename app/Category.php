<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	//
	use Sluggable;

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable() {
		return [
			'slug' => [
				'source' => 'name',
			],
		];
	}
	protected $table = "categories";

	protected $fillable = ['name'];

	public function articles() {
		return $this->hasMany('App\Article');
	}

	public function scopeSearchCategory($query, $name) {
		return $query->where('name', '=', "$name");
	}
}
