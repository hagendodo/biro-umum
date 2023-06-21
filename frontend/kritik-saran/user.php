<?php

include_once "../../backend/Feedback.php";


if(isset($_POST['tambah'])){
    $feedback = new Feedback(
        $_POST['userId'],
        $_POST['rating'],
        $_POST['pesan']
    );
    $feedback->create($feedback);
}
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
                <form method="POST" action="">
                    <input type="number" name="userId" value="<?php $_SESSION['id'] ?>" hidden="true">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="star1" value="1">
                        <label class="form-check-label" for="star1"><i class="fas fa-star"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="star2" value="2">
                        <label class="form-check-label" for="star2"><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="star3" value="3">
                        <label class="form-check-label" for="star3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="star4" value="4">
                        <label class="form-check-label" for="star4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rating" id="star5" value="5">
                        <label class="form-check-label" for="star5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                    </div>
                    <div class="form-group mb-2">
                        <textarea name="pesan" class="form-control" placeholder="Pesan" rows="8"></textarea>
                    </div>
                    <button name="tambah" type="submit" class="btn text-white" style="background-color: #73a9ad; border-color: #73a9ad; float:right;">Kirim</button>
                </form>
            </div>
        </div>
    </div>
<?php include('../layouts/bottom.php'); ?>