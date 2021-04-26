<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ykien;
use Illuminate\Support\Carbon;

class YKienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $idTin = $request->get('idTin');
        $yk = new ykien([
            'idTin' => $request->get('idTin'),
            'Ngay' => now(),
            'NoiDung' => $request->get('NoiDung'),
            'Email' => $request->get('email'),
            'HoTen' => $request->get('HoTen'),
            'AnHien' => 1,    
        ]);
        $yk->save();
        // return redirect('/tin/{$idTin}')->with('success','Loại tin đã được lưu');
        if ($yk){
            return back()->with('success','Đã đăng bình luận');
        }
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
        //
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
        //
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
