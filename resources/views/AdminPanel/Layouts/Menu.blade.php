<ul>
    <li>
        <a href="{{url('/')}}" class="waves-effect  {{$active=='Index' ? 'active' :''}}">
            <i class="mdi mdi-home"></i>
            <span> الرئيسيه </span> </a>
    </li>
    <li>
        <a href="{{url('/Companies')}}" class="waves-effect {{$active=='Companies' ? 'active' :''}}">
            <i class="mdi mdi-grease-pencil"></i>
            <span>إداره الشركات</span>
        </a>
    </li>

    <li>
        <a href="{{url('/Employees')}}" class="waves-effect {{$active=='Employees' ? 'active' :''}}">
            <i class=" mdi mdi-account-multiple"></i>
            <span>إداره الموظفين </span>
        </a>
    </li>
</ul>
