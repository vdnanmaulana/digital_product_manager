<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <?php echo $this->session->flashdata('success');
        ?>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Kelola Penjualan</h5>
                    <div>
                        <a href="<?= base_url('manage_sell/add') ?>" class="btn btn-sm btn-default"> <i class="anticon anticon-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <div class="table-responsive">
                        <table id="data-table" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Username</th>
                                    <th>Mulai Tanggal</th>
                                    <th>Tanggal Expire</th>
                                    <th>Customer</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data_sell as $sell) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded">
                                                    <img src="<?= base_url() ?>uploads/<?php echo $sell->image ?>" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Akun Netflix</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-pill badge-blue"><?php echo $sell->username ?></span></td>
                                        <td><?php echo $sell->start_date ?></td>
                                        <td><?php echo $sell->exp_date ?></td>
                                        <td><?php echo $sell->customer_name ?></td>
                                        <td>
                                            <div class="dropdown dropdown-animated scale-right">
                                                <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
                                                    Aksi
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="<?= base_url('manage_sell/edit/' . $sell->id) ?>">Edit</a>
                                                    <a class="dropdown-item" href="<?= base_url('manage_sell/delete/' . $sell->id) ?>">Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content Wrapper END -->