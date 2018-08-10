<?php

/*
 * This file is part of ibrand/favorite.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Favorite;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
	protected $guarded = ['id'];

	/**
	 * Address constructor.
	 *
	 * @param array $attributes
	 */
	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);

		$prefix = config('ibrand.app.database.prefix', 'ibrand_');

		$this->setTable($prefix . 'favorite');
	}

	public function favoriteable()
	{
		return $this->morphTo();
	}
}
