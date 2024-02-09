<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to Indinesia.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="auth-logo">
                            <a href="index.html" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="assets/images/logo-light.svg" alt="" class="rounded-circle"
                                            height="34">
                                    </span>
                                </div>
                            </a>

                            <a href="index.html" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group auth-pass-inputgroup">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter password" aria-label="Password"
                                        aria-describedby="password-addon">
                                </div>
                            </div>

                            <div class="mt-3 d-grid">
                                <button class="btn btn-primary waves-effect waves-light" id="login">Log In</button>
                            </div>
                            <!-- <div class="mt-4 text-center">
                                <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i>
                                    Forgot your password?</a>
                            </div> -->
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>©
                            <script>
                            document.write(new Date().getFullYear())
                            </script> Indinesia.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function($) {
    $(document).on('click', '#login', function() {
        console.log('Its Login Clicked');
        var username = $("#username").val();
        var password = $("#password").val();

        if (username != null && username !== "" && password != null && password !== "") {
            $.ajax({
                url: "auth/validation",
                type: 'post',
                dataType: 'json',
                data: {
                    "username": username,
                    "password": password,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(result) {
                    console.log(result);
                    if (result.success) {
                        console.log('IN');
                        window.location.href = "dashboard";
                    } else {
                        alert(result.error);
                    }
                }
            });

        } else {
            alert('Your username or password is empty, please fill this');
        }
    });
});
</script>