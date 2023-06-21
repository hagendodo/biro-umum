<?php include "../auth/loginCheck.php"; ?>

<?php

$PAGE = 'monitor';

include_once "../../backend/Monitor.php";


if(isset($_POST['tambah'])){
    $monitor = new Monitor(
        $_POST['namaKegiatan'],
        $_POST['pj'],
        $_POST['status'],
        $_POST['deadline'],
        $_POST['deskripsi']
    );
    $monitor->create($monitor);
}else if(isset($_POST['edit'])){
    $monitor = new Monitor(
        $_POST['namaKegiatan'],
        $_POST['pj'],
        $_POST['status'],
        $_POST['deadline'],
        $_POST['deskripsi']
    );
    $monitor->update($monitor, $_POST['id']);
}else if(isset($_POST['delete'])){
    $monitor = new Monitor();
    $monitor->delete($_POST['id']);
}
?>
<?php include('../layouts/head.php'); ?>
<?php include('../layouts/menu.php'); ?>
    <div class="col-lg-10 col-md-9 col-sm-6">
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 px-5 pt-5 pb-3">
                <h1 style="color: #73a9ad;">Monitoring</h1>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 pt-5 pl-2 pr-5 pb-3">
                <a class="btn btn-info w-100 text-black" style="background-color: #f5f0bb; border-color: #f5f0bb;"><?php include('../layouts/profile.php'); ?></a>
            </div>
        </div>
        <div class="row px-5 pb-5 pt-3">
            <div class="col-12">
                <div class="row mb-3 d-flex justify-content-end">
                    <div class="col-1">
                        <button type="button" class="btn btn-sm btn-info w-100 text-white" data-bs-toggle="modal" data-bs-target="#modalTambah" style="background-color: #73a9ad; border-color: #73a9ad;"><i class="fas fa-plus"></i></button>
                        <div class="modal" id="modalTambah">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="form-group mb-2">
                                                <label for="namaKegiatan">Nama Kegiatan</label>
                                                <input name="namaKegiatan" type="text" class="form-control" id="namaKegiatan" placeholder="Nama Kegiatan">
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="pj">Penanggung Jawab</label>
                                                <div class="checkbox-group" id="pj">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="pj[]" id="pj1" value="1">
                                                        <label class="form-check-label" for="pj1">Biro A</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="pj[]" id="pj2" value="2">
                                                        <label class="form-check-label" for="pj2">Biro B</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="pj[]" id="pj3" value="3">
                                                        <label class="form-check-label" for="pj3">Biro C</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="pj[]" id="pj4" value="4">
                                                        <label class="form-check-label" for="pj4">Biro D</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="status">Status</label>
                                                <select name="status" class="form-control" id="status">
                                                    <option readonly hidden>Pilih Status</option>
                                                    <option value="proses">Proses</option>
                                                    <option value="selesai">Selesai</option>
                                                    <option value="batal">Batal</option>
                                                </select>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="deadline">Deadline</label>
                                                <input name="deadline" type="date" class="form-control" id="deadline">
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button name="tambah" type="submit" class="btn text-white" style="background-color: #73a9ad; border-color: #73a9ad;" value="true"><i class="fas fa-save"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">PJ</th>
                                <th scope="col">Status</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $monitorObj = new Monitor();
                                $monitors = $monitorObj->getAll();
                                $no = 1;

                                foreach ($monitors as $monitor){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td class="text-left"><?php echo $monitor['nama_kegiatan']; ?></td>
                                <td  class="text-left">
                                    <ul>
                                        <?php

                                        foreach($monitor['pj_monitor'] as $pj){
                                            echo '<li style="text-align:left;">'.$pj['nama'].'</li>';
                                        }
                                        ?>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning"><?php echo $monitor['status']; ?></button>
                                </td>
                                <td>
                                    <?php echo $monitor['deadline']; ?>
                                </td>
                                <td class="text-left">
                                    <?php echo $monitor['deskripsi']; ?>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-6 d-flex justify-content-end">
                                            <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit" style="background-color: #f5f0bd; border-color: #f5f0bd;"><i class="fas fa-edit"></i></button>
                                            <div class="modal" id="modalEdit"  style="text-align: left;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="">
                                                                <input name="id" type="number" value="<?php echo $monitor['id']; ?>" hidden="true">
                                                                <div class="form-group mb-2">
                                                                    <label for="namaKegiatan">Nama Kegiatan</label>
                                                                    <input name="namaKegiatan" type="text" class="form-control" id="namaKegiatan" placeholder="Nama Kegiatan" value="<?php echo $monitor['nama_kegiatan']; ?>">
                                                                </div>

                                                                <div class="form-group mb-2">
                                                                    <label for="pj">Penanggung Jawab</label>
                                                                    <select name="pj" class="form-control" id="pj">
                                                                        <option readonly hidden>Pilih Penanggung Jawab</option>
                                                                        <option value="1">Biro A</option>
                                                                        <option value="2">Biro B</option>
                                                                        <option value="3">Biro C</option>
                                                                        <option value="4">Biro D</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group mb-2">
                                                                    <label for="status">Status</label>
                                                                    <select name="status" class="form-control" id="status">
                                                                        <option readonly hidden>Pilih Status</option>
                                                                        <option value="pending">Pending</option>
                                                                        <option value="selesai">Selesai</option>
                                                                        <option value="batal">Batal</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group mb-2">
                                                                    <label for="deadline">Deadline</label>
                                                                    <input name="deadline" type="date" class="form-control" id="deadline" value="<?php echo $monitor['deadline']; ?>">
                                                                </div>

                                                                <div class="form-group mb-2">
                                                                    <label for="deskripsi">Deskripsi</label>
                                                                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4"><?php echo $monitor['deskripsi']; ?></textarea>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="edit" type="submit" class="btn text-white" style="background-color: #73a9ad; border-color: #73a9ad;"><i class="fas fa-save"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-6 d-flex justify-content-start">
                                        <form method="POST" action="">
                                            <input type="number" name="id" value="<?php echo $monitor['id']; ?>" hidden="true">
                                            <button name="delete" type="submit" class="btn btn-sm" style="background-color: #f5f0bd; border-color: #f5f0bd;"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('../layouts/bottom.php'); ?>