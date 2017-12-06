@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Job preview</h3>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php
                    use App\Info;
                    $nws = 'http://mesterm.dk/simpleproxy/buddyshop_dk/newsfeed';
                    $newsall = simplexml_load_file($nws);
                    $id = Request::segment(2);
                    //Route::input('id');
                    print_r($id);
                    //$data = Input::get('foo');
                    
                    foreach($newsall as $news){
                        $info = new Info($newsall);
                        foreach ($news as $new){
                            if ($new->attributes()->id == $id){
                                print_r($new->div->asXML());
                            }
                        }
                    }
                    //
                    /*
                    print_r(Auth::user()->name . '</br>');
                    print_r(Auth::user()->email . '</br>');*/
                    /*SimpleXMLElement Object ( 
                        [@attributes] => Array ( 
                            [id] => 1806 [headline] => støtter talentfulde unge 
                            [tags] => EPICOIT,EPICO,Talentfuldeunge 
                            [contactEmail] => mln@epico.dk 
                            [language] => da-DK 
                            [publishDate] => 20171107
                        ) 
                        [div] => Array ( 
                            [0] => SimpleXMLElement Object ( [@attributes] => Array ( [class] => ) 
                                [div] => SimpleXMLElement Object ( [@attributes] => Array ( [class] => container-fluid ) 
                                    [div] => SimpleXMLElement Object ( [@attributes] => Array ( [class] => row ) 
                                        [div] => SimpleXMLElement Object ( [@attributes] => Array ( [class] => col-md-12 ) 
                                            [p] => Array ( 
                                                    [0] => De sidste tre sæsoner har EPICO været officiel sponsor for den danske OL-svømmer, Daniel Skaaning. Vi (i hvert fald vores navn) var med, da han svømmede sig til en personlig (og dansk) rekord og en flot 13. plads til OL i Rio i 2016. 
                                                    [1] => Efter en benhård sommer med VM har Daniel arbejdet hårdt for at komme i topform, og er nu klar til at udfordre sin fysiske form til EM-kvalifikationen og DM d. 9-12. november i Greve svømmehal, hvor han stiller op med 100m medley, 200m fri og 200m medley.   
                                                    [2] => Vi går stærkt ud fra, at Daniel klarer sig godt til det danske mesterskab, og derved kvalificerer sig til at svømme d. 13-17. december i Royal Arena i København. 
                                                    [3] => Vi glæder os til at følge Daniel til DM og krydser fingre for, at han kvalificerer sig til at svømme EM til december. 
                                                    [4] => SimpleXMLElement Object ( [a] => Array ( [0] => Følg Daniel på Facebook [1] => hjemmeside ) )
                                            )
                                        )
                                    ) 
                                ) 
                            ) 
                            [1] => SimpleXMLElement Object ( [@attributes] => Array ( [class] => ) 
                                [div] => SimpleXMLElement Object (
                                    [@attributes] => Array ( [class] => container-fluid ) 
                                    [div] => SimpleXMLElement Object ( 
                                        [@attributes] => Array ( [class] => row ) 
                                        [div] => SimpleXMLElement Object ( 
                                            [@attributes] => Array ( [class] => col-md-12 ) 
                                            [img] => SimpleXMLElement Object ( 
                                                [@attributes] => Array ( [src] => /media/1369/daniel_skaaning_650.jpg ) 
                                            ) 
                                        ) 
                                    ) 
                                ) 
                            ) 
                            [2] => SimpleXMLElement Object ( 
                                [@attributes] => Array ( [class] => ) 
                                [div] => SimpleXMLElement Object ( 
                                    [@attributes] => Array ( [class] => container-fluid ) 
                                    [div] => SimpleXMLElement Object ( 
                                        [@attributes] => Array ( [class] => row ) 
                                        [div] => SimpleXMLElement Object ( 
                                            [@attributes] => Array ( [class] => col-md-12 ) 
                                            [p] => Array ( [0] =>   
                                                [1] => SimpleXMLElement Object ( [strong] => Held og lykke, Daniel. ) 
                                                [2] => SimpleXMLElement Object ( [strong] => Fra hele EPICO-teamet. )
                                            ) 
                                        ) 
                                    ) 
                                ) 
                            ) 
                        ) 
                    )*/ 
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
