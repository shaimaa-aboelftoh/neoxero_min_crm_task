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
                            <a href="{{url('/Employees')}}">إداره الموظفين</a>
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
                    <p class="text-muted small m-b-30">من فضلك قم بإدخال البيانات التاليه لإضافه الموظف</p>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::open(['files'=>true,'url'=>url('/Employees'),'method'=>'post']) !!}
                            @csrf
                            <div class="col-md-2">
                                <div class="form-group {{$errors->has('firstName') ? 'has-error' :''}}">
                                    <label class="control-label" for="firstName">الإسم الأول</label>
                                    {!! Form::text('firstName','',['id'=>'firstName','class'=>'form-control','placeholder'=>'']) !!}
                                    @if($errors->has('firstName'))
                                        <label id="firstName-error" class="control-label"
                                               for="firstName">{{ $errors->first('firstName') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group {{$errors->has('lastName') ? 'has-error' :''}}">
                                    <label class="control-label" for="lastName">الإسم الأخير</label>
                                    {!! Form::text('lastName','',['id'=>'lastName','class'=>'form-control','placeholder'=>'']) !!}
                                    @if($errors->has('lastName'))
                                        <label id="lastName-error" class="control-label"
                                               for="lastName">{{ $errors->first('lastName') }}</label>
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
                                <div class="form-group {{$errors->has('phone') ? 'has-error' :''}}">
                                    <label class="control-label" for="phone">رقم الهاتف</label>
                                    {!! Form::text('phone','',['id'=>'phone','class'=>'form-control','placeholder'=>'مثال : 01001001001']) !!}
                                    @if($errors->has('phone'))
                                        <label id="phone-error" class="control-label"
                                               for="phone">{{ $errors->first('phone') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-4">
                                <div class="form-group {{$errors->has('company_id') ? 'has-error' :''}}">
                                    <label class="control-label" for="company_id">الشركه التابع لها</label>
                                    {!! Form::select('company_id',$select_company,'',['id'=>'company_id','class'=>'form-control']) !!}
                                    @if($errors->has('company_id'))
                                        <label id="company_id-error" class="control-label"
                                               for="company_id">{{ $errors->first('company_id') }}</label>
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
