<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <h3 class="mt-4">Add Siswa</h3>
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">siswa</li>
            <li class="breadcrumb-item active">add_siswa</li>
        </ol>
        <div class="card mt-4">
            <div class="col-md-12">
                <form class="mt-3" method="post" action="<?php echo base_url() . 'admin/siswa/add_siswa_act' ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="A12312">
                        <?php echo form_error('nis'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Salsa Fitri">
                        <?php echo form_error('nama_siswa'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                            <option value="P">Pria</option>
                            <option value="W">Wanita</option>
                        </select>
                        <?php echo form_error('jk'); ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        <?php echo form_error('alamat'); ?>
                    </div>
                    <div class="form-group">
                        <label for="kode kelas">Kode Kelas</label>
                        <select class="form-control" id="kode kelas" name="kd_kelas">
                            <option value="">Pilih Kelas</option>
                            <?php foreach ($kelas as $k) {
                                $selected = '';
                                if ($k->kelas == $k->kd_kelas) {
                                    $selected = 'selected';
                                }
                                echo "<option value='" . $k->kd_kelas . "' " . $selected . ">" . $k->kd_kelas . "</option>";
                            }
                            ?>
                        </select>
                        <?php echo form_error('kd_kelas'); ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary float-right mb-3">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view("admin/components/footer"); ?>