<div class="login-form" style="">
    <form wire:submit.prevent='add'>
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <fieldset>
            <legend> اضافة صورة للمعرض</legend>
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label class="">صورة للمعرض :</label>
                        <input type="file" name="image" class="form-control" wire:model='image'
                        placeholder="إرفع الصورة">
                        @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>

            </div>
        </fieldset>

        <button type="submit" class="default-button mt-5"><span>إضافة صورة</span></button>

</form>
</div>
