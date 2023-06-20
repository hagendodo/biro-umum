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
                    <th scope="row">1</th>
                    <td class="text-left">a1s8d812sa3ja31ds1h</td>
                    <td class="text-left">Mobil Pajero</td>
                    <td  class="text-left">
                        <ol>
                            <li>Biro A</li>
                            <li>Biro B</li>
                        </ol>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-danger">Kosong</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('../layouts/bottom.php'); ?>