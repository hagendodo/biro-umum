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