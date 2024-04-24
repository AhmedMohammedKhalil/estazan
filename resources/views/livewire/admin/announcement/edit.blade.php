

<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>تعديل الإعلان</h2>
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
                                <label> محتوى الإعلان</label>
                                <textarea name="content" wire:model.lazy='content' class="form-control" id="content" placeholder="ادخل  محتوى الإعلان هنا"
                                    cols="30" rows="6"></textarea>
                                @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>اختر مدرس</label>
                                <div class="select-box">
                                    <select class="form-control" name="teacher_id" wire:model='teacher_id'>
                                        @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}" @if($teacher_id== $teacher->id)
                                            selected @endif>{{ $teacher->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('teacher_id') <span class="text-danger error">{{ $message }}</span>@enderror
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
