<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'users'; // Ganti 'users' dengan nama tabel pengguna yang sesuai dengan aplikasi Anda

    public function showLoginForm($data)
    {
        return $this->where($data)->first();
    }
}
