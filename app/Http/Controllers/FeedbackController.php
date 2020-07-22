<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Cabinet;
use Session;

class FeedbackController extends Controller
{
    public function create(Request $request)
    {

        $request->validate([
            'firstName' => 'required|min:4',
            'lastName' => 'required',
        ]);

        

        $feedback = new Feedback();
        $feedback->firstName =$request->firstName;
        $feedback->lastName =$request->lastName;
        $feedback->ministry_id =$request->ministry_id;
        $feedback->position ='Minister';
        $feedback->isApprove =0;

        $feedback->save();

        Session::flash('flash_message', 'A new Cabinet member has been created!');
        Session::flash('alert-class', 'alert-info');
        // $request->session()->flash('status', 'Cabinet was Posted!');
        return redirect('/')->with('success','Cabinet member  Posted Succesfully!');
    }

    public function approve(Request $request, $id)
    {
        $feebacks = Feedback::findOrFail($id);
        $cabinet = new Cabinet();
        $cabinet->name = $feedbacks->firstName .' '.$feedbacks->lastName;
        $cabinet->twitter_handle = '@';
        $cabinet->instagram_handle = '@';
        $cabinet->facebook_handle = '@';
        $cabinet->linkedIn_handle = '@';
        $cabinet->role = 'Minister';
        $cabinet->ministry_code =0233;
        $cabinet->save();

        Feedback::findOrFail($id)->update(['isApprove'=> '1']);

        if ($cabinet->save()) {
            Session::flash('success','Cabinet Member has been approved Successfully!');
            
            return redirect('/admin/dashboard');
        }
    }
    
    public function ignore(Request $request, $id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        
        return redirect()->route('dashboard')->with('success','Cabinet Member Ignored');
    }

}
