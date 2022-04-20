<main>
    <div class="container-xl px-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- Basic login form-->
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header justify-content-center">
                        <h3 class="fw-medium my-4 text-center">Warehouse NTM - PT SMM</h3>
                    </div>
                    <div class="card-body">
                        <!-- Login form-->
                        <form id="login-form">
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter email address" required />
                            </div>
                            <!-- Form Group (password)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" type="password" placeholder="Enter password" required />
                            </div>
                            <!-- Form Group (remember password checkbox)-->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value="" />
                                    <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                </div>
                            </div>
                            <!-- Form Group (login box)-->
                            <div class="mt-4 mb-0">
                                <button type="button" id="login-btn" class="btn btn-primary float-end">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // !! NEED API HERE
    let email = 'adam@pt-bks.com';
    let password = '1234';

    $('#login-btn').on('click', function() {
        var forms = $('#login-form');
        var validated = bsValidation(forms);
        var btn = $(this);

        if (validated) {
            // TODO : Change it to AJAX
            var inputEmail = $('#inputEmailAddress').val();
            var inputPassword = $('#inputPassword').val();
            btn.buttonLoader('start');
            if (inputEmail == email && inputPassword == password) {
                setTimeout(function() {
                    toast('success', 'Login Berhasil').then((result) => {
                        window.location.replace(base_url + "Welcome");
                    });
                }, 2000);
            } else {
                setTimeout(function() {
                    toast('error', 'Username & Password tidak sesuai!');
                    btn.buttonLoader('stop');
                }, 2000);
            }
        }
    })
</script>