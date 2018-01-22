<?php

namespace App\Http\Controllers;

use App\AccountGroup;
use Illuminate\Http\Request;

class AccountGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account_group.index',[
          'data' => AccountGroup::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account_group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AccountGroup::create($request->all());
        return redirect(route('account_group.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccountGroup  $accountGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AccountGroup $accountGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccountGroup  $accountGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountGroup $accountGroup)
    {
        return view('account_group.edit',[
          'data' => $accountGroup
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccountGroup  $accountGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccountGroup $accountGroup)
    {
        $accountGroup->update($request->all());
        return redirect(route('account_group.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccountGroup  $accountGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountGroup $accountGroup)
    {
        $accountGroup->delete();
        return redirect(route('account_group.index'));
    }
}
