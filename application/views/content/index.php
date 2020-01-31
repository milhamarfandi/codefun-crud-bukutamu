<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <br>
            <a href="<?= base_url().'main/tambah_tamu'; ?>" class="btn btn-primary mb-3"><i class="fas fa-user"></i>
                Tamu Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id Buku Tamu</th>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aktifitas</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $a = 1;
                        foreach($bukutamu as $b) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $b['nama']; ?></td>
                        <td><?= $b['email']; ?></td>
                        <td><?= $b['aktifitas']; ?></td>
                        <td><?= $b['check_in']; ?></td>
                        <td>
                            <?php if (empty($b['check_out'])): ?>
                                <?php echo '<span class="badge badge-danger">Anda Belum Check Out !!!</span>' ?>
                            <?php else: ?>
                                <?= $b['check_out']; ?>
                            <?php endif ?>
                            
                                

                        </td>

                        <td>
                            <?php if (empty($b['check_out']) == true): ?>
                                <a href="<?= base_url('main/check_out/').$b['id_bukutamu'];?>" class="badge badge-success"><i
                                    class="fas fa-edit"></i> Check Out</a>
                            <?php else: ?>
                                <a href="<?= base_url('main/ubah_tamu/').$b['id_bukutamu'];?>" class="badge badge-info"><i
                                    class="fas fa-edit"></i> Ubah</a>
                            <?php endif ?>
                            <a href="<?= base_url('main/hapus_tamu/').$b['id_bukutamu'];?>"
                                onclick="return confirm('Kamu yakin akan menghapus data <?= $b['nama'];?> ?');"
                                class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

