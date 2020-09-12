<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <h3 class="mt-4">Edit Siswa</h3>
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">siswa</li>
            <li class="breadcrumb-item active">edit_siswa</li>
        </ol>
        <div class="card mt-4">
            <div class="col-md-12">
                <?php foreach ($siswa as $s) { ?>
                    <form class="mt-3" method="post" action="<?php echo base_url() . 'admin/siswa/edit_act' ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" placeholder="A12312" value="<?php echo $s->nis; ?>">
                            <?php echo form_error('nis'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Siswa</label>
                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Salsa Fitri" value="<?php echo $s->nama_siswa; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jk" name="jk" value="<?php echo $s->jk; ?>">
                                <option <?php if ($s->jk == "p") {
                                            echo "selected='selected'";
                                        }
                                        echo $s->jk; ?> value="p">Pria</option>
                                <option <?php if ($s->jk == "w") {
                                            echo "selected='selected'";
                                        }
                                        echo $s->jk; ?> value="w">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $s->alamat; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kode kelas">Kode Kelas</label>
                            <select class="form-control" id="kode kelas" name="kd_kelas">
                                <option selected><?php echo $s->kd_kelas ?></option>
                                <?php foreach ($kelas as $k) {
                                    $selected = '';
                                    if ($s->kelas == $k->kd_kelas) {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $k->kd_kelas . "' " . $selected . ">" . $k->kd_kelas . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right mb-3">Tambah</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view("admin/components/footer"); ?>