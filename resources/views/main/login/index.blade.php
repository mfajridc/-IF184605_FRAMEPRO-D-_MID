<div class="modal fade" tabindex="-1" role="dialog" id="modalLogin">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">Please Login</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email"
                            class="form-control rounded-4 @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control rounded-4" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Login</button>
                    <small class="text-muted">By clicking Login, you agree to the terms of use.</small>
                    <small class="d-block text-center mt-3">Not registered? <a href="#" class="nav-link"
                            data-bs-toggle="modal" data-bs-target="#modalRegister">Register Now!</a></small>
                </form>
            </div>
        </div>
    </div>
</div>
