<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Brandlist;
use App\Models\Work;
use App\Models\Voucher;
use App\Models\Link;

use Illuminate\Support\Facades\Storage;






class PagesController extends Controller
{
    //
    public function Index(){
        $main = Page::first();
        $brandlists = Brandlist::all();
        $works = Work::all();
        $vouchers = Voucher::all();
        $links = Link::all();
        return view('index',compact('main','brandlists','works','vouchers','links'));
    }


    public function home(){
        $main = Page::first();

        return view('admin.frontend.home',compact('main'));
    }

        //Genaral Setting
        public function GenaralCreate(){
            $main = Page::first();

            return view('admin.frontend.genaral.create',compact('main'));
        }

        public function GenaralUpdate(Request $request){

            $this->validate($request, [
                'website_name' => 'required|string|max:255'

            ]);

            $main = Page::first();
            $main->website_name = $request->website_name;

            if($request->file('favicon')){
                $img_file = $request->file('favicon');
                $img_file->storeAs('public/img/','favicon.' . $img_file->getClientOriginalExtension());
                $main->favicon = 'storage/img/favicon.' . $img_file->getClientOriginalExtension();
            }

            if($request->file('logo')){
                $img_file = $request->file('logo');
                $img_file->storeAs('public/img/','logo.' . $img_file->getClientOriginalExtension());
                $main->logo = 'storage/img/logo.' . $img_file->getClientOriginalExtension();
            }
            $main->save();
            return redirect()->route('admin.genaral.create')->with('success', "Genaral has been updated successfully");
        }

    //Home
    public function HomeCreate(){
        $main = Page::first();

        return view('admin.frontend.home.create',compact('main'));
    }

    public function HomeUpdate(Request $request){

        $this->validate($request, [
            'home_title' => 'required|string|max:255',
            'home_subtitle' => 'required|string|max:2048'

        ]);

        $main = Page::first();
        $main->home_title = $request->home_title;
        $main->home_subtitle = $request->home_subtitle;

        if($request->file('home_pic')){
            $img_file = $request->file('home_pic');
            $img_file->storeAs('public/img/','home_pic.' . $img_file->getClientOriginalExtension());
            $main->home_pic = 'storage/img/home_pic.' . $img_file->getClientOriginalExtension();
        }
        $main->save();
        return redirect()->route('admin.home.create')->with('success', "Home has been updated successfully");
    }


        //About
        public function AboutCreate(){
            $main = Page::first();

            return view('admin.frontend.about.create',compact('main'));
        }

        public function AboutUpdate(Request $request){

            $this->validate($request, [
                'about_title' => 'required|string|max:255',
                'about_substitle' => 'required|string|max:2048'

            ]);

            $main = Page::first();
            $main->about_title = $request->about_title;
            $main->about_substitle = $request->about_substitle;

            if($request->file('about_pic')){
                $img_file = $request->file('about_pic');
                $img_file->storeAs('public/img/','about_pic.' . $img_file->getClientOriginalExtension());
                $main->about_pic = 'storage/img/about_pic.' . $img_file->getClientOriginalExtension();
            }
            $main->save();
            return redirect()->route('admin.about.create')->with('success', "About has been updated successfully");
        }


//Brand
        public function BrandCreate(){
            $main = Page::first();
            $brandlists = Brandlist::all();

            return view('admin.frontend.brand.create',compact('main','brandlists'));
        }

        public function BrandUpdate(Request $request){

            $this->validate($request, [
                'brand_title' => 'required|string|max:255',
                'brand_subtitle' => 'required|string|max:2048',
                'brand_mid_title' => 'required|string|max:255',
                'brand_footer_title' => 'required|string|max:255',
                'brand_footer_subtitle' => 'required|string|max:2048'

            ]);


            $main = Page::first();

            $main->brand_title = $request->brand_title;
            $main->brand_subtitle = $request->brand_subtitle;
            $main->brand_mid_title = $request->brand_mid_title;
            $main->brand_footer_title = $request->brand_footer_title;
            $main->brand_footer_subtitle = $request->brand_footer_subtitle;


            if($request->file('brand_pic')){
                $img_file = $request->file('brand_pic');
                $img_file->storeAs('public/img/','brand_pic.' . $img_file->getClientOriginalExtension());
                $main->brand_pic = 'storage/img/brand_pic.' . $img_file->getClientOriginalExtension();
            }
            if($request->file('brand_footer_pic')){
                $img_file = $request->file('brand_footer_pic');
                $img_file->storeAs('public/img/','brand_footer_pic.' . $img_file->getClientOriginalExtension());
                $main->brand_footer_pic = 'storage/img/brand_footer_pic.' . $img_file->getClientOriginalExtension();
            }

            $main->save();
            return redirect()->route('admin.brand.create')->with('success', "Brand has been updated successfully");
        }




    public function BrandListCreate(){

        return view('admin.frontend.brand.addnew');
    }

    public function BrandListStore(Request $request){

        $this->validate($request, [
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'point1' => 'required|string|max:2048',

        ]);
        $brandlist = new Brandlist;
        $brandlist->icon = $request->icon;
        $brandlist->title = $request->title;
        $brandlist->point1 = $request->point1;
        $brandlist->save();

        return redirect()->route('admin.brand.create')->with('success','New Brandlist Create Successfully');

    }

    public function Brandlist(){
        $brandlists = Brandlist::all();
        return view ('admin.frontend.brandlist',compact('brandlists'));
    }

    public function BrandListEdit($id) {
        $brandlist = Brandlist::find($id);

        return view('admin.frontend.brand.edit', compact('brandlist'));
    }
    public function BrandListUpdate(Request $request, $id){



        $brandlist = Brandlist::find($id);
        $brandlist->icon = $request->icon;
        $brandlist->title = $request->title;
        $brandlist->point1 = $request->point1;
        $brandlist->save();

        return redirect()->route('admin.brand.create')->with('success','Brandlist Updated Successfully');
    }
    public function BrandListDelete($id){
        $brandlist = Brandlist::find($id);
        $brandlist ->delete();
        return redirect()->route('admin.brand.create')->with('success','Brandlist Deleted Successfully');

    }


    //Work
    public function Work(){
        $main = Page::first();
        $works = Work::all();

        return view('admin.frontend.work.new',compact('main','works'));
    }

    public function WorkStore(Request $request){

        $this->validate($request, [
            'work_title' => 'required|string|max:1048',
        ]);

        $main = Page::first();
        $main->work_title = $request->work_title;
        $main->save();
        return redirect()->route('admin.work')->with('success', "Work has been updated successfully");
    }



    public function WorkListCreate(){

        return view('admin.frontend.work.create');
    }

    public function WorkListStore(Request $request){

        $this->validate($request, [
            'number' => 'required|integer|max:20',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2048',

        ]);
        $work = new Work;
        $work->number = $request->number;
        $work->title = $request->title;
        $work->description = $request->description;
        $work->save();

        return redirect()->route('admin.work')->with('success','New Work information Create Successfully');

    }

    public function WorkList(){
        $works = Work::all();
        return view ('admin.frontend.work.list',compact('works'));
    }

    public function WorkEdit($id) {
        $work = Work::find($id);
        return view('admin.frontend.work.edit', compact('work'));
    }
    public function WorkUpdate(Request $request, $id){

        $this->validate($request, [
            'number' => 'required|integer|max:20',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2048',

        ]);

        $work = Work::find($id);
        $work->number = $request->number;
        $work->title = $request->title;
        $work->description = $request->description;
        $work->save();

        return redirect()->route('admin.work')->with('success','Work Information Updated Successfully');
    }
    public function WorkDelete($id){
        $work = Work::find($id);
        $work ->delete();
        return redirect()->route('admin.work')->with('success','Work list Deleted Successfully');

    }


     //Voucher

     public function Voucher(){
        $main = Page::first();
        $vouchers = Voucher::all();

        return view('admin.frontend.voucher.new',compact('main','vouchers'));
    }

    public function VoucherStore(Request $request){

        $this->validate($request, [
            'voucher_title' => 'required|string|max:255',
        ]);

        $main = Page::first();
        $main->voucher_title = $request->voucher_title;
        $main->save();
        return redirect()->route('admin.voucher')->with('success', "Voucher has been updated successfully");
    }


     public function VoucherListCreate(){

        return view('admin.frontend.voucher.create');
    }

    public function VoucherListStore(Request $request){

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);
        $voucher = new Voucher;
        $voucher->title = $request->title;

        $image = $request->file('picture');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->picture->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;
        $voucher->picture = $img_url;

        // $pic_file = $request->file('picture');
        // Storage::putFile('public/img/', $pic_file);
        // $voucher->picture = "storage/img/".$pic_file->hashName();

        $voucher->save();

        return redirect()->route('admin.voucher')->with('success','New voucher information Create Successfully');

    }

    public function VoucherList(){
        $vouchers = Voucher::all();
        return view ('admin.frontend.voucher.list',compact('vouchers'));
    }

    public function VoucherEdit($id) {
        $voucher = Voucher::find($id);
        return view('admin.frontend.voucher.edit', compact('voucher'));
    }
    public function VoucherUpdate(Request $request, $id){

        $voucher = Voucher::find($id);
        $voucher->title = $request->title;


        $image = $request->file('picture');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->picture->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        $voucher->picture = $img_url;
        $voucher->save();

        return redirect()->route('admin.voucher')->with('success','Voucher Information Updated Successfully');
    }
    public function VoucherDelete($id){
        $voucher = Voucher::find($id);
        $voucher ->delete();
        return redirect()->route('admin.voucher')->with('success','voucher list Deleted Successfully');

    }

        //Contact
        public function Contact(){
            $main = Page::first();
            $links = Link::all();

            return view('admin.frontend.link.new',compact('main','links'));
        }

        public function ContactStore(Request $request){

            $this->validate($request, [
                'contact_title' => 'required|string|max:255',
                'contact_location' => 'required|string|max:255',
                'contact_mail' => 'required|string|max:255',

            ]);

            $main = Page::first();
            $main->contact_title = $request->contact_title;
            $main->contact_location = $request->contact_location;
            $main->contact_mail = $request->contact_mail;
            $main->save();
            return redirect()->route('admin.contact')->with('success', "contact has been updated successfully");
        }

        public function LinkListCreate(){

            return view('admin.frontend.link.create');
        }

        public function LinkListStore(Request $request){

            $this->validate($request, [
                'icon' => 'required|string|max:255',
                'link' => 'required|string|max:255',

            ]);
            $link = new Link;
            $link->icon = $request->icon;
            $link->link = $request->link;
            $link->save();

            return redirect()->route('admin.contact')->with('success','Contact Icon Link Create Successfully');

        }

        public function LinkList(){
            $links = Link::all();
            return view ('admin.frontend.link.list',compact('links'));
        }

        public function LinkEdit($id) {
            $link = Link::find($id);
            return view('admin.frontend.link.edit', compact('link'));
        }
        public function LinkUpdate(Request $request, $id){



            $link = Link::find($id);
            $link->icon = $request->icon;
            $link->link = $request->link;
            $link->save();

            return redirect()->route('admin.contact')->with('success','Contact Information  Updated Successfully');
        }
        public function LinkDelete($id){
            $link = Link::find($id);
            $link ->delete();
            return redirect()->route('admin.contact')->with('success','Contact Information Deleted Successfully');

        }

}
