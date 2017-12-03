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
                
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    </br>
                    
                    <?php
                    use App\job;
                    $json = file_get_contents('http://epico.dk/umbraco/surface/home/AllAdvertising');
                    $data = json_decode($json,false); // false gives object / true associative array
                    
                    /*for($i=0; $i<=10; $i++){
                        ?></br><?php
                        echo '$i = ' . $i;
                        ?></br><?php
                        /*
                        $q = $data[$i]['JobBeginDate'];
                        $p = $data[$i]['Applicationdeadline'];
                        $jbd = filter_var($q, FILTER_SANITIZE_NUMBER_INT);
                        $appd = filter_var($p, FILTER_SANITIZE_NUMBER_INT);
                        
                        $tsSec1 = $jbd / 1000;
                        $tsSec2 = $appd / 1000;
                        
                        ?></br><?php
                        echo 'Job Begin Date ' . date( 'Y-m-d', $tsSec1 );
                        ?></br><?php
                        echo 'Application deadline ' . date( 'Y-m-d', $tsSec2 );
                        
                        ?></br><?php
                        var_dump($data[$i]);*/
                        /*$dat = $data[$i];
                        var_dump($dat->Id);
                        $jb = new job($json);
                        var_dump($jb);
                        /*echo 'ID:';
                        var_dump($data[$i]['Id']);*/
                    
                    /*};*/
                    $jb = new job($json);
                    //print_r($jb);
                    /*$i=0;
                    foreach ($jb as $job){
                        print $jb[$i];
                    }*/
                    var_dump($jb);
                    //print_r($jb->Id);
                    //job::setData($data);
                    //job::displayJobs();
                    ?>
                    
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
