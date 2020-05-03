<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{
    protected $fillable = ['order'];
    protected $casts = ['created_at' => 'datetime:Y-m-d'];

    public function setOrderAttribute($value)
    {
        $this->attributes['order'] = json_encode($value);
    }

    public function getOrderAttribute($value)
    {
        return json_decode($value);
    }
    
    public function getCreatedAtAttribute($value)
    {
        return (new Carbon($value))->format('d-m-Y');
    }

}
