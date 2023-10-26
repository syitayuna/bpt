<div class="py-5 bg-image-full"
    style="background-image: url('<?= base_url('assets/img/banner/sawah.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="text-center my-5">
        <img class="img-fluid rounded-circle mb-2" src="<?= base_url('assets/img/logo_brebes.png'); ?>"
            alt="Profile Picture" width="150" />
        <h2 class="text-white fw-bolder"><strong><?= $title ?></strong></h2>
    </div>
</div>
<div class="container pt-2">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-dark text-light">
                    <?php
                    //create form
                    $attributes = array('id_aduan' => 'FrmAdAduan', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="email" class="col-sm-5 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                value=" <?= set_value('email'); ?>" placeholder="nama@example.com">
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-5 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama"
                                value=" <?= set_value('nama'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nik" class="col-sm-5 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik"
                                value=" <?= set_value('nik'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nik') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-5 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat"
                                rows="3"><?= set_value('alamat'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                            </small>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-5 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                        value="Laki-laki" <?php if (set_value('jenis_kelamin') == "Laki-laki"):
                                            echo "checked";
                                        endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Jenis_kelamin2"
                                        name="jenis_kelamin" value="Perempuan" <?php if (set_value('jenis_kelamin') == "Perempuan"):
                                            echo "checked";
                                        endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('jenis_kelamin') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-5 col-form-label">Pekerjaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                value=" <?= set_value('pekerjaan'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('pekerjaan') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-5 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_telp" name="no_telp"
                                value=" <?= set_value('no_telp'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_telp') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tindak_lanjut" class="col-sm-5 col-form-label">Tindak Lanjut</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tindak_lanjut" name="tindak_lanjut"
                                value=" <?= set_value('tindak_lanjut'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tindak_lanjut') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi_aduan" class="col-sm-5 col-form-label">Isi Aduan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="isi_aduan" name="isi_aduan"
                                rows="3"><?= set_value('isi_aduan'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('isi_aduan') ?>
                            </small>
                        </div>
                    </div>
                    <hr class="my-3" />
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-danger">Kirim</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5" />
</div>