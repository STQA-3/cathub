<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Kucing;
use App\Models\KucingGallery;
use App\Http\Requests\KucingRequest;
use App\Http\Requests\KucingGalleryRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items  = Kucing::all();

        return view('pages.user.home')->with([
            'items' => $items
        ]);
    }

    public function indexadmin()
    {
        return view('pages.admin.index');
    }

    public function dashboard()
    {
        $total_kucing_belum_adopsi = Kucing::where('is_adopted','0')->count();
        $total_kucing_sudah_adopsi = Kucing::where('is_adopted','1')->count();
        $total_approval_yang_belum = Kucing::where('is_approved','0')->count();
        $total_kucing_yang_ada = Kucing::count();
        // dd($total_kucing_yang_ada);


        return view('pages.admin.dashboard')->with([
            'total_kucing_belum_adopsi' => $total_kucing_belum_adopsi,
            'total_kucing_sudah_adopsi' => $total_kucing_sudah_adopsi,
            'total_approval_yang_belum' => $total_approval_yang_belum,
            'total_kucing_yang_ada' => $total_kucing_yang_ada
        ]);
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store(KucingRequest $request)
    {
        $data = $request->all();

        $getdata = Kucing::create($data);
        $kucing_id = $getdata->id;


        return redirect()->route('home.create_pic')->with([
            'kucing_id' => $kucing_id
        ]);
    }
    public function create_pic()
    {
        $kucing_id = Session::get('kucing_id');

        // $kucings = Kucing::all();

        return view('pages.user.create_pic')->with([
            'kucing_id' => $kucing_id
        ]);
    }

    public function store_pic(KucingGalleryRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store(
            'assets/kucing', 'public'
        );

        KucingGallery::create($data);
        return redirect()->route('home');
    }

    // untuk menampilkan data kucing
    public function show(Kucing $item)
    {
        return view('pages.user.kucing',compact('item'));
    }

}
