<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid">
            <div class="row mt-6">
                <div class="col-6 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-8 m-auto">
                            <!-- Title -->
                            <h2 class="">ثبت نام</h2>
                            <!-- Form START -->
                            <form wire:submit="registerUser">
                                <!-- Name -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">نام</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                                        <input type="text" wire:model="name" class="form-control border-0 bg-light rounded-end ps-1" placeholder="amir">
                                    </div>
                                    @error($name) <p class="text-danger">{{$message}}</p>  @enderror
                                </div>
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">ایمیل</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                                        <input type="email"  wire:model="email"class="form-control border-0 bg-light rounded-end ps-1" placeholder="***@gmail.com" id="exampleInputEmail1">
                                    </div>
                                    @error($email) <p class="text-danger">{{$message}}</p>  @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-4">
                                    <label for="inputPassword5" class="form-label">رمز عبور *</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                        <input type="password" wire:model="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword5">
                                    </div>
                                    @error($password) <p class="text-danger">{{$message}}</p>  @enderror
                                </div>
                                <!-- Confirm Password -->
                                <div class="mb-4">
                                    <label for="inputPassword6" class="form-label">تایید رمز عبور *</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                        <input type="password" wire:model="password_confirmation" class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword6">
                                    </div>
                                </div>
                                <!-- Check box -->
                                <div class="mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-1">
                                        <label class="form-check-label"  wire:model="remember" for="checkbox-1">مرا به خاطر بسپار</label>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="align-items-center mt-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary mb-0" type="submit">ثبت نام</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                            <!-- Sign up link -->
                            <div class="mt-4 text-center">
                                <span>آیا قبلا ثبت نام کرده اید؟<a href="sign-in.html"> ورود</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
