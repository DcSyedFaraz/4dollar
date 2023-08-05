<?php

namespace App\Http\Controllers\web;

use App\AcademicLevel;
use App\Deadline;
use App\Fare;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetFareRequest;
use App\Mail\QueryAdminMail;
use App\Mail\QueryMail;
use App\PaperType;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index()
    {

        // Auth::logout();
        // dd(Auth::user());

        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id', 'asc')->get();
        $deadlines = Deadline::all();
        $fares = Fare::all();

        return view('pages.home', compact('fares', 'paper_types', 'academic_levels', 'deadlines'));
    }

    public function getFare(GetFareRequest $request)
    {
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();
    }

    public function about()
    {

        // dd(addCurrency(4));
        return view('pages.about');
    }
    public function queryStore(Request $request)
    {
        // dd($request);
        $query =  Query::create($request->all());
        // return $query->deadlineName;
        // Send mail to user
        Mail::to($query->email)->send(new QueryMail($query));
        // Send mail to admin
        // Mail::to(config('app.mail_address'))->send(new QueryAdminMail($query));
        return response()->json(['success' => "Thank you for showing your intrest, We've received your query successfully."]);


        // return redirect()->back()->withSuccess("Thank you for showing your intrest, We've receive your query successfully.");

    }
    public function refundPolicy()
    {
        return view('pages.legal.refund');
    }

    public function termsAndConditions()
    {
        return view('pages.legal.terms');
    }

    public function guarantees()
    {
        return view('pages.guarantees');
    }

    public function privacyPolicy()
    {
        return view('pages.legal.privacy');
    }

    public function revisionPolicy()
    {
        return view('pages.legal.revision');
    }

    public function sitemap()
    {
        return view('pages.sitemap');
    }

    public function plans()
    {
        return view('pages.plans');
    }

    public function reviews()
    {
        return view('pages.reviews');
    }

    public function samples()
    {
        return view('pages.samples');
    }

    public function thankYou()
    {
        return view('pages.thank-you');
    }
    public function pricing()
    {
        return view('pages.pricing');
    }
}
