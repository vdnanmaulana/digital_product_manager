<!-- Page Container START -->
<div class="page-container">

    <div class="main-content">
        <form>
            <div class="page-header no-gutters has-tab">
                <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                    <div class="media align-items-center m-b-15">
                        <div class="avatar avatar-image rounded" style="height: 70px; width: 70px">
                            <img src="<?= base_url() ?>assets/images/netflix.png" alt="">
                        </div>
                        <div class="m-l-15">
                            <h4 class="m-b-0">[Nama Produk]</h4>
                            <p class="text-muted m-b-0"><span class="badge badge-pill badge-red font-size-12">Sharing</span></p>
                        </div>
                    </div>
                    <div class="m-b-15">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-save"></i>
                            <span>Simpan</span>
                        </button>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Info Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-edit-option">Opsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-edit-description">Catatan Tambahan</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content m-t-15">
                <div class="tab-pane fade show active" id="product-edit-basic">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <label class="font-weight-semibold" for="image">Gambar</label>
                                <div class="bubble mb-2">
                                    <div class="bubble-wrapper p-5">
                                        <img id="previewImage" style="height:200px; width:200px; object-fit:cover" src="<?= base_url() ?>assets/images/netflix.png">
                                    </div>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imageInput">
                                    <label class="custom-file-label" for="imageInput">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-semibold" for="customerName">Nama Customer</label>
                                <input type="text" class="form-control" id="customerName" placeholder="Nama Customer">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="customerUsername">Username Shopee/Tokped/Dll</label>
                                <input type="text" class="form-control" id="customerUsername" placeholder="Username Shopee/Tokped/Dll">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="customerPhone">Nomor HP Customer</label>
                                <input type="text" class="form-control" id="customerPhone" placeholder="Nomor HP Customer">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="customerEmail">Email Customer</label>
                                <input type="text" class="form-control" id="customerEmail" placeholder="Email Customer">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productCategory">Produk digital yang dibeli?</label>
                                <select class="custom-select" id="productCategory">
                                    <option value="Netflix" selected>Netflix</option>
                                    <option value="Zulu">Zulu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productType">Type</label>
                                <select class="custom-select" id="productType">
                                    <option value="Sharing" selected>Sharing</option>
                                    <option value="Private">Private</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-semibold" for="productStatus">Status</label>
                                <select class="custom-select" id="productStatus">
                                    <option value="inStock" selected>Aktif</option>
                                    <option value="outOfStock">Nonaktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-edit-option">
                    <div class="card">
                        <div class="card-body">

                            <div class="alert alert-primary">
                                <div class="d-flex justify-content-start align-items-center">
                                    <span class="alert-icon m-r-20 font-size-30">
                                        <i class="anticon anticon-info-circle"></i>
                                    </span>
                                    <div>
                                        <h5 class="alert-heading">Informasi</h5>
                                        <p>Fitur tanggal kadaluarsa berdasarkan produk dan tipe akun dalam proses pengembangan.</p>
                                        <p>Informasi tanggal kadaluarsa akan muncul dibawah tanggal mulai dan tanggal akhir.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="font-weight-semibold" for="startDate">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="startDate" placeholder="Nama Produk">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="endDate">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="endDate" placeholder="Nama Produk">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-edit-description">
                    <div class="card">
                        <div class="card-body">
                            <div id="productDescription">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Content Wrapper END -->