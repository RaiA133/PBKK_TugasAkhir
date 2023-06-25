<?php
class register extends Model
{
    function showregisterForm($data)
    {
        return $this->db->get_where('users',$data)->row();
    }
}
?>