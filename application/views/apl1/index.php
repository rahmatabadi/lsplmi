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
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Permohonan Baru</button> -->

                            <a href="<?= base_url($create); ?>" class="btn btn-primary">Permohonan Baru</a>
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
                                        <th>Name</th>
                                        <th>Due Date</th>
                                        <th>Total</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $m): ?>
                                    <tr>
                                        <td>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <?= $m['account_name'] ?>
                                        </td>
                                        <td>
                                            <?= $m['account_date'] ?>
                                        </td>
                                        <td style='text-align: right; font-weight: bold'>
                                            <?= "Rp. " . $m['jumlah'] ?>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                <li data-bs-toggle="modal" data-bs-target="#viewCategoryModal"
                                                    id="detailCategory"
                                                    data-nameMV="<?= $m['category_complaint_name'] ?>"
                                                    data-descMV="<?= $m['category_complaint_desc'] ?>"
                                                    data-tnameMV="<?= $m['departement_name'] ?>">
                                                    <a class="btn btn-sm btn-soft-primary"><i
                                                            class="mdi mdi-eye-outline"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#updateCategoryModal"
                                                    id="updateCategory" data-idMU="<?= $m['category_complaint_id'] ?>"
                                                    data-nameMU="<?= $m['category_complaint_name'] ?>"
                                                    data-descMU="<?= $m['category_complaint_desc'] ?>"
                                                    data-didMU="<?= $m['id'] ?>">
                                                    <a class="btn btn-sm btn-soft-info"><i
                                                            class="mdi mdi-pencil-outline"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    id="deleteEmployee" data-idMD="<?= $m['category_complaint_id'] ?>">
                                                    <a class="btn btn-sm btn-soft-danger"><i
                                                            class="mdi mdi-delete-outline"></i></a>
                                                </li>
                                            </ul>
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
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>
<!-- end main content-->

<script>
$(document).ready(function($) {
    $(document).on('click', '#process', function() {
        var name = $("#accountNameM").val();
        var dueDate = $("#dueDateM").val();

        if (name != null && name !== "") {
            if (dueDate != null && dueDate !== "") {
                $.ajax({
                    url: "masterAccount/createAccount",
                    type: 'post',
                    dataType: 'json',
                    data: {
                        "name": name,
                        "duedate": dueDate,
                        "_token": "{{ csrf_token() }}"
                    },

                    success: function(result) {
                        console.log(result);
                        if (result.success) {
                            location.reload();
                        } else {
                            alert(result.error);
                            //location.reload();
                        }
                    }
                });
            } else {
                alert('Your due date is empty, please fill it in first');
            }
        } else {
            alert('Your account name is empty, please fill it in first');
        }
    });

    $(document).on('click', '#detailCategory', function() {
        name = $(this).attr('data-nameMV');
        desc = $(this).attr('data-descMV');
        tname = $(this).attr('data-tnameMV');

        $('#categoryNameMV').val(name);
        $('#categoryDescMV').val(desc);
        $('#departementNameMV').val(tname);
    });

    $(document).on('click', '#updateCategory', function() {
        id = $(this).attr('data-idMU');
        name = $(this).attr('data-nameMU');
        desc = $(this).attr('data-descMU');
        departementId = $(this).attr('data-didMU');

        $('#categoryIdMU').val(id);
        $('#categoryNameMU').val(name);
        $('#categoryDescMU').val(desc);
        document.getElementById('departementSelectMU').value = departementId;
    });

    $(document).on('click', '#updateProcess', function() {
        var id = $('#categoryIdMU').val();
        var name = $("#categoryNameMU").val();
        var desc = $("#categoryDescMU").val();
        var departementId = $("#departementSelectMU").val();

        if (name != null && name !== "") {
            if (desc != null && desc !== "") {
                if (departementId != null && departementId !== "") {
                    $.ajax({
                        url: "masterComplaint/updateComplaint",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "name": name,
                            "desc": desc,
                            "departementId": departementId,
                            "_token": "{{ csrf_token() }}"
                        },

                        success: function(result) {
                            console.log(result);
                            if (result.success) {
                                location.reload();
                            } else {
                                alert(result.error);
                                //location.reload();
                            }
                        }
                    });
                } else {
                    alert('Your departement is empty, please fill it in first');
                }
            } else {
                alert('Your category desc is empty, please fill it in first');
            }
        } else {
            alert('Your category name is empty, please fill it in first');
        }
    });

    $(document).on('click', '#deleteEmployee', function() {
        id = $(this).attr('data-idMD');

        $('#idMD').val(id);
    });

    $(document).on('click', '#deleteMD', function() {
        var id = $("#idMD").val();

        if (id != null && id !== "") {
            $.ajax({
                url: "masterComplaint/deleteComplaint",
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
                        //location.reload();
                    }
                }
            });
        } else {
            alert('Your id is empty');
        }
    });
});
</script>