<?php
class Login extends Model
{
    function showLoginForm($data)
    {
        return $this->db->get_where('users',$data)->row();
    }
}
?>