@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
                        <div class="my-3">
                            <h1 class="mt-4 d-inline">Items</h1>
                            <a href="{{route('backend.items.create')}}" class="btn btn-primary float-end">Create Item</a>
                        </div>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Items</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Post List
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>CodeNo</th>
                                            <th>Office</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>InStock</th>
                                            <th>Category</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>CodeNo</th>
                                            <th>Office</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>InStock</th>
                                            <th>Category</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                   <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item->code_no}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->InStock}}</td>
                                            <td>{{$item->category_id}}</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                <button href="" type="button" class="btn btn-sm btn-danger delete" data-id="{{$item->id}}">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                                </table>
                                {{$items->Links()}}
                            </div>
                        </div>
                    </div>


@endsection
@section('script')
<script>
    $(document).ready(function(){
        $('tbody').on('click','.delete',function(){
            alert('hello');
            let id = $(this).data('id');
            console.log(id);
        })
    })
</script>
@endsection