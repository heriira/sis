<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <div class="card mb-4 mt-4">
            <div class="card-header text-center">
                Daftar Guru
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>Alamat</th>
                                <th>JK</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = $this->uri->segment('3') + 1;
                            if (!empty($guru)) {
                                foreach ($guru as $data) {
                                    echo "<tr>";
                                    echo "<td>" . $id++ . "</td>";
                                    echo "<td>" . $data['kd_guru'] . "</td>";
                                    echo "<td>" . $data['nama_guru'] . "</td>";
                                    echo "<td>" . $data['jk'] . "</td>";
                                    echo "<td>" . $data['alamat'] . "</td>";
                            ?>
                                    <!-- <td>
                                        <a href="<?php echo base_url(); ?>admin/guru/edit/<?php echo $data['kd_guru'] ?>" class="btn btn-dark">Edit</a>
                                        &nbsp;
                                        <a href="<?php echo base_url(); ?>admin/guru/delete/<?php echo $data['kd_guru'] ?>" class="btn btn-danger" data-confirm="Apakah anda benar-benar yakin akan menghapus data member atas nama <?php echo $data['kd_guru'] ?> ?">Delete</a>
                                    </td> -->
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