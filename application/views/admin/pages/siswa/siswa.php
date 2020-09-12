<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <!-- <button type="button" class="btn btn-primary mt-4">+ Tambah Data</button> -->
        <a href="<?php echo base_url(); ?>admin/siswa/add_siswa" class="btn btn-primary mt-4">Tambah Data</a>
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
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Alamat</th>
                                <th>JK</th>
                                <th>Kode Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = $this->uri->segment('3') + 1;
                            if (!empty($siswa)) {
                                foreach ($siswa as $data) {
                                    echo "<tr>";
                                    echo "<td>" . $id++ . "</td>";
                                    echo "<td>" . $data['nis'] . "</td>";
                                    echo "<td>" . $data['nama_siswa'] . "</td>";
                                    echo "<td>" . $data['alamat'] . "</td>";
                                    echo "<td>" . $data['jk'] . "</td>";
                                    echo "<td>" . $data['kd_kelas'] . "</td>";
                            ?>
                                    <td>
                                        <a href="<?php echo base_url(); ?>admin/siswa/edit/<?php echo $data['nis'] ?>" class="btn btn-dark">Edit</a>
                                        &nbsp;
                                        <a href="<?php echo base_url(); ?>admin/siswa/delete/<?php echo $data['nis'] ?>" class="btn btn-danger" data-confirm="Apakah anda benar-benar yakin akan menghapus data member atas nama <?php echo $data['nama_siswa'] ?> ?">Delete</a>
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