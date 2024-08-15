<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    

protected $contact;
public function __construct(){
    $this->contact = new Contact();
}



public function index(Request $request)
{
   
    $search = $request->input('search');

    $contacts = Contact::when($search, function($query, $search) {
        return $query->where('name', 'like', "%{$search}%")
                     ->orWhere('email', 'like', "%{$search}%");
    })
   
    ->orderBy($request->input('sort_by', 'name'), $request->input('order', 'asc'))
    ->paginate(10); 

    return view('index', compact('contacts', 'search'));
}

public function edit($id)
{
    $contact = Contact::findOrFail($id);
    return view('edit', compact('contact'));
}

public function update(Request $request, $id)
{
    $contact = Contact::findOrFail($id);
    $contact->update($request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
    ]));

    return redirect()->route('contacts.index');
}


public function destroy($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('contacts.index');
}


public function create()
{
    return view('create');
}

public function store(Request $request)
{
    $contact = Contact::create($request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
    ]));

   
    return redirect()->route('contacts.index');
}




}
