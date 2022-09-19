<x-header compName="Stud View Page"/>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center">
            <h1>Stud</h1>
            <br/>
            <h3>Insert Stud</h3>
            <form action="{{URL::to('/editStudData')}}" method="POST" name="editStudForm">
                @csrf
                <input type="hidden" class="form-control" placeholder="ID" name="txtID" @if(isset($ID)) value={{$ID}} @endif/>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" class="form-control" placeholder="Name" name="txtName" @if(isset($Name)) value={{$Name}} @endif/>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" class="form-control" placeholder="Email" name="txtEmail" @if(isset($Email)) value={{$Email}} @endif/>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Phone</span>
                <input type="text" class="form-control" placeholder="Phone" name="txtPhone" @if(isset($Phone)) value={{$Phone}} @endif/>
                </div>

                <div class="">
                <input type="submit" name="btnSubmit" value="Insert"/>
                <input type="submit" name="btnSubmit" value="Update"/>
                <input type="reset" value="Reset" name="btnReset"/>
                </div>

            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    <br/><hr/>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center">
            <h3>All Stud</h3>
            <table class="table">
                <thead class="thead">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allStud as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s['name'] }}</td>
                        <td>{{ $s->email }}</td>
                        <td>{{ $s->phone }}</td>
                        <form name="delStudForm" method="POST" action="{{URL::to('/editStud')}}">
                            @csrf
                        <input type="hidden" name="txtID" value={{ $s->id }} />
                        <td><input type="submit" name="btnSubmit" value="Edit" /></td>
                        <td><input type="submit" name="btnSubmit" value="Delete" /></td>
                        <td><a href="{{}}"></a></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<x-footer/>