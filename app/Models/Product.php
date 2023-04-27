<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\InvoicePaid;
class Product extends Model
{
    use HasFactory;
    protected $table="products";
    // protected $hidden = ['id'];
    protected $visible = ['id', 'created_at'];
    

}
