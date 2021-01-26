<div class="modal fade" id="modal-komen" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Isi Komentar</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <p id="isi" align="justify"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function onShow(val) {
        // alert(val);
        $.ajax({
            url: "controller/control-komentar.php",
            method: "POST",
            data: "id_komentar=" + val,
            dataType: "json",
            success: function(data) {
                // alert(data.detail_kategori);
                $('#isi').html(data.isi_komentar);
                $('#modal-komen').modal('show');
            }
        });
    }
</script>