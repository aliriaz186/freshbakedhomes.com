<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function index()
    {
        return view('admin.pages.contact.index')->with(['messages' => Contact::latest()->get()]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {

        Contact::create($request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required|max:250'
            ]
        ));

        return back()->with('success', 'Thank you for your message!');
    }


    public function show(Contact $contact)
    {
        return view('admin.pages.contact.show')->with('message', $contact);
    }



    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect(route('contact.index'))->with('success', 'Successpully Deleted');
    }


    public function updateMessage(Request $request)
    {
        $msgId =  $request->msgId;

        $updateMsg = DB::table('contacts')->where('id', $msgId)->update([
            'status' => 1
        ]);
    }
}