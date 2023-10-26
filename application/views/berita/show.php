<div class="py-5 bg-image-full"
    style="background-image: url('<?= base_url('assets/img/banner/sawah.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="text-center my-5">
        <img class="img-fluid rounded-circle mb-2" src="<?= base_url('assets/img/logo_brebes.png'); ?>"
            alt="Profile Picture" width="150" />
        <div class="text-center">
            <?php
            if (isset($_REQUEST['kategori'])) { ?>
                <h2 style="color: white;">Berita
                    <?= $_REQUEST['kategori'] ?>
                </h2>
            <?php } else { ?>
                <h2 style="color: white;">Semua
                    <?= "Berita" ?>
                </h2>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 70px;">
    <div style="padding: 25px;">
        <div class="x_panel">
            <div class="x_content">
                <!-- Tampilkan semua berita -->
                <div class="row">
                    <!-- Mengurutkan data berita berdasarkan tanggal -->
                    <?php
                    usort($data_berita, function ($a, $b) {
                        return strtotime($b->tanggal) - strtotime($a->tanggal);
                    });

                    // Looping berita yang sudah diurutkan
                    foreach ($data_berita as $berita) { ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="thumbnail" style="height: 400px;">
                                    <img src="<?= base_url('assets/img/berita/') . $berita->gambar; ?>"
                                        style="max-width:100%; max-height: 100%; height: 200px; width: 500px">
                                    <div class="card-body">
                                        <div class="caption">
                                            <h6 style="min-height:20px;">
                                                <?= $berita->judul_berita; ?>
                                            </h6>
                                            <h6>
                                                <?= date("d-m-Y", strtotime($berita->tanggal)); ?>
                                            </h6>
                                            <p>
                                                <a class="btn bg-warning text-dark"
                                                    href="<?= base_url("$class/show_complete/" . $berita->id_berita); ?>"
                                                    style="text-decoration: none; color: #f0ad4e;">
                                                    Lihat Selengkapnya <i class="fas fa-arrow-circle-right ml-1"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end looping -->
                </div>
            </div>
        </div>
    </div>
</div>