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
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Create Bill</h4>

                            <form>
                                <div class="mb-3">
                                    <label for="billName" class="form-label">Account</label>
                                    <select class="form-select" id="accountSelectM">
                                        <option value="0">Select</option>
                                        <?php foreach ($account as $d): ?>
                                        <option value="<?= $d['account_id'] ?>">
                                            <?= $d['account_name'] ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="billName" class="form-label">Bill Name</label>
                                    <input type="text" class="form-control" id="billName"
                                        placeholder="Enter Your First Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="billName" class="form-label">Nominal</label>
                                    <input data-parsley-type="number" type="text" class="form-control" required
                                        placeholder="Enter nominal" id="nominal" />
                                </div>
                                <div class="mb-3">
                                    <label for="billName" class="form-label">Tenor</label>
                                    <input data-parsley-type="number" type="text" class="form-control" required
                                        placeholder="Enter Tenor" id="tenor" />
                                </div>

                                <div class="mb-3">
                                    <label for="billName" class="form-label">First Due Date</label>
                                    <input class="form-control" type="date" value="" id="dueDate">
                                </div>


                                <div>
                                    <button type="button" class="btn btn-primary w-md" id="create">Create</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->


            </div>
            <!-- end row -->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>
<!-- end main content-->

<script>
function reformatDate(dateString) {
    // Split the date string into day, month, and year
    var parts = dateString.split('/');

    // Reorder the parts to form the desired format (yyyy-mm-dd)
    var formattedDate = parts[2] + '-' + parts[1].padStart(2, '0') + '-' + parts[0].padStart(2, '0');

    return formattedDate;
}
$(document).ready(function($) {
    const numberRegex = /^\d+$/;

    // Function to validate email
    function numberVal(value) {
        return numberRegex.test(value);
    }
    $(document).on('click', '#create', function() {
        console.log('Create Clicked');
        var account = $("#accountSelectM").val();
        var billName = $("#billName").val();
        var nominal = $("#nominal").val();
        var tenor = $("#tenor").val();
        var parts = $("#dueDate").val().split('-');

        // Reorder the parts to form the desired format (yyyy-mm)
        var dueDate = parts[0] + '-' + parts[1];

        if (account != null && account !== "" && billName != null && billName !== "" && nominal !=
            null &&
            nominal !== "" &&
            tenor != null && tenor !== "" && dueDate != null && dueDate !== "") {
            if (numberVal(nominal)) {
                if (numberVal(tenor)) {
                    $.ajax({
                        url: "masterBill/createBill",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "account": account,
                            "billName": billName,
                            "nominal": nominal,
                            "account": account,
                            "tenor": tenor,
                            "dueDate": dueDate,
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
                    alert('Tenor is invalid. Please enter with numberic.');
                }
            } else {
                alert('Nominal is invalid. Please enter with numberic.');
            }

        } else {
            alert('Please fill all form');
        }
    });

});
</script>