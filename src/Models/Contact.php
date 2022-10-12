<?php
namespace Fhsinchy\Inspire\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email',
    ];

    /**
     * The attributes that are mass nullable.
     *
     * @var array
     */
    protected $nullable = [];
   
}
