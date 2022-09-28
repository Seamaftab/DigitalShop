<x-back.layouts.master>
    <x-slot name="pageTitle">
        Edit 
    </x-slot>

    
    <x-back.elements.breadcrumb> 
        <x-slot name="pageHeader">
            Edit
        </x-slot>
        <li class="breadcrumb-item active">Edit</li>
    </x-back.elements.breadcrumb>
    
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit</h3>
                </div>
                    <div class="card-body">
                        <form action="{{ route('product.update',['product'=>$product->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                              <div class="mb-3 row">
                                <label for="inputTitle" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                  <input type="text" 
                                         class="form-control" 
                                         id="inputTitle" 
                                         placeholder="Name" 
                                         name="name"
                                         value="{{old('name',$product->name)}}">

                                  @error('name')
                                    <span class="small text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                              </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text"
                                           class="form-control" 
                                           placeholder="Slug"
                                           id="slug"
                                           name="slug"
                                           value="{{old('slug',$product->slug)}}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3">Details</label>
                                <div class="col-sm-9">
                                    <input type="text"
                                           class="form-control" 
                                           placeholder="Details"
                                           id="details"
                                           name="details"
                                           value="{{old('details',$product->details)}}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3">Price</label>
                                <div class="col-sm-9">
                                    <input type="text"
                                           class="form-control" 
                                           placeholder="Price"
                                           id="price"
                                           name="price"
                                           value="{{old('price',$product->price)}}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3">Description</label>
                                <div class="col-sm-9">
                                    <input type="text"
                                           class="form-control" 
                                           placeholder="Description"
                                           id="description"
                                           name="description"
                                           value="{{old('description',$product->description)}}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3">Picture</label>
                                <div class="col-sm-9">
                                    <input type="file"
                                           class="form-control"
                                           id="images"
                                           name="images"
                                           value="{{old('images',$product->images)}}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    
<x-back.layouts.partials.footer />
</x-back.layouts.master>