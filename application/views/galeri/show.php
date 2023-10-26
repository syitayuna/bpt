<div class="py-5 bg-image-full"
    style="background-image: url('<?= base_url('assets/img/banner/sawah.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="text-center my-5">
        <img class="img-fluid rounded-circle mb-2" src="<?= base_url('assets/img/logo_brebes.png'); ?>"
            alt="Profile Picture" width="150" />
        <div class="text-center">
            <?php
            if (isset($_REQUEST['kategori'])) { ?>
                <h2 style="color: white;">Galeri
                    <?= $_REQUEST['kategori'] ?>
                </h2>
            <?php } else { ?>
                <h2 style="color: white;">Semua
                    <?= "Galeri" ?>
                </h2>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 70px;">
    <div style="padding: 25px;">
        <div class="x_panel">
            <div class="x_content">
                <!-- Tampilkan semua galeri -->
                <div class="row">
                    <?php
                    // Mengurutkan data gambar berdasarkan tanggal
                    usort($data_gambar, function ($a, $b) {
                        return strtotime($b->tanggal) - strtotime($a->tanggal);
                    });

                    foreach ($data_gambar as $galeri): ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card bg-dark text-center text-white">
                                <div class="thumbnail" style="height: 300px;">
                                    <img class="img-hover" src="<?= base_url('assets/img/galeri/') . $galeri->gambar; ?>"
                                        style="max-width: 100%; max-height: 100%; height: 200px; width: 500px"
                                        alt="<?= $galeri->judul; ?>">
                                    <div class="card-body">
                                        <div class="caption">
                                            <h6 style="min-height: 30px;">
                                                <?= $galeri->judul; ?>
                                            </h6>
                                            <h6>
                                                <?= date("d-m-Y", strtotime($galeri->tanggal)); ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- end looping -->
            </div>
        </div>
    </div>
</div>

