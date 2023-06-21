<?php

include_once 'Connection.php';

class Feedback{
    public $id;
    public $userId;
    public $rating;
    public $pesan;

    public function __construct($userId = null, $rating = null, $pesan = null)
    {
        $this->userId = $userId;
        $this->rating = $rating;
        $this->pesan = $pesan;
    }


    public function getAll() : array
    {
        $feedbacks = array();
        $query = "SELECT * FROM feedbacks JOIN users ON users_id = users.id";
        $feedbacks_query_result = mysqli_query(Connection::getConnection(),$query);
        while($feedback = mysqli_fetch_assoc($feedbacks_query_result)){
            $feedbacks[] = $feedback;
        }

        return $feedbacks;
    }

    public function create(Feedback $feedback) : void
    {
        $query = "INSERT INTO feedbacks VALUES('', '$feedback->userId', '$feedback->rating', '$feedback->pesan')";
        mysqli_query(Connection::getConnection(),$query);

        echo "<script>alert('Berhasil Mengirim Kritik dan Saran')</script>";
    }
}