<?php

class Connection
{
    public static function getConnection()
    {
        $koneksi = mysqli_connect("localhost","root","","biro_umum");

        if (mysqli_connect_errno()){
            error_log(mysqli_connect_error());
            return null;
        }

        return $koneksi;
    }
}