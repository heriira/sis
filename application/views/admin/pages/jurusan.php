<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <div class="card mb-4 mt-4">
            <div class="card-header text-center">
                Daftar Jurusan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Jurusan</th>
                                <th>Nama Jurusan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>MM</td>
                                <td>MultiMedia</td>
                                <td><button type="button" class="btn btn-dark">Edit</button>&nbsp;<button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TKJ</td>
                                <td>Teknik Komputer Jaringan</td>
                                <td><button type="button" class="btn btn-dark">Edit</button>&nbsp;<button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>RPL</td>
                                <td>Rekayasa Perangkat Lunak</td>
                                <td><button type="button" class="btn btn-dark">Edit</button>&nbsp;<button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view("admin/components/footer"); ?>