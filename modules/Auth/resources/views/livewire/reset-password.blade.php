<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid ">
            <div class="row mt-6">
                <div class="col-6 d-flex justify-content-center mx-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-12 m-auto">

                            <!-- Title -->
                            <h1 class="fs-4">فراموشی رمز عبور</h1>


                            <!-- Form START -->
                            <form  wire:submit="resetPassword">
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">پسورد *</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="bi bi-envelope-fill"></i></span>
                                        <input type="password" wire:model="password"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="***">
                                    </div>
                                    @error($password)
                                    <p class="text-danger">  {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">پسورد *</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="bi bi-envelope-fill"></i></span>
                                        <input type="password" wire:model="password_confirmation"
                                               class="form-control border-0 bg-light rounded-end ps-1"
                                               placeholder="***" >
                                    </div>
                                    @error($password_confirmation)
                                    <p class="text-danger">  {{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Button -->
                                <div class="align-items-center">
                                    <div class="d-grid">
                                        <button class="btn btn-primary mb-0" type="submit">ارسال رمز</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
</main>
