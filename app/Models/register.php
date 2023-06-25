<?php

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class User extends Model

{
    function showregisterForm($data)
    {
        return $this->db->get_where('users',$data)->row();
    }
}
?>