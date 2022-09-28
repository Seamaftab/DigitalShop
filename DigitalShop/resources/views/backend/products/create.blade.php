<x-back.layouts.master>
    <x-slot name="pageTitle">
        Create 
    </x-slot>

    
    <x-back.elements.breadcrumb> 
        <x-slot name="pageHeader">
            Create 
        </x-slot>
        <li class="breadcrumb-item active">Product information</li>
    </x-back.elements.breadcrumb>
    
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">@csrf
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter product name">
      </div>
      <div class="form-group">
        <label>Slug</label>
        <input type="text" class="form-control" name="slug" placeholder="Slug">
      </div>
      <div class="form-group">
        <label>Details</label>
        <input type="text" class="form-control" name="details"placeholder="Details">
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price" placeholder="Enter price">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="images" placeholder="Enter image">
      </div>
      <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" name="description" placeholder="Description">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
<x-back.layouts.partials.footer />
</x-back.layouts.master>