<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kucing;
use App\Models\KucingGallery;
use App\Http\Requests\KucingRequest;

class KucingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items  = Kucing::all();

        return view('pages.admin.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KucingRequest $request)
    {
        $data = $request->all();

        $getdata = Kucing::create($data);
        $kucing_id = $getdata->id;


        return redirect()->route('kucing-galleries.create')->with([
            'kucing_id' => $kucing_id
        ]);
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
        $item = Kucing::findorfail($id);


        return view('pages.admin.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KucingRequest $request, $id)
    {
        $data = $request->all();

        $item = Kucing::findorfail($id);

        $item->update($data);

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Kucing::findorfail($id);

        $item->delete();

        KucingGallery::where('kucing_id', $id)->delete();

        return redirect()->route('admin.index');
    }

    // public function gallery(Request $request, $id)
    // {
    //     $kucing = Kucing::findorfail($id);
    //     $items = KucingGallery::with('kucing')
    //         ->where('kucing_id', $id)
    //         ->get();

    //     return view('pages.kucing.gallery')->with([
    //         'kucing' => $kucing,
    //         'items' => $items
    //     ]);
    // }
}
