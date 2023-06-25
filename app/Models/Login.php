<?php
class Login extends Model
{
    function ceklogin($data)
    {
        return $this->db->get_where('users',$data)->row();
    }
}
?>