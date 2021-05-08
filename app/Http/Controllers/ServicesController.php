<?php

namespace App\Http\Controllers;

class ServicesController extends Controller
{
    public function index()
    {
	return view('services.full-material');
    }
    public function finishes()
    {
	return view('services.finishes');
    }
    public function drywall()
    {
	return view('services.drywall');
    }
    public function mechanical()
    {
	return view('services.mechanical');
    }
    public function electrical()
    {
	return view('services.electrical');
    }
    public function plumbing()
    {
	return view('services.plumbing');
    }
    public function landscaping()
    {
	return view('services.landscaping');
    }
    public function bridge()
    {
	return view('services.bridge');
    }
    public function pricing()
    {
	return view('services.pricing');
    }
    public function earthwork()
    {
	return view('services.earthwork');
    }
}