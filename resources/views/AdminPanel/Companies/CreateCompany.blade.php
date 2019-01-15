@extends('AdminPanel.Layouts.Master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="{{url('/')}}">الرئيسيه</a>
                        </li>
                        <li>
                            <a href="{{url('/Companies')}}">إداره الشركات</a>
                        </li>
                        <li class="active">
                            {{$pageTitle}}
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">

            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-10">{{$pageTitle}}</h4>
                    <p class="text-muted small m-b-30">من فضلك قم بإدخال البيانات التاليه لإضافه الشركه</p>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::open(['files'=>true,'url'=>url('/Companies'),'method'=>'post']) !!}
                            @csrf
                            <div class="col-md-4">
                                <div class="form-group {{$errors->has('company_name') ? 'has-error' :''}}">
                                    <label class="control-label" for="company_name">إسم الشركه</label>
                                    {!! Form::text('company_name','',['id'=>'company_name','class'=>'form-control','placeholder'=>'']) !!}
                                    @if($errors->has('company_name'))
                                        <label id="company_name-error" class="control-label"
                                               for="company_name">{{ $errors->first('company_name') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{$errors->has('email') ? 'has-error' :''}}">
                                    <label class="control-label" for="email">البريد الإلكتروني</label>
                                    {!! Form::email('email','',['id'=>'email','class'=>'form-control','placeholder'=>'مثال : name@domain.com']) !!}
                                    @if($errors->has('email'))
                                        <label id="email-error" class="control-label"
                                               for="email">{{ $errors->first('email') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{$errors->has('company_website') ? 'has-error' :''}}">
                                    <label class="control-label" for="company_website">رابط الموقع الإلكتروني</label>
                                    {!! Form::text('company_website','',['id'=>'company_website','class'=>'form-control','placeholder'=>'مثال : http://neoxero.com']) !!}
                                    @if($errors->has('company_website'))
                                        <label id="company_website-error" class="control-label"
                                               for="company_website">{{ $errors->first('company_website') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-4">
                                <div class="form-group  {{$errors->has('company_logo') ? 'has-error' :''}}">
                                    <label class="control-label">لوجو الشركه</label>
                                    <input type="file" name="company_logo" data-placeholder="100*100 علي الأقل" class="filestyle" data-buttontext="إختر صوره"
                                           data-buttonname="btn-default">
                                    @if($errors->has('company_logo'))
                                        <label id="company_logo-error" class="control-label"
                                               for="company_logo">{{ $errors->first('company_logo') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">حفظ</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->

@endsection

@section('script')
    <script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/detect.js"></script>
    <script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/fastclick.js"></script>
    <script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/jquery.blockUI.js"></script>
    <script src="{{url('/')}}/ProjectAttachments/AdminAssets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>

@endsection
