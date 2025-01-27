
<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>تعديل صورة</h2>
            </div>
            <div class="contact-form-action">
                <form wire:submit.prevent='edit'>
                    <div class="row">
                        @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif


                        <div class="col-12">
                            <div class="form-group">
                                <label>الصورة</label>
                                <input class="form-control" type="file" name="image" wire:model='image' id="image" />
                                @error('image')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                        <div class="col-12">
                            <button class="default-btn" type="submit">حفظ التغييرات</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
