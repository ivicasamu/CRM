<x-main>
    <div class="col-md-12">

        <img class="rounded mx-auto d-block mb-5" src="" alt="" width="50" height="50">
        <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                <div class="col-md-6">
                    <input id="username"
                           type="text"
                           class="form-control @error('username') is-invalid @enderror"
                           name="username"
                           value="{{ $user->username }}"
                           required
                           autocomplete="username"
                           autofocus
                    >

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name"
                           type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           name="name"
                           value="{{ $user->name }}"
                           required
                           autocomplete="name"
                           autofocus
                    >

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email"
                           type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email"
                           value="{{ $user->email }}"
                           required
                           autocomplete="email"
                    >

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('User Photo') }}</label>
                <img src="{{ $user->avatar }}" alt="your-avatar" width="70" class="rounded-circle ml-3">
                <div class="col-md-5">


                    <div class="custom-file">
                        <input type="file"
                               class="custom-file-input"
                               id="avatar"
                               name="avatar"
                        >
                        <label class="custom-file-label" for="avatar">Choose file</label>
                    </div>

                    @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password"
                           type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           name="password"
                           required
                           autocomplete="new-password"
                    >

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm"
                           type="password"
                           class="form-control"
                           name="password_confirmation"
                           required
                           autocomplete="new-password"
                    >
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <x-button-submit>{{ __('Update User')  }}</x-button-submit>
                    <a href="{{ $user->path() }}" class=" btn btn-danger hover:underline ml-6">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</x-main>
