<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<fieldset>
        <legend style=" text-align: center ;background-color: darkseagreen">Change Password</legend>
        <form  class="form-horizontal" action="{{ route('update.password') }}" method="POST">
        @csrf
            <div class="form-group row">
                @if(session('errorMsg'))
                    <div class="alert alert-icon alert-danger alert-dismissable fade in " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label=" Close">
                        <span aria-hidden="true">&times; </span>
                        </button>
                        <i class=" mdi mdi-check-all"> </i>
                        <strong> Warning ! {{ session('errorMsg') }}</strong>
                    </div>
                    @endif
                <label for="oldpassword" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                <div class="col-md-4">
                    <input id="oldpassword" type="password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword" required autocomplete="oldpassword">

                    @error('oldpassword')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                <div class="col-md-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bCancel"></label>
            <div class="col-md-8">
                <button id="submit" name="submit" class="btn btn-success">Save Changes</button>
                <a href="{{route('user.dashboard')}}" class="btn btn-danger" role="button">Back</a>

            </div>


        </div>
        </form>


    </fieldset>
