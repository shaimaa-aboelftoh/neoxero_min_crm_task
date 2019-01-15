<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->paginate(10);
        return view('AdminPanel.Companies.AllCompanies')
            ->with([
                'pageTitle'=>'إداره الشركات',
                'active'=>'Companies',
                'companies'=>$companies,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Companies.CreateCompany')
            ->with([
                'pageTitle'=>'إضافه شركه',
                'active'=>'Companies',
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
            'company_name' => 'required|max:180',
            'email' => 'nullable|email',
            'company_logo' => 'required|image|dimensions:min_width=100,min_height=100',
            'company_website' => 'nullable|url'
        ]);
        $company = new Company();
        $company->name = $request['company_name'];
        $company->email = $request['email'];
        $company->website = $request['company_website'];
        if ($company->save()) {
            if ($request->hasFile('company_logo')) {
                $file = $request['company_logo'];
                $FileExt = $file->extension();
                $NewFileName = time() . '_' . $company->id . '_' . rand(1, 99999999) . '.' . $FileExt;
                $file->storeAs('companies/' . $company->id, $NewFileName);
                $company->logo = $NewFileName;
                $company->update();
            }
            session()->flash('Success', 'تم إضافه الشركه بنجاح');
            return redirect('/Companies/');
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
        $company=Company::find($id);
        return view('AdminPanel.Companies.SingleCompany')
            ->with([
                'pageTitle'=>$company->name,
                'active'=>'Companies',
                'company'=>$company,
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
        $company=Company::find($id);
        return view('AdminPanel.Companies.UpdateCompany')
            ->with([
                'pageTitle'=>$company->name,
                'active'=>'Companies',
                'company'=>$company,
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
        $company=Company::find($id);
        $this->validate($request, [
            'company_name' => 'required|max:180',
            'email' => 'nullable|email',
            'company_logo' => 'nullable|image|dimensions:min_width=100,min_height=100',
            'company_website' => 'nullable|url'
        ]);
        $company->name = $request['company_name'];
        $company->email = $request['email'];
        $company->website = $request['company_website'];
        if ($company->update()) {
            if ($request->hasFile('company_logo')) {
                $file = $request['company_logo'];
                $FileExt = $file->extension();
                $NewFileName = time() . '_' . $company->id . '_' . rand(1, 99999999) . '.' . $FileExt;
                $file->storeAs('companies/' . $company->id, $NewFileName);
                $company->logo = $NewFileName;
                $company->update();
            }
            session()->flash('Success', 'تم تعديل بيانات الشركه بنجاح');
            return redirect('/Companies/');
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
        $company=Company::find($id);
        $FolderPath = base_path() . '/storage/app/companies/' . $company->id;
        if (File::exists($FolderPath)) {
            File::deleteDirectory($FolderPath);
        }
        if ($company->delete()) {
            session()->flash('Success', 'تم حذف الشركه بنجاح');
            return redirect('/Companies/');
        } else {
            session()->flash('Faild', 'حدث خطأ ما من فضلك حاول مره أخرى');
            return back();
        }
    }
}
