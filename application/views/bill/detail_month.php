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
                                        <th>Account Name</th>
                                        <th>Due Date</th>
                                        <th>Total</th>
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
                                            <a
                                                href="./detail_account?month=<?= $month ?>&year=<?= $year ?>&account=<?= $m['account_id'] ?>">
                                                <?= $m['account_name']?>
                                            </a>
                                        </td>
                                        <td>
                                            <?= $m['credit_due_date'] ?>
                                        </td>
                                        <td style='text-align: right; font-weight: bold'>
                                            <?= "Rp. " . $m['tagihan'] ?>
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

            <!-- MODAL -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Account Name </label>
                                    <input type="text" class="form-control" id="accountNameM" required
                                        placeholder="Type account name" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Due Date</label>
                                    <select class="form-select" id="dueDateM">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="process">Create Account</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- updateCategoryModal -->
            <div class="modal fade" id="updateCategoryModal" tabindex="-1" aria-labelledby="updateCategoryLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateCategoryLabel">Update Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <input type="hidden" class="form-control" id="categoryIdMU">
                                <div class="mb-3">
                                    <label class="form-label">Category Name </label>
                                    <input type="text" class="form-control" id="categoryNameMU" required
                                        placeholder="Type employee name" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Category Desc </label>
                                    <input type="tel" class="form-control" id="categoryDescMU" required
                                        placeholder="Type employee phone" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Departement </label>
                                    <select class="form-select" id="departementSelectMU">
                                        <option value="0">Select</option>
                                        <?php foreach ($departement as $d): ?>
                                        <option value="<?= $d['id'] ?>"><?= $d['departement_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="updateProcess">Update Category</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- viewDepartementModal -->
            <div class="modal fade" id="viewCategoryModal" tabindex="-1" aria-labelledby="viewCategoryModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewCategoryModalLabel">Detail Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="categoryNameMV" disabled />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Category Desc</label>
                                    <input type="text" class="form-control" id="categoryDescMV" disabled />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Departement Name</label>
                                    <input type="text" class="form-control" id="departementNameMV" disabled />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DeleteModal -->
            <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="idMD">
                            <p>Are you sure you want to delete this data category?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary" id="deleteMD">Yes</button>
                        </div>
                    </div>
                </div>
            </div>


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