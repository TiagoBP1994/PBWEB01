@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                    <?php $json = file_get_contents('http://epico.dk/umbraco/surface/home/AllAdvertising');

                    $data = json_decode($json,true);
                    
                    var_dump($data);?>
                    
                    <!--<div class="panel-heading">
                        Change your employment status.
                        <input type="checkbox" name="employment_status"/> Employed
                        <input type="checkbox" name="employment_status"/> Unemployed
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection