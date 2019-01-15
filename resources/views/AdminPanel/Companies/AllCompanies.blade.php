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

                    <h4 class="m-t-0 m-b-30 header-title"><b>إداره الشركات</b>
                        <span class="pull-left">
                            <a href="{{url('/Companies/create')}}"
                               class="btn btn-info btn-rounded w-md waves-effect waves-light">إضافه شركه</a>
                        </span>
                    </h4>

                    <div class="table-responsive">
                        <table class="table m-0 table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>إسم الشركه</th>
                                <th>البريد الإلكتروني</th>
                                <th>اللوجو/الموقع</th>
                                <th>الإجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $x = 1; ?>
                            @foreach($companies as $company)
                                <tr id="row_{{$x}}">
                                    <th>{{$x}}</th>
                                    <td>{{$company->name}}</td>
                                    <td>{{$company->email != '' ? $company->email : 'لا يوجد'}}</td>
                                    <td>
                                        <a href="{{$company->website != null ? $company->website : 'javascript:avoid'}}"
                                           target="_blank">
                                            <img src="{{asset('storage/app/companies/'.$company->id.'/'.$company->logo)}}"
                                                 width="auto" height="100">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{url('/Companies/'.$company->id)}}" class="btn actions btn-info waves-effect waves-light"> <i
                                                    class="fa fa-eye m-r-5"></i> <span>معاينه</span> </a>
                                        <div class="clearfix m-b-5"></div>
                                        <a href="{{url('/Companies/'.$company->id.'/edit')}}" class="btn actions btn-success waves-effect waves-light"> <i
                                                    class="fa fa-edit m-r-5"></i> <span>تعديل</span> </a>
                                        <div class="clearfix m-b-5"></div>

                                        <a href=" {{route('Companies.destroy',['id'=>$company->id])}}"
                                           onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
                                           class="btn actions btn-danger waves-effect waves-light">
                                            <i class="fa fa-trash m-r-5"></i> <span>حذف</span> </a>
                                        <form id="delete-form" action="{{ route('Companies.destroy',['id'=>$company->id]) }}" method="POST" style="display: none;">
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
                    {{$companies->links()}}

                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container -->

@endsection
