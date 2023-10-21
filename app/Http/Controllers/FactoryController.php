<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFactoryRequest;
use App\Http\Requests\UpdateFactoryRequest;
use App\Models\Factory;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('factory', ['factories' => Factory::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factoryAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFactoryRequest $request)
    {
        $factory = new Factory;
        $factory->factory_name = $request->factory_name;
        $factory->location = $request->location;
        $factory->email = $request->email;
        $factory->website = $request->website;
        $factory->save();
        return redirect()->route('factories.create')->with('status', 'Factory  has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Factory $factory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factory $factory)
    {
        return view('factoryedit', ['factory' => $factory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFactoryRequest $request, Factory $factory)
    {
        $factory->factory_name = $request->factory_name;
        $factory->location = $request->location;
        $factory->email = $request->email;
        $factory->website = $request->website;
        $factory->save();
        return redirect()->route('factories.edit', ['factory' => $factory->id])->with('status', 'Factory has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factory $factory)
    {
        $factory->delete();
    }
}
