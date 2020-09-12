<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; SETIA 2020</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/demo/chart-area-demo.js"></script>
<script src="<?= base_url(); ?>assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/demo/datatables-demo.js"></script>
<script>
    $(document).ready(function() {

        $('a[data-confirm]').click(function(ev) {
            var href = $(this).attr('href');

            if (!$('#dataConfirmModal').length) {
                $('body').append('<div id="dataConfirmModal" class="modal fade bs-modal-sm" tableindex="-1" role="dialog" aria-labelledby="dataConfirmLabel" aria-hiden="true"><div class="modal-dialog modal-sm"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="dataConfrimLabel">Konfirmasi</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button></div><div class="modal-body"></div><div class="modal-footer"><a class="btn btn-danger btn-sx" aria-hiden="true" id="dataConfirmOK"> Ya, saya yakin </a><button type="button" class="btn btn-default btn-sx" data-dismiss="modal" aria-hiden=""true"> Batal </button></div></div></div></div>');
            }

            $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));

            $('#dataConfirmOK').attr('href', href);

            $('#dataConfirmModal').modal({
                show: true
            });
            return false;
        });

    });
</script>
</body>

</html>