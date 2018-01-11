@extends('admin.layout.master')

@section('added')

<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Product Edit</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Page Edit</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">Edit Page</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    {!! Form::open([
                                        'url' => '/adminme/pages/'.$page->id ,
                                        'method'=>'PUT'

                                    ]) !!}
                                    @include('admin/message');
                                        <div class="form-body">
                                            <h3 class="box-title">About Page</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Product Name</label>
                                                        {!! Form::text('name', $page->name, [
                                                        'class' => 'form-control',
                                                        'placeholder'=>'Enter Your Page Name'
                                                    ] )!!} </div>
                                                </div>

                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                              
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Slug</label>
                                                        {!! Form::text('slug', $page->slug, [
                                                        'class' => 'form-control',
                                                        'placeholder'=>'Enter Your Page slug'
                                                    ] )!!}</div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                           
                                            
                                            <h3 class="box-title m-t-40">Page Description</h3>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        {!! Form::textarea('description', $page->description, [
                                                        'class' => 'form-control',
                                                        'placeholder'=>'Enter Your Page Description'
                                                    ] )!!}
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                            	
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Status</label>
                                                        <div class="radio-list">
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                   

                                                                    {!! Form::radio('status', '1',true, [
                                                        				'class' => 'form-control',
                                                        				
                                                        
                                                    				] )!!}

                                                
                                                                    <label for="0">Published</label>
                                                                </div>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    {!! Form::radio('status', '0', [
                                                        						'class' => 'form-control'
                                                        						
                                                        
                                                    				] )!!}
                                                                    <label for="1">Draft</label>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"></div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                           

</div>
                                        <div class="form-actions m-t-40">
                                            
                                             {!! Form::submit('Update Page',  [
                                                      'class' => 'btn btn-success'
                                                        
                                                 ] )!!}
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection()

@section('footer-script')

<script type="text/javascript" src="{{asset('js/tinymce.min.js')}}""></script>

<script>
	
	tinymce.init({
		selector: 'textarea'
	});
</script>

@endsection()