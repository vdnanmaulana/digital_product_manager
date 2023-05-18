<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown">
                <a href="<?php echo base_url('/') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-pie-chart"></i>
                    </span>
                    <span class="title">Produk Digital</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li <?php if ($this->uri->segment(1) == 'manage_sell') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url('manage_sell') ?>">Kelola Penjualan</a>
                    </li>
                    <li <?php if ($this->uri->segment(1) == 'digi_category') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url('digi_category') ?>">Kategori</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-pie-chart"></i>
                    </span>
                    <span class="title">Kategori</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="">Tambah Kategori</a>
                    </li>
                    <li>
                        <a href="">Coba</a>
                    </li>
                </ul>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-file"></i>
                    </span>
                    <span class="title">Kategori</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Level 1</span>
                            <span class="arrow">
                                <i class="arrow-icon"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Level 2.1</a>
                            </li>
                            <li>
                                <a href="">Level 2.2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> -->
        </ul>
    </div>
</div>
<!-- Side Nav END -->