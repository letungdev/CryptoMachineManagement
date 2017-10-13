<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'machine_name', 'machine_ipaddress',
    ];

	public function user()
	{
		return $this->belongTo(App\User::class);
	}
}
