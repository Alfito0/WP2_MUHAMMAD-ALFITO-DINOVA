<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                // $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama Kategori tidak boleh kosong</div>');
                // redirect('buku/ubahbuku/' . $b['id']);
            } ?>
            <?php foreach ($buku as $b) { ?>
                <form action="<?= base_url('buku/ubahbuku'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukan Judul Buku" value="<?= $b['judul_buku']; ?>">
                    </div>
                    <div class="form-group">
                        <select name="id_kategori" class="form-control form-control-user" value="<?= $b['kategori']; ?>">

                            <?php
                            $k = ['Sains', 'Hobby', 'Komputer', 'Komunikasi', 'Hukum', 'Agama', 'Populer', 'Bahasa', 'Komik'];
                            for ($i = 0; $i < 9; $i++) { ?>
                                <option value="<?= $k[$i]; ?>"><?= $k[$i]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukan nama pengarang" value="<?= $b['pengarang']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukan nama penerbit" value="<?= $b['penerbit']; ?>">
                    </div>
                    <div class=" form-group">

                        <select name="tahun" class="form-control form-control-user">
                            <option value="<?php echo $b['id']; ?>"></option>
                            <?php
                            for ($i = date('Y'); $i > 1000; $i--) { ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukan isbn" value="<?= $b['isbn']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukan nominal stok" value="<?= $b['penerbit']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="image" name="image" value="<?= $b['image']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>