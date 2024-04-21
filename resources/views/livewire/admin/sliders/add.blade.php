
<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>إضافة سلايدر جديد</h2>
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
                                <label>العنوان</label>
                                <input placeholder="العنوان" class="form-control" type="title" name="title" wire:model.lazy='title' id="title" />
                                @error('title')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
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
                            <div class="form-group">
                                <label>المحتوى</label>
                                <textarea name="content" class="form-control"  wire:model.lazy='content' id="content" rows="6" placeholder="المحتوى"></textarea>
                                @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>


                        <div class="col-12">
                            <button class="default-btn" type="submit">إضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
