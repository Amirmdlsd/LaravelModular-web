<main>
    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid ">
            <div class="row mt-6">
                <div class="col-6 d-flex justify-content-center mx-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-12 m-auto">

                            <!-- Title -->
                            <h1 class="fs-4">تایید ایمیل</h1>
                            <!-- Form START -->
                            <form >
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">لینک تایید به ایمیل شما ارسال شد *</label>
                                    <div class="d-grid">
                                        <button class="btn btn-primary mb-0" type="button" wire:click="resendEmailVerification">ارسال مجدد</button>
                                    </div>
                                </div>
                                <!-- Button -->

                            </form>
                            <!-- Form END -->
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
</main>
