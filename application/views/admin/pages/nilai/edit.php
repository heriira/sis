<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <h3 class="mt-4">Add nilai</h3>
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">nilai</li>
            <li class="breadcrumb-item active">add_nilai</li>
        </ol>
        <div class="card mt-4">
            <div class="col-md-12">
                <?php foreach ($nilai as $s) { ?>
                    <form class="mt-3" method="post" action="<?php echo base_url() . 'admin/nilai/edit_act' ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">id</label>
                            <input type="text" class="form-control" name="id_nilai" placeholder="0" value="<?php echo $s->id_nilai ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode guru">Kode Guru</label>
                            <select class="form-control" id="kode kelas" name="kd_guru">
                                <option>Pilih Guru</option>
                                <?php foreach ($guru as $k) {
                                    $selected = '';
                                    if ($k->guru == $k->kd_guru) {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $k->kd_guru . "' " . $selected . ">" . $k->nama_guru . "</option>";
                                }
                                ?>
                            </select>
                            <span class="badge badge-danger">Pilih Kembali Guru</span>
                            <?php echo form_error('kd_guru'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode guru">Siswa</label>
                            <select class="form-control" id="kode kelas" name="nis">
                                <option>Pilih Nama Siswa</option>
                                <?php foreach ($siswa as $k) {
                                    $selected = '';
                                    if ($k->siswa == $k->nis) {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $k->nis . "' " . $selected . ">" . $k->nama_siswa . "</option>";
                                }
                                ?>
                            </select>
                            <span class="badge badge-danger">Pilih Kembali Siswa</span>
                            <?php echo form_error('nis'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kode kelas">Kode Mapel</label>
                            <select class="form-control" id="kode kelas" name="kd_mapel">
                                <option>Pilih Mapel</option>
                                <?php foreach ($mapel as $k) {
                                    $selected = '';
                                    if ($k->mapel == $k->kd_mapel) {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $k->kd_mapel . "' " . $selected . ">" . $k->nama_mapel . "</option>";
                                }
                                ?>
                            </select>
                            <span class="badge badge-danger">Pilih Kembali Mapel</span>
                            <?php echo form_error('kd_mapel'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">UH</label>
                            <input type="text" class="form-control" id="uh" name="uh" placeholder="0" value="<?php echo $s->uh ?>">
                            <?php echo form_error('nis'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">UTS</label>
                            <input type="text" class="form-control" id="uts" name="uts" placeholder="0" value="<?php echo $s->uts ?>">
                            <?php echo form_error('nis'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">UAS</label>
                            <input type="text" class="form-control" id="uas" name="uas" placeholder="0" value="<?php echo $s->uas ?>">
                            <?php echo form_error('nis'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tugas</label>
                            <input type="text" class="form-control" id="tugas" name="tugas" placeholder="0" value="<?php echo $s->tugas ?>">
                            <?php echo form_error('nis'); ?>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right mb-3">Tambah</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view("admin/components/footer"); ?>