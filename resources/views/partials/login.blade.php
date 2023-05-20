<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal">LOGIN</h5>
                <marquee behavior="scroll" direction="left" scrollamount="5">
                    Login Dulu Broo...!!
                </marquee>
            </div>
            <div class="modal-body">
                <form method="POST" action="/login">
                    @csrf
                    <div class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-groub">
                        <input type="text " name="email" required="required" value="{{old('email')}}">
                        <span>Email</span>
                        <i></i>
                    </div>

                    <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-groub">
                        <input type="password" name="password" required="required">
                        <span>Password</span>
                        <i></i>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <a style="margin-left: 70%; margin-top:-700%;" class="nav__link" href="" data-toggle="modal" data-target="#registerModal">Daftar Disini !!</a>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="button" data-dismiss="modal">Close</button>
                            <button type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
@parent

@if($errors->has('email') || $errors->has('password'))
    <script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
    </script>
@endif
@endsection
