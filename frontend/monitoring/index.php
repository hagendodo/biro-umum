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
                                            <input type="text" class="form-control" id="namaKegiatan" placeholder="Nama Kegiatan">
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
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status">
                                                <option readonly hidden>Pilih Status</option>
                                                <option value="status1">Pending</option>
                                                <option value="status3">Selesai</option>
                                                <option value="status2">Batal</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="deadline">Deadline</label>
                                            <input type="date" class="form-control" id="deadline">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" rows="4"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn text-white" style="background-color: #73a9ad; border-color: #73a9ad;"><i class="fas fa-save"></i></button>
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
                                                        <label for="namaKegiatan">Nama Kegiatan</label>
                                                        <input type="text" class="form-control" id="namaKegiatan" placeholder="Nama Kegiatan" value="">
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
                                                        <label for="status">Status</label>
                                                        <select class="form-control" id="status">
                                                            <option readonly hidden>Pilih Status</option>
                                                            <option value="status1">Pending</option>
                                                            <option value="status3">Selesai</option>
                                                            <option value="status2">Batal</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label for="deadline">Deadline</label>
                                                        <input type="date" class="form-control" id="deadline" value="">
                                                    </div>

                                                    <div class="form-group mb-2">
                                                        <label for="deskripsi">Deskripsi</label>
                                                        <textarea class="form-control" id="deskripsi" rows="4"></textarea>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn text-white" style="background-color: #73a9ad; border-color: #73a9ad;"><i class="fas fa-save"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
<?php include('../layouts/bottom.php'); ?>