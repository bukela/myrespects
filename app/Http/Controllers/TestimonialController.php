<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if (!$user->campaign->testimonial()->exists()) {
            if ( ! is_null($request->testimonial_text)) {
                $testimonial = new Testimonial();
                $testimonial->user_id = $user->id;
                
                $testimonial->campaign_id = Auth::user()->campaign->id;
                $testimonial->body = $request->testimonial_text;
                $testimonial->save();
            }
        }else{
            return redirect()->back()->with('message-error', 'You already left a testimonial!');
        }
        
        return redirect()->route('withdraw.leave-tip');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial $testimonial
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial $testimonial
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Testimonial         $testimonial
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial $testimonial
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}