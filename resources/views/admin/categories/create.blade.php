@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
                        <div class="my-3">
                            <h1 class="mt-4 d-inline">Create</h1>
                            <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end">Cancel</a>
                        </div>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Create</a></li>
                            <li class="breadcrumb-item active">Create Category</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Post List
                            </div>
                            <div class="card-body">
                               <form action="{{route('backend.categories.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}">
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
                               
                                <button type="submit" class="form-control" class="btn btn-primary">Save</button>
                               </form>
                            </div>
                           
                        </div>
                    </div>




@endsection