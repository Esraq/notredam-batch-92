<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,[



            'filename'=>'required|min:1',
            'college_roll_no' => 'required|min:1',
            'nid_card_no' => 'required|min:3',
            'fathers_name'=>'required|min:2',
            'mothers_name'=>'required|min:2',
            'spouse_name'=>'required|min:2',
            'children_no'=>'required|min:1',
            'present_address' => 'required|min:5',
            'permanent_address' => 'required|min:5',
            'profession' => 'required|min:10',
            'designation' => 'required|min:3',
            'phone' => 'required|min:10',
            'email'=> 'required|min:1',
            'blood_group'=> 'required|min:1',
            'member_fee'=>'required|min:1',
            'registration_date' => 'required|min:1'
        ]);













        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $member=new Member;

        $member->filename=$name;
        $member->name=$request->get('name');
        $member->college_roll_no=$request->get('college_roll_no');
        $member->nid_card_no=$request->get('nid_card_no');
        $member->fathers_name=$request->get('fathers_name');
        $member->mothers_name=$request->get('mothers_name');
        $member->spouse_name=$request->get('spouse_name');
        $member->children_no=$request->get('children_no');
        $member->present_address=$request->get('present_address');
        $member->permanent_address=$request->get('permanent_address');
        $member->profession=$request->get('profession');
        $member->designation=$request->get('designation');
        $member->phone=$request->get('phone');
        $member->email=$request->get('email');
        $member->blood_group=$request->get('blood_group');
        $member->member_fee=$request->get('member_fee');
        $member->registration_date=$request->get('registration_date');

        $member->save();

       return redirect('/')->with('success', true);

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
    public function edit($id)
    {
        $member =Member::find($id);
        return view('/profile_edit',compact('member','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member= \App\Member::find($id);
        $member->name=$request->get('name');
        $member->college_roll_no=$request->get('college_roll_no');
        $member->nid_card_no=$request->get('nid_card_no');
        $member->fathers_name=$request->get('fathers_name');
        $member->mothers_name=$request->get('mothers_name');
        $member->spouse_name=$request->get('spouse_name');
        $member->children_no=$request->get('children_no');
        $member->present_address=$request->get('present_address');
        $member->permanent_address=$request->get('permanent_address');
        $member->profession=$request->get('profession');
        $member->designation=$request->get('designation');
        $member->phone=$request->get('phone');
        $member->email=$request->get('email');
        $member->blood_group=$request->get('blood_group');
        $member->member_fee=$request->get('member_fee');
        $member->save();
        return redirect('profile')->with('success', true);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
