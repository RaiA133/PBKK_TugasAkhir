<?php 
class Login extends Controller
{
    function index()
    {
        $this->load->model('Login');
        $this->load->view('login');

        if($_POST)
        {
            $email = $this->input->post('email');
            $pass = $this->input->post('password');

            $users = $this->Login->ceklogin(['email' => $email]);
            //kalau usernya ada di data
            if($users)
            {
                if($users->password == md5($pass))
                {
                    $sessi = [
                        'email' => $users->email,
                        'level' => $users->level,
                        'id_user' => $users->id
                    ];
                    $this->session->set_userdata($sessi);
                    redirect(base_url().'home');
                }else{
                    echo "<script>alert('Password Tidak sesuai');</script>";
                }
            }else{
                echo "<script>alert('Email belum Terdaftar');</script>";
            }
        }
    }
    function keluar()
    {
        session_destroy();
        redirect('./');
    }
}
?>