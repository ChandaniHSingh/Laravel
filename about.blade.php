<x-header compName="About"/>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center">
            <h1>About Page</h1>
            <h3>{{URL::current()}}</h3>
            <h3>{{URL::previous()}}</h3>
            <!-- @for($i=-10;$i<=10;$i++)
                @if($i % 2 == 1 || $i % 2 == -1)
                    <p>{{$i}} Odd</p>
                @elseif($i % 2 == 0)
                    <p>{{$i}} Even</p>
                @endif

                @switch($i%2)
                    @case(0)
                        <p>{{$i}} Even</p>
                        @break

                    @case(1)
                    @case(-1)
                        <p>{{$i}} Odd</p>
                        @break

                    @default
                        <p>Something went wrong, please try again</p>
                @endswitch

            @endfor -->
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<x-footer/>
