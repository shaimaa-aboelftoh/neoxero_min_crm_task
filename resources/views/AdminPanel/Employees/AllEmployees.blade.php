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
            <div class="col-sm-12">
                <div class="card-box table-responsive">

                    <h4 class="m-t-0 m-b-30 header-title"><b>إداره الموظفين</b>
                        <span class="pull-left">
                            <a href="{{url('/Employees/create')}}"
                               class="btn btn-info btn-rounded w-md waves-effect waves-light">إضافه موظف</a>
                        </span>
                    </h4>

                    <div class="table-responsive">
                        <table class="table m-0 table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الإسم</th>
                                <th>الشركه التابع لها</th>
                                <th>بيانات التواصل</th>
                                <th>الإجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $x = 1; ?>
                            @foreach($employees as $employee)
                                <tr id="row_{{$x}}">
                                    <th>{{$x}}</th>
                                    <td>{{$employee->firstName .' '.$employee->lastName}}</td>
                                    <td>{{$employee->company->name}}</td>
                                    <td>
                                        <span class="text-pink">رقم الهاتف : </span>
                                        <span>{{$employee->phone != ''?$employee->phone : '---'}}</span>
                                        <div class="clearfix m-b-10"></div>
                                        <span class="text-pink">البريد الإلكتروني : </span>
                                        <span>{{$employee->email != ''?$employee->email : '---'}}</span>

                                    </td>
                                    <td>
                                        <a href="{{url('/Employees/'.$employee->id)}}"
                                           class="btn actions btn-info waves-effect waves-light"> <i
                                                    class="fa fa-eye m-r-5"></i> <span>معاينه</span> </a>
                                        <div class="clearfix m-b-5"></div>
                                        <a href="{{url('/Employees/'.$employee->id.'/edit')}}"
                                           class="btn actions btn-success waves-effect waves-light"> <i
                                                    class="fa fa-edit m-r-5"></i> <span>تعديل</span> </a>
                                        <div class="clearfix m-b-5"></div>

                                        <a href=" {{route('Employees.destroy',['id'=>$employee->id])}}"
                                           onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
                                           class="btn actions btn-danger waves-effect waves-light">
                                            <i class="fa fa-trash m-r-5"></i> <span>حذف</span> </a>
                                        <form id="delete-form"
                                              action="{{ route('Employees.destroy',['id'=>$employee->id]) }}"
                                              method="POST" style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                                <?php $x++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$employees->links()}}

                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container -->

@endsection
