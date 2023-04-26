<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Package::all();
        return view('holidaypackage.dashboard',['packages'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('holidaypackage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageRequest $request)
    {
        $formdata = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'longDescription' => 'required'
        ]);

      

        $data = [
            'title'  => $request['title'],
            'description'  => $request['description'],
            'location' => $request['location'],
            'longDescription' => $request['longDescription'],
            'price'  => $request['price'],
            'tags'  => $request['tags'],
            'numberOfdaysItenary'  => $request['numberOfdaysItenary'],
            'coverImage'  => $request['coverImage'],
            'itenaryday1'  => $request['itenaryday1'],
            'itenaryday2'  => $request['itenaryday2'],
            'itenaryday3'  => $request['itenaryday3'],
            'itenaryday4'  => $request['itenaryday4'],
            'itenaryday5'  => $request['itenaryday5'],
            'itenaryday6'  => $request['itenaryday6'],
            'itenaryday7'  => $request['itenaryday7'],
            'itenaryday8'  => $request['itenaryday8'],
            'itenaryday9'  => $request['itenaryday9'],
            'itenaryday10'  => $request['itenaryday10'],
            'itenaryday11'  => $request['itenaryday11'],
            'itenaryday12'  => $request['itenaryday12'],
            'itenaryday13'  => $request['itenaryday13'],
            'itenaryday14'  => $request['itenaryday14'],
            'itenaryday15'  => $request['itenaryday15'],
            'itenaryday16'  => $request['itenaryday16'],
            'itenaryday17'  => $request['itenaryday17'],
            'itenaryday18'  => $request['itenaryday18'],
            'itenaryday19'  => $request['itenaryday19'],
            'itenaryday20'  => $request['itenaryday20'],
            'itenaryday21'  => $request['itenaryday21'],
            'itenaryday22'  => $request['itenaryday22'],
            'itenaryday23'  => $request['itenaryday23'],
            'itenaryday24'  => $request['itenaryday24'],
            'itenaryday25'  => $request['itenaryday25'],
            'itenaryday26'  => $request['itenaryday26'],
            'itenaryday27'  => $request['itenaryday27'],
            'itenaryday28'  => $request['itenaryday28'],
            'itenaryday29'  => $request['itenaryday29'],
            'itenaryday30'  => $request['itenaryday30'],
            'itenaryday31'  => $request['itenaryday31'],
            'itenaryday32'  => $request['itenaryday32'],
            'itenaryday33'  => $request['itenaryday33'],
            'itenaryday34'  => $request['itenaryday34'],
            'itenaryday35'  => $request['itenaryday35'],
            'itenaryday36'  => $request['itenaryday36'],
            'itenaryday37'  => $request['itenaryday37'],
            'itenaryday38'  => $request['itenaryday38'],
            'itenaryday39'  => $request['itenaryday39'],
            'itenaryday40'  => $request['itenaryday40'],
            'itenaryday41'  => $request['itenaryday41'],
            'itenaryday42'  => $request['itenaryday42'],
            'itenaryday43'  => $request['itenaryday43'],
            'itenaryday44'  => $request['itenaryday44'],
            'itenaryday45'  => $request['itenaryday45'],
            'itenaryday46'  => $request['itenaryday46'],
            'itenaryday47'  => $request['itenaryday47'],
            'itenaryday48'  => $request['itenaryday48'],
            'itenaryday49'  => $request['itenaryday49'],
            'itenaryday50'  => $request['itenaryday50'],
        ];

        if($request->hasFile('coverImage')){
            $data['coverImage'] = $request->file('coverImage')->store('coverImages','public');
        }
     
        Package::create($data);
        return redirect('/package')->with('sucess', 'Package has been created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        $data = Package::find($package->id);
        //dd($data);
        return view('holidaypackage.edit',['package'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        $formdata = $request -> validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'longDescription' => 'required'
        ]);
        
        $findPackage = Package::find($request->id);
        $data = [
            'title'  => $request['title'],
            'description'  => $request['description'],
            'location' => $request['location'],
            'longDescription' => $request['longDescription'],
            'price'  => $request['price'],
            'tags'  => $request['tags'],
            'numberOfdaysItenary'  => $request['numberOfdaysItenary'],
            'coverImage'  => $request['coverImage'],
            'itenaryday1'  => $request['itenaryday1'],
            'itenaryday2'  => $request['itenaryday2'],
            'itenaryday3'  => $request['itenaryday3'],
            'itenaryday4'  => $request['itenaryday4'],
            'itenaryday5'  => $request['itenaryday5'],
            'itenaryday6'  => $request['itenaryday6'],
            'itenaryday7'  => $request['itenaryday7'],
            'itenaryday8'  => $request['itenaryday8'],
            'itenaryday9'  => $request['itenaryday9'],
            'itenaryday10'  => $request['itenaryday10'],
            'itenaryday11'  => $request['itenaryday11'],
            'itenaryday12'  => $request['itenaryday12'],
            'itenaryday13'  => $request['itenaryday13'],
            'itenaryday14'  => $request['itenaryday14'],
            'itenaryday15'  => $request['itenaryday15'],
            'itenaryday16'  => $request['itenaryday16'],
            'itenaryday17'  => $request['itenaryday17'],
            'itenaryday18'  => $request['itenaryday18'],
            'itenaryday19'  => $request['itenaryday19'],
            'itenaryday20'  => $request['itenaryday20'],
            'itenaryday21'  => $request['itenaryday21'],
            'itenaryday22'  => $request['itenaryday22'],
            'itenaryday23'  => $request['itenaryday23'],
            'itenaryday24'  => $request['itenaryday24'],
            'itenaryday25'  => $request['itenaryday25'],
            'itenaryday26'  => $request['itenaryday26'],
            'itenaryday27'  => $request['itenaryday27'],
            'itenaryday28'  => $request['itenaryday28'],
            'itenaryday29'  => $request['itenaryday29'],
            'itenaryday30'  => $request['itenaryday30'],
            'itenaryday31'  => $request['itenaryday31'],
            'itenaryday32'  => $request['itenaryday32'],
            'itenaryday33'  => $request['itenaryday33'],
            'itenaryday34'  => $request['itenaryday34'],
            'itenaryday35'  => $request['itenaryday35'],
            'itenaryday36'  => $request['itenaryday36'],
            'itenaryday37'  => $request['itenaryday37'],
            'itenaryday38'  => $request['itenaryday38'],
            'itenaryday39'  => $request['itenaryday39'],
            'itenaryday40'  => $request['itenaryday40'],
            'itenaryday41'  => $request['itenaryday41'],
            'itenaryday42'  => $request['itenaryday42'],
            'itenaryday43'  => $request['itenaryday43'],
            'itenaryday44'  => $request['itenaryday44'],
            'itenaryday45'  => $request['itenaryday45'],
            'itenaryday46'  => $request['itenaryday46'],
            'itenaryday47'  => $request['itenaryday47'],
            'itenaryday48'  => $request['itenaryday48'],
            'itenaryday49'  => $request['itenaryday49'],
            'itenaryday50'  => $request['itenaryday50'],
        ];

        if($request->hasFile('coverImage')){
            $data['coverImage'] = $request->file('coverImage')->store('coverImages','public');
        }
        else{
            $data['coverImage'] = $findPackage->coverImage;
        }
        $package->update($data);
        return redirect('/package')->with('sucess', 'Package has been updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('/package')->with('error', 'Package has been Deleted Sucessfully');
    }
}
