<section class="user-area-style">
    <div class="container">
        <div class="log-in-area">
            <div class="contact-form-action">
                <form wire:submit.prevent='add'>
                    <div class="row">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="form-group">
                                <label>الإسم</label>
                                <input class="form-control" type="name" name="name" wire:model.lazy='name' id="name" />
                                @error('name')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>البريد الألكترونى</label>
                                <input class="form-control" type="email" name="email" wire:model.lazy='email'
                                    id="email" />
                                @error('email')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>الرسالة</label>
                                <textarea name="message" wire:model.lazy='message' class="form-control" id="message" placeholder="ادخل رسالتك هنا"
                                    cols="30" rows="6"></textarea>
                                @error('message') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">إرسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


