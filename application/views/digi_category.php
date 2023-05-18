<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5><?php echo $title ?></h5>
                    <div>
                        <a href="" class="btn btn-sm btn-default"> <i class="anticon anticon-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table id="data-table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Tipe Akun</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-image rounded">
                                                <img src="<?= base_url() ?>assets/images/netflix.png" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <span>Netflix</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-pill badge-red font-size-12">Shared</span></td>
                                    <td>Akun Netflix</td>
                                    <td>
                                        <div class="dropdown dropdown-animated scale-right">
                                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="">Edit</a>
                                                <a class="dropdown-item" href="">Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-image rounded">
                                                <img src="<?= base_url() ?>assets/images/netflix.png" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <span>Netflix</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-pill badge-blue font-size-12">Private</span></td>
                                    <td>Akun Netflix</td>
                                    <td>
                                        <div class="dropdown dropdown-animated scale-right">
                                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="">Edit</a>
                                                <a class="dropdown-item" href="">Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content Wrapper END -->