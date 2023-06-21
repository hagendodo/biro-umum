<?php include "../auth/loginCheck.php"; ?>
<?php
$PAGE = 'list';
include_once "../../backend/Asset.php"; ?>
<?php include('../layouts/head.php'); ?>
<?php include('../layouts/menu.php'); ?>
<div class="col-lg-10 col-md-9 col-sm-6">
    <div class="row">
        <div class="col-lg-10 col-md-8 col-sm-6 px-5 pt-5 pb-3">
            <h1 style="color: #73a9ad;">List Aset</h1>
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
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">PJ</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    $assetObj = new Asset();
                    $assets = $assetObj->getAll();
                    $no = 1;

                    foreach ($assets as $asset){
                    ?>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td class="text-left"><?php echo $asset['kode_barang']; ?></td>
                    <td class="text-left"><?php echo $asset['nama_barang']; ?></td>
                    <td  class="text-left">
                        <ul>
                            <?php

                            foreach($asset['pj_asset'] as $pj){
                                echo '<li style="text-align:left;">'.$pj['nama'].'</li>';
                            }
                            ?>
                        </ul>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-<?php echo $asset['status'] == 'tersedia'?'success':'danger'; ?>"><?php echo $asset['status']; ?></button>
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
                                                    <div class="form-group mb-2">
                                                        <label for="namaBarang">Nama Barang</label>
                                                        <input name="namaBarang" type="text" class="form-control" id="namaBarang" placeholder="Nama Barang" value="<?php echo $asset['nama_barang']; ?>">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label for="pj">Penanggung Jawab</label>
                                                        <select class="form-control" id="pj">
                                                            <option readonly hidden>Pilih Penanggung Jawab</option>
                                                            <option value="pj1">Biro A</option>
                                                            <option value="pj2">Biro B</option>
                                                            <option value="pj3">Biro C</option>
                                                            <option value="pj3">Biro D</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label for="jumlahBarang">Jumlah</label>
                                                        <input name="jumlah" type="number" class="form-control" id="jumlahBarang" placeholder="Jumlah Barang" value="<?php echo $asset['nama_barang']; ?>">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label for="status">Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option readonly hidden>Pilih Status</option>
                                                            <option value="tersedia">Tersedia</option>
                                                            <option value="kosong">Kosong</option>
                                                        </select>
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
                                    <input type="number" name="id" value="<?php echo $asset['id']; ?>" hidden="true">
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
<?php include('../layouts/bottom.php'); ?>