<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <br>
            <form action="<?= base_url().'main/update_tamu';?>" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Tamu</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id_bukutamu" value="<?= $bukutamu['id_bukutamu'];?>">
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?= $bukutamu['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email"
                            value="<?= $bukutamu['email']; ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="aktifitas" class="col-sm-2 col-form-label">Aktifitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="aktifitas" name="aktifitas"
                            value="<?= $bukutamu['aktifitas']; ?>">
                        <?= form_error('aktifitas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="check_out" class="col-sm-2 col-form-label">Check In</label>
                    <div class="col-sm-10">
                        <input type="datetime_local" class="form-control" id="check_in" name="check_in"
                            value="<?= $bukutamu['check_in']; ?>" readonly>
                        <?= form_error('check_in', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="check_out" class="col-sm-2 col-form-label">Check In</label>
                    <div class="col-sm-10">
                        <input type="datetime_local" class="form-control" id="check_out" name="check_out"
                            value="<?= $bukutamu['check_out']; ?>" readonly>
                        <?= form_error('check_out', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="jk_mhs" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jk_mhs" id="jk_mhs" class="form-control   ">
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div> -->

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3"
                        value="Update">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3"
                        value="Kembali" onclick="window.history.go(-1)">
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->