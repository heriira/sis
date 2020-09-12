<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <div class="card mb-4 mt-4">
            <div class="card-header text-center">
                Daftar Mapel
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mapel</th>
                                <th>Nama Mapel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = $this->uri->segment('3') + 1;
                            if (!empty($mapel)) {
                                foreach ($mapel as $data) {
                                    echo "<tr>";
                                    echo "<td>" . $id++ . "</td>";
                                    echo "<td>" . $data['kd_mapel'] . "</td>";
                                    echo "<td>" . $data['nama_mapel'] . "</td>";
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