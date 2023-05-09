<?php

namespace App\Http\Controllers;

use App\Models\CustomerReviews;
use Illuminate\Http\Request;

class CustomerReviewsController extends Controller
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
    public function review_store(Request $request)
    {
        $reviews = $request->validate([
            'user_id'=>'required',
            'rating'=>'required',
            'review'=>'required'
        ]);

        CustomerReviews::create($reviews);
        return back()->with('success','Thank you for the review.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function review_show(Request $request)
    {
        $reviews = CustomerReviews::all();
        return view('admin.show_review',compact('reviews'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerReviews  $customerReviews
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerReviews $customerReviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerReviews  $customerReviews
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerReviews $customerReviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerReviews  $customerReviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerReviews $customerReviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerReviews  $customerReviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerReviews $customerReviews)
    {
        //
    }
}
