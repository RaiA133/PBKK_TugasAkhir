<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Register extends Model

{
    function showregisterForm($data)
    {
        return $this->db->get_where('users',$data)->row();
    }

    public static function tambah($data)
    {
    $user = User::create([
        'nama' => $data['nama'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
    ]);

    return $user;
    }
}
?>