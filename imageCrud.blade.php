<x-header compName="Image CRUD Page"/>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center">
            <h1>Item</h1>
            <br/>
            <form action="{{URL::to('addItemData')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" placeholder="ID" name="txtID" @isset($editItem) value="{{$editItem->id}}" @endisset/>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" class="form-control" placeholder="Name" name="txtName" @isset($editItem) value="{{$editItem->name}}" @endisset/>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Price</span>
                <input type="text" class="form-control" placeholder="Price" name="txtPrice" @isset($editItem) value="{{$editItem->price}}" @endisset/>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Qty</span>
                <input type="num" class="form-control" placeholder="Qty" name="numQty" @isset($editItem) value="{{$editItem->qty}}" @endisset/>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Image</span>
                <input type="file" class="form-control" placeholder="Image" name="fileImage" @isset($editItem) value="{{$editItem->image}}" @endisset/>
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
            <h3>All Items</h3>
            <table class="table table-bordered">
                <thead class="thead">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Qty</td>
                        <td>Image</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allItem as $i)
                    <tr>
                        <td>{{ $i->id }}</td>
                        <td>{{ $i['name'] }}</td>
                        <td>{{ $i->price }}</td>
                        <td>{{ $i->qty }}</td>
                        <td><img src="{{asset('/uploads/'.$i->image)}}" alt="{{ $i->image}}" style="width:100px;height:100px"></td>
                        <td><a href={{"editItem/".$i->id}}>Edit</a></td>
                        <td><a href="{{"deleteItem/".$i->id}}">Delete</a></td>
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