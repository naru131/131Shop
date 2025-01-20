@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
                        <div class="my-3">
                            <h1 class="mt-4 d-inline">Orders</h1>
                            <a href="{{route('backend.orderComplete')}}" class="btn btn-success float-end">Order Complete List </a>
                            <a href="{{route('backend.orderAccept')}}" class="btn btn-primary float-end">Order Accept List </a>
                            <a href="{{route('backend.orders')}}" class="btn btn-secondary float-end">Order List </a>
                        </div>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Order List
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Voucher No</th>
                                            <th>User Name</th>
                                            <th>Status</th>
                                            <!-- <th>Price</th> -->
                                            <th>Payment Method</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Voucher No</th>
                                            <th>User Name</th>
                                            <th>Status</th>
                                            <!-- <th>Price</th> -->
                                            <th>Payment Method</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                   <tbody>
                                  @php
                                  $i = 1;
                                  @endphp
                                  @foreach($order_data as $order)
                                  <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$order->voucher_no}}</td>
                                    <td>{{$order->user->name}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>
                                        <img src="{{$order->payment->logo}}" width="50" alt="">
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-info">Detail</a>
                                    </td>
                                  </tr>
                                @endforeach
                                   </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>





@endsection