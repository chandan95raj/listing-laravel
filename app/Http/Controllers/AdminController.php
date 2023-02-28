<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // dashboard view
    public function dashboardView()
    {
        echo view('admin.top');
        echo view('admin.dashboard');
        echo view('admin.bottom');
    }

    //addlisting View
    public function addlistingView()
    {
        echo view('admin.top');
        echo view('admin.add-listing');
        echo view('admin.bottom');
    }

    //mylisting View
    public function mylistingView()
    {
        echo view('admin.top');
        echo view('admin.my-listing');
        echo view('admin.bottom');
    }

    //visitor review View
    public function visitorreviewView()
    {
        echo view('admin.top');
        echo view('admin.visitor-review');
        echo view('admin.bottom');
    }

    //submitted review View
    public function submittedreviewView()
    {
        echo view('admin.top');
        echo view('admin.submitted-review');
        echo view('admin.bottom');
    }

    //my profile View
    public function myprofileView()
    {
        echo view('admin.top');
        echo view('admin.my-profile');
        echo view('admin.bottom');
    }

    //change password View
    public function changepasswordView()
    {
        echo view('admin.top');
        echo view('admin.change-password');
        echo view('admin.bottom');
    }

    //messages View
    public function messagesView()
    {
        echo view('admin.top');
        echo view('admin.messages');
        echo view('admin.bottom');
    }

    //messages details View
    public function messagesdetailsView()
    {
        echo view('admin.top');
        echo view('admin.messages-details');
        echo view('admin.bottom');
    }

    //invoice details View
    public function invoiceView()
    {
        echo view('admin.invoice');
    }
}
