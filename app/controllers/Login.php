<?php 

class Login extends Controller
{
    public function index()
    {
        if(isset($_SESSION['user'])) header("location: ".BASEURL.'login/direct');
        $this->view('login');
    }

    public function auth()
    {
        if(isset($_POST['submit'])){
            $user = $this->model('m_user')->checkUser($_POST);
            if($user) {
                if($_POST['pass'] == $user['pass']){
                    session_unset();
                    $_SESSION["user"] = $user['user'];
                    $_SESSION["nama"] = $user['nama'];
                    $_SESSION["id"] = $user['id'];
                    $_SESSION["status"] = $user['status'];
                    $this->direct();
                } else echo 'pass salah';
            } else echo 'user salah';
        } else {
            header("location: ".BASEURL);
        }
    }

    public function direct()
    {
        if ($_SESSION['user'] == 'panitia') {
            $this->view('pilihan');
        } else {
            header("location: ".BASEURL.'vote');
        }
    }

    public function logout()
    {
        session_unset();
        header("location: ".BASEURL);
    }
}