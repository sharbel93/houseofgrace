<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ViewPageController extends Controller
{
    //different view pages of the website
    public function getIndex() {
        return view('pages.index');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getMinistries() {
        return view('pages.ministries');
    }

    public function getDepartments() {
        return view('pages.departments');
    }


    public function getBlog() {
        return view('pages.blog');
    }

    public function getProgrammes() {
        return view('pages.programmes');
    }

    public function getLordsKitchen() {
        return view('pages.lordskitchen');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getSeniorPastor() {
        return view('pages.seniorpastor');
    }

    public function getManPower() {
        return view('pages.manpower');
    }

    public function getWomenOfWorth() {
        return view('pages.wow');
    }

    public function getBlastYouth() {
        return view('pages.blast');
    }

    public function getOasisGrace() {
        return view('pages.oasis');
    }

    public function getThroneRoom() {
        return view('pages.throne');
    }

    public function getGraceGroups() {
        return view('pages.gracegroup');
    }

    public function getFocusFamily() {
        return view('pages.focusfamily');
    }

    public function getCareFollowUp() {
        return view('pages.care');
    }

    public function getTheJourney() {
        return view('pages.journey');
    }

    public function getLeaveandCleave() {
        return view('pages.leaveandcleave');
    }

    public function getServetheLord() {
        return view('pages.servethelord');
    }

    public function getContactemail(Request $request) {

        // validate data
        $this->validate($request, array(
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|integer',
            'subject' => 'required|string|max:20',
            'message' => 'required|string|max:500'
        ));

        $firstname= $request->firstname;
        $lastname= $request->lastname;
        $email = $request->email;
        $phone = $request->phone;
        $subject = $request->subject;
        $content = $request->message;

//        dd($email,$content, $firstname,$lastname, $subject);


        Mail::send(new ContactMail($request));
        return redirect()->back();

    }



}
