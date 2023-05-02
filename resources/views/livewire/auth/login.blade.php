<div>
    <div class="container container-tight py-4">
    <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{asset('vendor/assets/src/static/logo.svg')}}" height="36" alt=""></a>
    </div>
    <div class="card card-md">
        <div class="card-body">
        <h2 class="h2 text-center mb-4">Login to your account</h2>
        <form wire:submit.prevent="loginUser" autocomplete="off" novalidate>
            <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" wire:model.defer="email" class="form-control @error('email')is-invalid @enderror" placeholder="your@email.com" autocomplete="off">
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-2">
            <label class="form-label">
                Password
                <span class="form-label-description">
                <a href="./forgot-password.html">I forgot password</a>
                </span>
            </label>
            <div class="mb-3">
                <input type="password" wire:model.defer="password" class="form-control @error('password')is-invalid @enderror"  placeholder="Your password"  autocomplete="off">
                @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            </div>
            <div class="mb-2">
            <label class="form-check">
                <input type="checkbox" class="form-check-input" wire:model.defer="remember"/>
                <span class="form-check-label">Remember me on this device</span>
            </label>
            </div>
            <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
        </form>
        </div>
    </div>
    <div class="text-center text-muted mt-3">
        Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
    </div>
    </div>
</div>
