<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <a href="<?php echo base_url(); ?>admin/nilai/add_nilai" class="btn btn-primary mt-4">Tambah Data</a>
        <div class="mt-4">
            <?= $this->session->flashdata('notif') ?>
        </div>
        <div class="card mb-4 mt-4">
            <div class="card-header text-center">
                Daftar Siswa
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Nilai</th>
                                <th>Nis</th>
                                <th>Kode Guru</th>
                                <th>Kode Mapel</th>
                                <th>Kode UH</th>
                                <th>Kode UTS</th>
                                <th>Kode UAS</th>
                                <th>Tugas</th>
                                <th>Kode NA</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = $this->uri->segment('3') + 1;
                            if (!empty($nilai)) {
                                foreach ($nilai as $data) {
                                    echo "<tr>";
                                    echo "<td>" . $id++ . "</td>";
                                    echo "<td>" . $data->id_nilai . "</td>";
                                    echo "<td>" . $data->nama_siswa . "</td>";
                                    echo "<td>" . $data->nama_guru . "</td>";
                                    echo "<td>" . $data->nama_mapel . "</td>";
                                    echo "<td>" . $data->uh . "</td>";
                                    echo "<td>" . $data->uts . "</td>";
                                    echo "<td>" . $data->uas . "</td>";
                                    echo "<td>" . $data->tugas . "</td>";
                                    echo "<td>" . "</td>";
                            ?>
                                    <td>
                                        <a href="<?php echo base_url(); ?>admin/nilai/edit/<?php echo $data->id_nilai ?>" class="btn btn-dark">Edit</a>
                                        &nbsp;
                                        <a href="<?php echo base_url(); ?>admin/nilai/delete/<?php echo $data->id_nilai ?>" class="btn btn-danger" data-confirm="Apakah anda benar-benar yakin akan menghapus data member atas nama <?php echo $data->id_nilai ?> ?">Delete</a>
                                    </td>
                            <?php
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view("admin/components/footer"); ?>