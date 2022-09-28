<x-back.layouts.master>
    <x-slot name="pageTitle">
        Products 
    </x-slot>


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
            Products<a href="{{route('product.create')}}">Add New</a>
        </div>
	</div>
	<div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
                DataTable Example
        </div>
        <div class="card-body">
            
            <dl class="row">
                <dt class="col-sm-3">Name </dt>
                <dd class="col-sm-3">{{$product->name}}</dd>
                <dt class="col-sm-3">Slug </dt>
                <dd class="col-sm-3">{{$product->slug}}</dd>
                <dt class="col-sm-3">Details </dt>
                <dd class="col-sm-3">{{$product->details}}</dd>
                <dt class="col-sm-3">Price </dt>
                <dd class="col-sm-3">{{$product->price}}</dd> 
                <dt class="col-sm-3">description </dt>
                <dd class="col-sm-3">{{$product->description}}</dd>
                <dt class="col-sm-3">picture </dt>
                <img src="{{Storage::url($product->images)}}">
            </dl>
        </div>
	</div>
</x-back.layouts.master>