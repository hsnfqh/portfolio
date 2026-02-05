<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    
    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);
        
        // Here you can add email sending logic
        // For now, we'll just return success
        
        return back()->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}