

<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>إضافة رد</h2>
            </div>
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
                                <label>محتوى الرد</label>
                                <textarea name="reply" wire:model.lazy='reply' class="form-control" id="reply" placeholder="ادخل محتوى الرد هنا"
                                    cols="30" rows="6"></textarea>
                                @error('reply') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">أضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
