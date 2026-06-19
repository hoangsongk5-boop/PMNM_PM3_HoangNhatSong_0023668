<?php
class auth extends Controller {
    protected $users = [
        'song' => ['password' => '123456'],
    ];

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (isset($this->users[$username]) && $this->users[$username]['password'] === $password) {
                $_SESSION['username'] = $username;
                header('Location: /qlsv/public/home/index');
                exit();
            } else {
                echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng');history.back();</script>";
            }
        } else {
            $this->view('home/login');
        }
    }

    public function logout() {
        session_destroy();
       header('Location: /qlsv/public/auth/login');
        exit();
    }
}