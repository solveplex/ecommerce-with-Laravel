@extends('admin.layout.master')

@section('added')

<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="{{$title or 'Pages'}}">All Pages <a href="{{url('/adminme/pages/create')}}"><button class="btn btn-primany">Add New Page</button></a></h4></div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add New pages</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Product Order List</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table product-overview" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>SL NO</th>
                                            <th>Page Name</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    @php
                                    $sl=1;
                                    @endphp
                                    <tbody>
                                    	@foreach($pages as $page)

                                        <tr>
                                        	<td>
                                          	<a href="{{url ('adminme/pages/'.$page->id .'/edit')}}">
                                            {{$sl++ }}
                                            </a></td>
                                            <td>
                                          	<a href="{{url('adminme/pages/'.$page->id .'/edit')}}">
                                            {{$page->name}}
                                            </a></td>
                                            <td> {{$page->slug}}</td>
                                            <td>{{$page->description}}</td>

                                            <td>
                                            	@if($page->status==1)
                                            	Published
                                            	@else
                                            	Draft
                                            	@endif
                                            </td>
                                            
                                            
                                            <td>
                                            	<a href="{{url('adminme/pages/' .$page->id . '/edit')}}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a>

                                            	<a href="{{ url('adminme/pages/delete/' . $page->id)}}" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a>

                                            </td>
                                            
                                        </tr>
                                        @endforeach()

                                    </tbody>
                                </table>
                                {!! $pages->render()!!}
                            </div>
                        </div>
                    </div>
                </div>

 
@endsection()