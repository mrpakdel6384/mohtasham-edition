<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::query();

        if($keyword = request('search'))
        {
            $agents->where('name' , 'LIKE' , "%{$keyword}%")->orWhere('role', 'LIKE' , "%{$keyword}%")->orWhere('id',$keyword);
        }

        $agents = $agents->latest()->paginate(20);

        return view('admin.agents.all' , compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name'=>'required',
            'admin'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'province'=>'required',
            'city'=>'required',
            'lng'=>'required',
            'lat'=>'required',
        ]);

        Agent::create($validData);

        alert()->success('نمایندگی با موفقیت ثبت شد');
        return redirect(route('admin.agents.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return view('admin.agents.edit' , compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        $validData = $request->validate([
            'name'=>'required',
            'admin'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'province'=>'required',
            'city'=>'required',
            'lng'=>'required',
            'lat'=>'required',
        ]);

        $agent->update($validData);

        alert()->success('نمایندگی با موفقیت ویرایش شد');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();

        alert()->success('نمایندگی با موفقیت حذف شد');

        return back();
    }
}
