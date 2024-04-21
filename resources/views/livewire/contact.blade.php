<form id="contactForm" wire:submit.prevent='add'>
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="form-group">
                <label>الأسم</label>
                <input type="text" wire:model.lazy='name' name="name" id="name" class="form-control" placeholder="ادخل الإسم">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-lg-6 col-sm-6">
            <div class="form-group">
                <label>البريد الألكتروني</label>
                <input type="email" wire:model.lazy='email' name="email" id="email" placeholder="ادخل البريد الألكترونى"
                    class="form-control">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>


        <div class="col-lg-12">
            <div class="form-group">
                <label>الرسالة</label>
                <textarea name="message" wire:model.lazy='message' class="form-control" id="message" placeholder="ادخل رسالتك هنا"
                    cols="30" rows="6"></textarea>
                @error('message') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <button class="default-button" type="submit"><span>ارسال</span></button>
        </div>
    </div>
</form>
