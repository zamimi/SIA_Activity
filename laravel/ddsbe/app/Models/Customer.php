<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
        class Customer extends Model{
        protected $table = 'customer_t';
        // column sa table
        protected $fillable = [
        'CustomerID', 'CustomerName', 'CustomerAddress', 'CustomerCity', 'CustomerState', 'CustomerPostalCode'
        ];
    }