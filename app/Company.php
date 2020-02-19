<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'db_name', 'name', 'address', 'contact_no', 'created_at', 'updated_at'
    ];

    public function users()
    {
        return $this->hasMany('App\Company');
    }
}
