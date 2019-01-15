<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('id', 'desc')->paginate(10);
        return view('AdminPanel.Employees.AllEmployees')
            ->with([
                'pageTitle'=>'إداره الموظفين',
                'active'=>'Employees',
                'employees' => $employees
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::orderBy('id', 'desc')->get();
        $select_company=[];
        foreach ($companies as $company){
            $select_company[$company->id]=$company->name;
        }
        return view('AdminPanel.Employees.CreateEmployee')
            ->with([
                'pageTitle'=>'إضافه موظف',
                'active'=>'Employees',
                'select_company' => $select_company,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|max:180',
            'lastName' => 'required|max:180',
            'company_id' => 'required',
            'email' => 'nullable|email|unique:employees,email',
            'phone' => 'nullable|numeric|unique:employees,phone',
        ]);
        $employee = new Employee();
        $employee->firstName = $request['firstName'];
        $employee->lastName = $request['lastName'];
        $employee->company_id = $request['company_id'];
        $employee->email = $request['email'];
        $employee->phone = $request['phone'];
        if ($employee->save()) {
            session()->flash('Success', 'تم إضافه الموظف بنجاح');
            return redirect('/Employees/');
        } else {
            session()->flash('Faild', 'حدث خطأ ما من فضلك حاول مره أخرى');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('AdminPanel.Employees.SingleEmployee')
            ->with([
                'pageTitle'=>$employee->firstName,
                'active'=>'Employees',
                'employee' => $employee
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Company::orderBy('id', 'desc')->get();
        $select_company=[];
        foreach ($companies as $company){
            $select_company[$company->id]=$company->name;
        }
        $employee = Employee::find($id);
        return view('AdminPanel.Employees.UpdateEmployee')
            ->with([
                'pageTitle'=>$employee->firstName,
                'active'=>'Employees',
                'select_company' => $select_company,
                'employee' => $employee
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $this->validate($request, [
            'firstName' => 'required|max:180',
            'lastName' => 'required|max:180',
            'company_id' => 'required',
            'email' => 'nullable|email|unique:employees,email,' . $employee->id,
            'phone' => 'nullable|numeric|unique:employees,phone,' . $employee->id,
        ]);
        $employee->firstName = $request['firstName'];
        $employee->lastName = $request['lastName'];
        $employee->company_id = $request['company_id'];
        $employee->email = $request['email'];
        $employee->phone = $request['phone'];
        if ($employee->update()) {
            session()->flash('Success', 'تم تعديل بيانات الموظف بنجاح');
            return redirect('/Employees/');
        } else {
            session()->flash('Faild', 'حدث خطأ ما من فضلك حاول مره أخرى');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        if ($employee->delete()) {
            session()->flash('Success', 'تم حذف الموظف بنجاح');
            return redirect('/Employees/');
        } else {
            session()->flash('Faild', 'حدث خطأ ما من فضلك حاول مره أخرى');
            return back();
        }

    }
}
