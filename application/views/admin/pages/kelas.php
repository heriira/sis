<?php $this->load->view("admin/components/header"); ?>
<main>
    <div class="container-fluid">
        <div class="card mb-4 mt-4">
            <div class="card-header text-center">
                Daftar Kelas
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>XRPLA</td>
                                <td>Kelas X RPL A</td>
                                <td><button type="button" class="btn btn-dark">Edit</button>&nbsp;<button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>XRLPB</td>
                                <td>Kelas X RPL B</td>
                                <td><button type="button" class="btn btn-dark">Edit</button>&nbsp;<button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>XTKJA</td>
                                <td>Kelas X TKJ A</td>
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