<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .sclist{
            list-style: none;
        }
        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }
        .slink i{
            font-size: 16px;
            margin-left: 12px;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Attributes
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addattribute')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pattributes as $pattribute)
                                    <tr>
                                        <td>{{$pattribute->id}}</td>
                                        <td>{{$pattribute->name}}</td>
                                        <td>{{$pattribute->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.editattribute',['attribute_id'=>$pattribute->id])}}" ><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteAttribute({{$pattribute->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$pattributes->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
