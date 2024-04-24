<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>إنشاء حساب</h2>
            </div>
            <div class="contact-form-action">
                <form wire:submit.prevent='register'>
                    <div class="row">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="form-group">
                                <label>الرقم المدنى</label>
                                <input class="form-control" type="civil_number" name="civil_number" wire:model.lazy='civil_number' id="civil_number" />
                                @error('civil_number')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

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
                                <label>الموبايل</label>
                                <input class="form-control" type="text" name="phone" wire:model.lazy='phone'
                                    id="phone" />
                                @error('phone')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>كلمة السر</label>
                                <input class="form-control" type="password" name="password" wire:model.lazy='password'
                                    id="password" />
                                @error('password')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>أعد كلمة السر</label>
                                <input class="form-control" type="password" name="confirm_password" wire:model.lazy='confirm_password'
                                    id="confirm_password" />
                                @error('confirm_password')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <span> لديك حساب </span> <a href="{{ route('teacher.login') }}"> سجل الأن</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">إنشاء حساب الأن</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
