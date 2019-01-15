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
                    <p class="text-muted small m-b-30">يمكنك الإطلاع علي بيانات الشركه فقط</p>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::open(['files'=>true]) !!}
                            {!! csrf_field() !!}
                            <div class="col-md-4">
                                <label class="control-label" for="company_name">إسم الشركه</label>
                                {!! Form::text('company_name',$company->name,['id'=>'company_name','class'=>'form-control','placeholder'=>'','readonly']) !!}
                            </div>
                            <div class="col-md-4">
                                <label class="control-label" for="email">البريد الإلكتروني</label>
                                {!! Form::email('email',$company->email,['id'=>'email','class'=>'form-control','placeholder'=>'' ,'readonly']) !!}
                            </div>
                            <div class="col-md-4">
                                <label class="control-label" for="company_website">رابط الموقع الإلكتروني</label>
                                {!! Form::text('company_website',$company->website,['id'=>'company_website','class'=>'form-control','placeholder'=>'','readonly']) !!}
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-4">
                                <label class="control-label">لوجو الشركه</label>
                                <div class="clearfix">
                                <a href="{{url('/storage/app/companies/'.$company->id.'/'.$company->logo)}}"
                                   target="_blank">
                                    <img src="{{url('/storage/app/companies/'.$company->id.'/'.$company->logo)}}"
                                         width="300" height="auto">
                                </a>
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
