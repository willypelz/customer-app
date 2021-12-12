<?php
/***********************************************
 ** File : Customer Model file
 ** Date: 9th June 2020  *********************
 ** Customer Model file
 ** Author: Asefon pelumi M. ******************
 ** Senior Software Developer ******************
 * Email: pelumiasefon@gmail.com  ***************
 * ***********************************************/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'gender', 'country', 'company', 'city', 'title', 'longitude', 'latitude'
    ];

    protected $dates = ['deleted_at'];

    public static $searchable_fields = [
        'first_name', 'last_name', 'email', 'last_name'
    ];

}
