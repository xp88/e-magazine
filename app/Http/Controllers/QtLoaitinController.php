<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaitin;
class QtLoaitinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ds = Loaitin::all();
    return view('quantri.loaitin.index', compact('ds'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quantri.loaitin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lt = new loaitin([
            'Ten' => $request->get('Ten'),
            'ThuTu' => $request->get('ThuTu'),
            'AnHien' => $request->get('AnHien'),
            'HienMenu' => $request->get('HienMenu'),
            'lang' => $request->get('lang'),
        ]);
        $lt->save();
        return redirect('/quantriloaitin')->with('success','Loại tin đã được lưu');
    
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
        $row = Loaitin::find($id);
        if ($row==null) {echo"Không có loại tin này"; return;}
        return view("quantri.loaitin.edit", compact('row'));
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
        $lt = Loaitin::find($id);
        $lt->Ten=$request->get('Ten');
        $lt->ThuTu=$request->get('ThuTu');
        $lt->AnHien=$request->get('AnHien');
        $lt->lang=$request->get('lang');
        $lt->HienMenu=$request->get('HienMenu');
        $lt->save();
        return redirect('/quantriloaitin')->with('success' ,'Cập nhật thành công!');
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
        $lt = loaitin::find($id);
        if ($lt==null) {
            return redirect('/quantriloaitin')->with('success', 'Loại tin không tồn tại');
        } else {
		//cần phải đếm số loại tin trong thể loại (làm sau)
            $lt->delete();
            return redirect('/quantriloaitin')->with('success', 'Đã xóa xong');
	  }

    }
}
