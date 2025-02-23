
<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid">
            <div class="row mt-6">
                <div class="col-6 m-auto ">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-8 m-auto ">
                            <h1 class="fs-4 ">ورود به حساب کاربری</h1>
                            @if(session('msg'))
                                <p class="alert alert-danger">{{session('msg')}}</p>
                            @else

                            @endif
                            <!-- Form START -->
                            <form>
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">ایمیل *</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                                        <input type="email" wire:model="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="***@gmail.com" id="exampleInputEmail1">
                                    </div>
                                    @error($email)
                                       <p class="text-danger"> {{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-4">
                                    <label for="inputPassword5" class="form-label">رمز عبور *</label>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="********" id="inputPassword5" wire:model="password">
                                    </div>
                                    @error($password)
                                    <p class="text-danger"> {{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Check box -->
                                <div class="mb-4 d-flex justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" wire:model="remember" for="exampleCheck1">مرا به خاطر بسپار</label>
                                    </div>
                                    <div class="text-primary-hover">
                                        <a href="{{route('forget-password')}}" class="text-secondary">
                                            <u>رمز خود را فراموش کرده اید؟</u>
                                        </a>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="align-items-center mt-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary mb-0" type="button" wire:click="loginUser">ورود</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                            <!-- Sign up link -->
                            <div class="mt-4 text-center">
                                <span>حساب کاربری ندارید؟ <a href="{{route('register')}}">ثبت نام</a></span>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
</main>
