<div>
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Post edit') }}</div>
            <div class="card-body">
                <div class="alert @if (!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif ">
                    @if (!empty(session('alert')))
                        {{ session('msg') }}
                    @endif
                </div>
                <form wire:submit.prevent="save">
                    <div class="form-group mb-3">
                        <label for="">{{ __('Title') }}</label>
                        <input type="text" name="" class="form-control @error('title') is-invalid @enderror"
                            id="" wire:model="title">
                        <div class="invalid-feedback">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div class="form-group mb-3">
                        <label for="">{{ __('Content') }}</label>
                        <textarea type="text" name="" class="form-control @error('content') is-invalid @enderror" id=""
                            wire:model="content"> </textarea>
                        <div class="invalid-feedback">
                            @error('content')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <button class="btn btn-primary">{{ __('Save') }}</button>


                </form>
            </div>
        </div>

    </div>

</div>
