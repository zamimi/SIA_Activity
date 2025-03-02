<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
        class User extends Model{
        protected $table = 'customer_t';
        // column sa table
        protected $fillable = [
        'CustomerID', 'CustomerName', 'CustomerAddress', 'CustomerCity', 'CustomerState', 'CustomerPostalCode'
        ];
    }