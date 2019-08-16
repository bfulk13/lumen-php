<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['id', 'name', 'address', 'phone', 'career'];

    protected $hidden = ['created_at', 'updated_at'];

    // name of the relationship to the model
    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }
}