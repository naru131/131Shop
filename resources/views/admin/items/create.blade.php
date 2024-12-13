@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                        <div class="my-3">
                            <h1 class="mt-4 d-inline">Create</h1>
                            <a href="{{route('backend.items.store')}}" class="btn btn-primary float-end">Create Item</a>
                        </div>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Post List
                            </div>
                            <div class="card-body">
                               <form action="{{route('backend.items.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="codeno" class="form-label">CodeNo</label>
                                    <input type="number" class="form-control @error('code_no') is-invalid @enderror" name="code_no" id="codeno" value="{{old('code_no')}}">
                                    @error('code_no')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="itemname" class="form-label">Item Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="itemname" id="name" value="{{old('name')}}">
                                    @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label">Image</label>
                                    <input type="file" accept="image/*" class="form-control @error('image') is-inavlid @enderror"  name="image" id="img" value="{{old('image')}}">
                                    @error('image')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror   
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{old('price')}}">
                                    @error('price')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="discount" class="form-label">Discount</label>
                                    <input type="number" class="form-control @error('discount') is-invalid @enderror" name="discount" id="discount" value="{{old('discount')}}">
                                    @error('discount')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="instock" class="form-label">InStock</label>
                                    <select class="form-select @error('in_stock') is-invalid @enderror" name="in_stock" id="" value="{{old('in_stock')}}">
                                        <option value="1" selected>Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    @error('in_stock')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <!-- <input type="text" class="form-control" name="category_id" id="category" placeholder="Choose Categroy"> -->
                                    <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" id="">
                                        <option value="">Choose Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{old('category_id') == $category->id ?'selected':''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}"></textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="form-control" class="btn btn-primary">Save</button>
                               </form>
                            </div>
                           
                        </div>
                    </div>



@endsection