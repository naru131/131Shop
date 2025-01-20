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
                                            <th>Name</th>
                                            <th>image</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>InStock</th>
                                            <th>Descripiton</th>
                                            <th>Category</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>CodeNo</th>
                                            <th>Name</th>
                                            <th>image</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>InStock</th>
                                            <th>Descripiton</th>
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
                                            <td><img src="{{$item->image}}" width="50" height="50" alt=""></td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->discount}}</td>
                                            <td>{{$item->InStock}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->category->name}}</td>
                                            <td>
                                                <a href="{{route('backend.items.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
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



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-light">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form action="" id="deletForm" method="post">
            @csrf
            @method('delete')
        </form>
        <button type="submit" class="btn btn-primary">OK</button>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
<script>
    $(document).ready(function(){
        $('tbody').on('click','.delete',fucntion(){
            // alert('hello');
            let id = $(this).data('id');
            // console.log(id);
            $('#deletForm').attr('action',`items/${id}`);
            $('#deleteModal').modal('show');
        })
    })
</script>
@endsection