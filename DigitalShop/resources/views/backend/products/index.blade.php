<x-back.layouts.master>
    <x-slot name="pageTitle">
        Products 
    </x-slot>
    <div class="container-fluid px-4">
        <x-back.elements.breadcrumb> 
            <x-slot name="pageHeader">
                Products 
            </x-slot>
            <li class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Products</li>
        </x-back.elements.breadcrumb>


        <div class="card mb-4">
            <div class="card-body">
                <i class="fas fa-table me-1"></i>
                Products
                <a href="{{route('product.create')}}">Add New</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                    DataTable Example
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">
                        <strong>{{session('message')}}</strong>
                    </div>
                @endif
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($products as $p)

                        <tr>
                            <td>{{$p->name}}</td>
                            <td>{{$p->slug}}</td>
                            <td>{{$p->details}}</td>
                            <td>{{$p->price}}</td>
                            <td>
                                <a href="{{route('product.show',['product'=>$p->id]) }}" role="button" class="btn btn-success"><i class="fa fa-eye"></i></a>

                                <a href="{{route('product.edit',['product'=>$p->id]) }}" role="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                <form method="post" action="{{route('product.destroy', ['product'=>$p->id])}}" style="display: inline;">
                                @csrf
                                @method('DELETE')                                
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-back.layouts.master>