<x-header compName="Contact"/>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center">
            <h1>Contact Page</h1>
            <h3>{{URL::current()}}</h3>
            <h3>{{URL::previous()}}</h3>

            <form action="{{URL::to('/contactFormData')}}" method="POST" name="contactForm">
                @csrf
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" class="form-control" placeholder="Name" name="txtName"/>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" class="form-control" placeholder="Email" name="txtEmail"/>
                </div>

                <div class="input-group">
                <span class="input-group-text">Comment</span>
                <textarea class="form-control" name="txtComment"></textarea>
                </div>

                <div class="">
                <input type="submit" class="btn btn-submit" value="Submit" name="btnSubmit"/>
                <input type="reset" class="btn btn-reset" value="Reset" name="btnReset"/>
                </div>

            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<x-footer/>