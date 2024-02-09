<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">
                            <?= $title ?>
                        </h4>

                        <div class="page-title-right">
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="repaymentFull"
                                data-month="<?= $month ?>" data-year="<?= $year ?>" data-account="<?= $account ?>"
                                data-bs-toggle="modal" data-bs-target="#myModal">Repayment</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr style='text-align: center'>
                                        <th>No</th>
                                        <th>Credit Name</th>
                                        <th>Remark</th>
                                        <th>Total</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $m): ?>
                                    <tr>
                                        <td style='text-align: center'>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <?= $m['credit_desc']?>
                                        </td>
                                        <td>
                                            <?= "Angsuran Ke " . $m['credit_installment'] . " Dari " . $m['credit_installment_finsih'] ?>
                                        </td>
                                        <td style='text-align: right; font-weight: bold'>
                                            <?= "Rp. " . $m['tagihan'] ?>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="repaymentId" data-bs-toggle="modal" data-id="<?= $m['credit_id']?>"
                                                data-bs-target="#myModalCredit">Repayment</button>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Repayment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Are you sure you will pay off the bill on this account?</h5>
                            <input type="hidden" class="form-control" id="monthF" />
                            <input type="hidden" class="form-control" id="yearF" />
                            <input type="hidden" class="form-control" id="accountF" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" id="lunas"
                                class="btn btn-primary waves-effect waves-light">Repayment</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div id="myModalCredit" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Repayment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Are you sure you will pay off the bill? </h5>
                            <input type="hidden" class="form-control" id="idCredit" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" id="lunasCredit"
                                class="btn btn-primary waves-effect waves-light">Repayment</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>
<!-- end main content-->

<script>
$(document).ready(function($) {
    $(document).on('click', '#lunas', function() {
        console.log("AA");
        var month = $("#monthF").val();
        var year = $("#yearF").val();
        var account = $("#accountF").val();

        console.log(month);
        console.log(year);
        console.log(account);

        if (month != null && month !== "" && year != null && year !== "" && account != null &&
            account !== "") {
            $.ajax({
                url: "./repaymentFull",
                type: 'post',
                dataType: 'json',
                data: {
                    "month": month,
                    "year": year,
                    "account": account,
                    "_token": "{{ csrf_token() }}"
                },

                success: function(result) {
                    console.log(result);
                    if (result.success) {
                        location.reload();
                    } else {
                        alert(result.error);
                    }
                }
            });
        } else {
            alert('Empty Value');
        }
    });

    $(document).on('click', '#lunasCredit', function() {
        var id = $("#idCredit").val();

        if (id != null && id !== "") {
            $.ajax({
                url: "./repaymentId",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}"
                },

                success: function(result) {
                    console.log(result);
                    if (result.success) {
                        location.reload();
                    } else {
                        alert(result.error);
                    }
                }
            });
        } else {
            alert('Empty Value');
        }
    });

    $(document).on('click', '#repaymentFull', function() {
        month = $(this).attr('data-month');
        year = $(this).attr('data-year');
        account = $(this).attr('data-account');

        $('#monthF').val(month);
        $('#yearF').val(year);
        $('#accountF').val(account);
    });


    $(document).on('click', '#repaymentId', function() {
        id = $(this).attr('data-id');

        $('#idCredit').val(id);
    });
});
</script>