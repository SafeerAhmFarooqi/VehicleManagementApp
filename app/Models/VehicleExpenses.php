<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleExpenses extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at','date'];

    protected $fillable = [ 'rentalcompany_id','vehicle_id','date','expensehead','rate','quantity','amount','deleted_at'];
}