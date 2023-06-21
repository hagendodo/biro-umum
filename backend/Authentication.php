<?php

include_once 'Connection.php';

class Authentication extends Session
{
    public function login(User $user)
    {
        $query = "SELECT * FROM users WHERE username='$user->username' AND password='$user->password'";
        $users_query_result = mysqli_query(Connection::getConnection(),$query);
        if(mysqli_num_rows($users_query_result) >= 1){
            $user = mysqli_fetch_assoc($users_query_result);
            $session = new Session();

            $session->id = $user['id'];
            $session->username = $user['username'];
            $session->role = $user['role'];
            $session->divisi = $user['divisi'];
            $session->logged = true;

            $session->setSession($session);

            header('Location: ../monitoring/index.php');
        }else{
            echo '<script>alert("Username atau Password Salah")</script>';
        }
    }

    public function register(User $user)
    {
        $query = "INSERT INTO users VALUES('', '$user->nama', '$user->username','$user->role', '$user->divisi', '$user->password')";
        mysqli_query(Connection::getConnection(),$query);
        header('Location: login.php');
    }

    public function roleCheck($role): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if($_SESSION['role'] == $role){
            return true;
        }
        return false;
    }
}