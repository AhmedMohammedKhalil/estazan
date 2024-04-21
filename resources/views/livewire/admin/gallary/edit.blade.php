<div class="login-form" style="">
    <form wire:submit.prevent='edit'>
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <fieldset>
            <legend>تعديل صورة المعرض </legend>
            <div class="row">


                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label class="">صورة:</label>
                        <input type="file" name="image" class="form-control" wire:model='image'
                        placeholder="إرفع الصورة">
                        @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
        </fieldset>


        <button type="submit" class="default-button mt-5"><span>حفظ التغييرات</span></button>

</form>
</div>
