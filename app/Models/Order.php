<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['category_name','product_title','product_description','product_price','customer_name','customer_email','customer_address','customer_description','company_name','company_email', 'company_address','company_description'];
}
