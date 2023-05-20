<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">Register</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="/register" id="registerForm">
                    @csrf

                    <div class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-groub">
                        <input id="nameInput" type="text" class="form-control" name="name" value="{{ old('name') }}" required="required">
                        <span>Name</span>
                        <i></i>
                    </div>

                    <div class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-groub">
                        <input id="emailInput" type="text" class="form-control" name="email" value="{{ old('email') }}" required="required">
                        <span>Email</span>
                        <i></i>
                    </div>

                    <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-groub">
                        <input id="passwordInput" type="password" class="form-control" name="password" required="required">
                        <span>Password</span>
                        <i></i>
                    </div>

                    <div class="form-groub">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="required">
                        <span>Confirm Password</span>
                        <i></i>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="button" data-dismiss="modal">Close</button>
                            <button type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
@parent

<script>
$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#registerForm input").removeClass("is-invalid");
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "sd",
            data: formData,
            success: () => window.location.assign(""),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
@endsection
