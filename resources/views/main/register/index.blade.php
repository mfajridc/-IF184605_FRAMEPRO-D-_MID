<div class="modal fade" tabindex="-1" role="dialog" id="modalRegister">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">Register Form</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="name"
                            class="form-control rounded-4 @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" autofocus required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="username"
                            class="form-control rounded-4 @error('username') is-invalid @enderror" id="username"
                            placeholder="Username" autofocus required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email"
                            class="form-control rounded-4 @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password"
                            class="form-control rounded-4 @error('password') is-invalid @enderror" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
                    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                    <small class="d-block text-center mt-3">Already registered? <a href="#" class="nav-link"
                            data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a></small>
                </form>
            </div>
        </div>
    </div>
</div>
