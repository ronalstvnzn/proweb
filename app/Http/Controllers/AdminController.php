<?php

namespace App\Http\Controllers;

use App\Models\portofolio;
use App\Models\about;
use App\Models\advent;
use App\Models\contact;
use App\Models\product;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use File;

class AdminController extends Controller
{
    //login
    public function index()
    {
        return view('admin.login');
    }

    

    public function login(Request $request)
    {
        Session::flash('name',$request->name);
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Username Harus Diisi',
            'password.required' => 'Password Harus Diisi'
        ]);

        $infologin = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)) {
            return redirect('dashboard')->with('success', 'Login Berhasil');
        }
        else {
            return redirect('login')->withErrors('Username atau Password yang dimasukkan salah');
        }
    }

    // end login

    //data
    public function dashboard()
    {
        $users = users::all();
        $contact = contact::all();
        return view('admin.dashboard', compact(['users','contact']));
    }

    public function edit($id)
    {
        $users = users::all();
        $contact = contact::find($id);
        return view('admin.editcontact', compact(['contact','users']));
    }

    public function update($id, Request $request)
    {
        $contact = contact::find($id);
        $contact->update($request->except(['_token','submit']));
        return redirect('dashboard');
    }
    

    public function delete($id)
    {
        $contact = contact::find($id);
        $contact->delete();
        return redirect('dashboard')->with(['success' => 'Data Berhasil Dihapus']);
    }
    
    //end data
    
    //data portofolio
    public function seeporto()
    {
        $users = users::all();
        $advent = advent::all();
        $about = about::all();
        $product = product::all();
        $porto = portofolio::all();
        return view('admin.portofolio', compact(['porto','users','about','product','advent']));
    }

    public function tambah()
    {
        $users = users::all();
        return view('admin.tambah',compact(['users']));
    }

    public function tambahporto(Request $request)
    {
        portofolio::create($request->except('_token','submit'));
        return redirect('portofolio');
    }

    public function editporto($id)
    {
        $users = users::all();
        $porto = portofolio::find($id);
        return view('admin.pedit', compact('porto','users'));
    }

    public function updateporto($id, Request $request)
    {
        $porto = portofolio::find($id);
        $porto->update($request->except('_token','submit'));
        return redirect('portofolio');
    }

    public function destroy($id)
    {
        $porto = portofolio::find($id);
        $porto->delete();
        return redirect('portofolio')->with(['success'=>'Data Berhasil Dihapus']);
    }
    //end portofolio

    //about
    public function add()
    {
        $users = users::all();
        return view('admin.addabout',compact(['users']));
    }


    
    public function addabout(Request $request)
    {
        $about = about::create($request->except(['_token','submit']));
        if($request->hasFile('poto')){
            $request->file('poto')->move('poto/',$request->file('poto')->getClientOriginalName());
            $about->poto=$request->file('poto')->getClientOriginalName();
            $about->save();
        }
        return redirect('portofolio');
    }

     public function hapusabout($id)
    {
        $about = about::find($id);
        if (File::exists('poto'. $about->poto)) {
            File::delete('poto'. $about->poto);
        }
        $about->delete();
        return redirect('portofolio');
    }

    public function padd()
    {
        $users = users::all();
        return view('admin.addproduct', compact(['users']));
    }

    public function addproduct(Request $request)
    {
        $product = product::create($request->except(['_token','submit']));
        if($request->hasFile('poto')){
            $request->file('poto')->move('poto/',$request->file('poto')->getClientOriginalName());
            $product->poto=$request->file('poto')->getClientOriginalName();
            $product->save();
        }
        return redirect('portofolio');
    }

    public function hapusproduct($id)
    {
        $product = product::find($id);
        if (File::exists('poto'. $product->poto)) {
            File::delete('poto'. $product->poto);
        }
        $product->delete();
        return redirect('portofolio');
    }

    public function aadd()
    {
        $users = users::all();
        return view('admin.addadvent', compact(['users']));
    }

    public function addadvent(Request $request)
    {
        advent::create($request->except('_token','submit'));
        return redirect('portofolio');
    }

    public function adedit($id)
    {
        $users = users::all();
        $advent = advent::find($id);

        return view('admin.adventedit', compact('advent','users'));
    }

    public function adventedit($id, Request $request)
    {

        $advent = advent::find($id);
        $advent->update($request->except('_token','submit'));
        return redirect('portofolio');
    }

    //end about

    //logout
    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('success','Berhasil Logout');
    }
    //end logout
}
