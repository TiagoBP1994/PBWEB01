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
                
                <div class="panel-heading">News!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    </br></br>

                    <?php
                    use App\news;
                    
                    $nws = 'http://mesterm.dk/simpleproxy/buddyshop_dk/newsfeed';
                    $newsall = simplexml_load_file($nws);
                    
                    foreach($newsall as $news){
                        
                        $new = new news($news);
                        
                        foreach ($news as $new){  
                            ?>
                                <a href="info/{{$new->attributes()->id}}">
                            <?php
                            print_r('<div class="panel panel-default">');    
                            print_r('<div class="panel-heading">');
                            print_r('<div class="panel-body">');
                            print_r($new->attributes()->id . '</br>');
                            print_r($new->attributes()->headline . '</br>');
                            print_r($new->attributes()->tags . '</br>');
                            print_r($new->attributes()->contactEmail . '</br>');
                            print_r($new->attributes()->language . '</br>');
                            $dte = $new->attributes()->publishDate;
                            $dat = filter_var($dte, FILTER_SANITIZE_NUMBER_INT);
                            $dt = DateTime::createFromFormat('Ymd', $dat);
                            print_r ($dt->format('d/m/Y'));
                            print_r('</div>');
                            print_r('</div>');
                            print_r('</div>');
                            ?></a><?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
