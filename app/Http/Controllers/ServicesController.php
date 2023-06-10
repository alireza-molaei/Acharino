<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateServicesRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {
        $services = service::all()->take(6);
        return view('services/services', compact('services'));
    }

    public function show()
    {
        $services = Service::all()->take(6);
        return view('admin.services.services-show', compact('services'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.services-edit', compact('service'));
    }

    public function update(UpdateServicesRequest $request, Service $service)
    {
        if ($request->hasFile('thumbnail')){
            $inputs = $request->all();
            $path = Storage::putFile('services', $request->file('thumbnail'));
            $inputs['thumbnail'] = $path;
            $service->update($inputs);
        }else{
            $service->update($request->all());
        }
        return redirect()->route('services.show')->with('alert', __('messages.success'));

    }
}
