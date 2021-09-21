<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Mail;
class ApplicationController extends Controller
{
    public function index()
    {
        $application = Application::latest()->paginate(5);
    
        return view('sharelink.index',compact('application'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function applicationForm()
    {
        return view('sharelink.applicationForm');
    }

    public function storeApplicationForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
        ]);

        $input = $request->all();

        Application::create($input);

        //  Send mail to admin
        // \Mail::send('applicationMail', array(
        //     'houseid' => $input['houseid'],
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'phone' => $input['phone'],
        //     'title' => $input['title'],
        //     'application' => $input['application'],
        // ), function($message) use ($request){
        //     $message->from($request->email);
        //     $message->to('symplice@techaffinity.com', 'Admin')->application($request->get('title'));
        // });


        

        return redirect()->back()->with(['success' => 'Link Shared Successfully']);
    }
}
