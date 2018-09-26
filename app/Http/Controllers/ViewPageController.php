<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
