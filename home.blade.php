<x-header compName="Home"/>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center">
            <h1>Home Page</h1>
            <h3>{{URL::current()}}</h3>
            <h3>{{URL::previous()}}</h3>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<x-footer/>