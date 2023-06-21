<?php include "../auth/loginCheck.php"; ?>
<?php

$PAGE = 'feedback';

include_once "../../backend/Feedback.php";


?>
<?php include('../layouts/head.php'); ?>
<?php include('../layouts/menu.php'); ?>
    <div class="col-lg-10 col-md-9 col-sm-6">
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 px-5 pt-5 pb-3">
                <h1 style="color: #73a9ad;">Kritik & Saran</h1>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 pt-5 pl-2 pr-5 pb-3">
                <a class="btn btn-info w-100 text-black" style="background-color: #f5f0bb; border-color: #f5f0bb;"><?php include('../layouts/profile.php'); ?></a>
            </div>
        </div>
        <div class="row px-5 pb-5 pt-3">
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Pesan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        $feedbackObj = new Feedback();
                        $feedbacks = $feedbackObj->getAll();
                        $no = 1;

                        foreach ($feedbacks as $feedback){
                        ?>
                        <th scope="row"><?php echo $no++; ?></th>
                        <td class="text-left"><?php echo $feedback['nama']; ?></td>
                        <td><?php
                            for($i = 0; $i < $feedback['rating']; $i++){
                                echo '<i class="fas fa-star"></i>';
                            }
                        ?></td>
                        <td class="text-left"><?php echo $feedback['pesan']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include('../layouts/bottom.php'); ?>