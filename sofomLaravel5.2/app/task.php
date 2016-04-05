<?php

namespace cinema;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //
	protected $fillable = [
	'name'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
