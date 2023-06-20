<?php include('layouts/head.php'); ?>
<?php include('layouts/menu.php'); ?>
<div class="col-lg-10 col-md-9 col-sm-6">
    <div class="row">
        <div class="col-lg-10 col-md-8 col-sm-6 px-5 pt-5 pb-3">
            <h1 style="color: #73a9ad;">Monitoring</h1>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 pt-5 pl-2 pr-5 pb-3">
            <a class="btn btn-info w-100 text-black" style="background-color: #f5f0bb; border-color: #f5f0bb;"><?php include('layouts/profile.php'); ?></a>
        </div>
    </div>
    <div class="row px-5 pb-5 pt-3">
        <div class="col-12">
            <div class="row mb-3 d-flex justify-content-end">
                <div class="col-1">
                    <button type="button" class="btn btn-sm btn-info w-100 text-white"  data-bs-toggle="modal" data-bs-target="#modalTambah" style="background-color: #73a9ad; border-color: #73a9ad;"><i class="fas fa-plus"></i></button>
                    <div class="modal" id="modalTambah">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p>This is the modal content.</p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn text-white" style="background-color: #73a9ad; border-color: #73a9ad;"><i class="fas fa-save"></i></button>
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
                            <th scope="col">Nama Barang</th>
                            <th scope="col">PJ</th>
                            <th scope="col">Status</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="text-left">Mobil Pajero</td>
                            <td  class="text-left">Biro A</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning">Pending</button>
                            </td>
                            <td>
                                22/06/2023
                            </td>
                            <td class="text-left">
                                Ini adalah contoh deskripsi
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm" style="background-color: #f5f0bd; border-color: #f5f0bd;"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-sm" style="background-color: #f5f0bd; border-color: #f5f0bd;"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('layouts/bottom.php'); ?>