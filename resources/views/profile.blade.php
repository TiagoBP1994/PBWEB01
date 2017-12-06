@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Welcome!</h3>
                </div>
                
                <div class="panel-body">
                    <p>You were succesfully Logged-in</p>
                </div>
            </div>
            <div class="panel panel-default">
                
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php
                    //use App\profile;
                    use App\User;
                    
                    $user = new User();
                    print_r(Auth::user()->name . '</br>');
                    print_r(Auth::user()->email . '</br>');
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
