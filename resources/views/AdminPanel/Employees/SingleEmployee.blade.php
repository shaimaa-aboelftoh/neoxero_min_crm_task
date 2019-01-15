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
                    <p class="text-muted small m-b-30">يمكنك الإطلاع علي بيانات الموظف فقط</p>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::open(['files'=>true]) !!}
                            {!! csrf_field() !!}
                            <div class="col-md-2">
                                <label class="control-label" for="firstName">الإسم الأول</label>
                                {!! Form::text('firstName',$employee->firstName,['id'=>'firstName','class'=>'form-control','placeholder'=>'','readonly']) !!}
                            </div>
                            <div class="col-md-2">
                                <label class="control-label" for="lastName">الإسم الأخير</label>
                                {!! Form::text('lastName',$employee->lastName,['id'=>'lastName','class'=>'form-control','placeholder'=>'','readonly']) !!}
                            </div>
                            <div class="col-md-4">
                                <label class="control-label" for="email">البريد الإلكتروني</label>
                                {!! Form::email('email',$employee->email,['id'=>'email','class'=>'form-control','placeholder'=>'مثال : name@domain.com','readonly']) !!}
                            </div>
                            <div class="col-md-4">
                                <label class="control-label" for="phone">رقم الهاتف</label>
                                {!! Form::text('phone',$employee->phone,['id'=>'phone','class'=>'form-control','placeholder'=>'مثال : 01001001001','readonly']) !!}
                            </div>
                            <div class="clearfix m-b-10"></div>
                            <div class="col-md-4">
                                <label class="control-label" for="company_id">الشركه التابع لها</label>
                                {!! Form::text('company_id',$employee->company->name,['id'=>'company_id','class'=>'form-control','readonly']) !!}
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
