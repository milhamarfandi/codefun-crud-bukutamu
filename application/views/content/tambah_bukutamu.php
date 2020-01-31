<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <br>
            <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('main/tambah_tamu'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama Tamu" value="<?php echo set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan Email Tamu" value="<?= set_value('email');?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="aktifitas" class="col-sm-2 col-form-label">Aktifitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="aktifitas" name="aktifitas"
                            placeholder="Masukkan Aktifitas" value="<?= set_value('aktifitas');?>">
                        <?= form_error('aktifitas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="check_in" class="col-sm-2 col-form-label">Check In</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="check_in" name="check_in"
                            placeholder="" value="<?= set_value('check_in');?>">
                        <?= form_error('check_in', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="check_out" class="col-sm-2 col-form-label">Check Out</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="check_out" name="check_out"
                            placeholder="" value="<?= set_value('check_out');?>">
                        <?= form_error('check_out', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div> -->
                <!-- <div class="form-group row">
                    <label for="jk_mhs" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jk_mhs" id="" class="form-control">
                            <option value="">- Pilih -</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jk_mhs', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div> -->
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3"
                            value="Kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3"
                            value="check In">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>