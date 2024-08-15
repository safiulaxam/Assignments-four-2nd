<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts List</title>
</head>
<body>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Contacts</title>
    </head>
    <body>
        <h1>Contacts List</h1>
    
        
        <form method="GET" action="{{ route('contacts.index') }}">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search...">
            <button type="submit">Search</button><br><br>
        </form>
    
        
        <table border="1">
            <thead>
                <tr>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'name', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'email', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Email</a></th>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'phone', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Phone</a></th>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'address', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Address</a></th>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'created_at', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Created At</a></th>
                    <th><a href="{{ route('contacts.index', ['sort_by' => 'updated_at', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}">Updated At</a></th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->address}}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>{{ $contact->updated_at }}</td>
                        
                        <td>
                            
                            <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
    
                            
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                      
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No contacts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <br><br>
        <a href="{{ route('contacts.create') }}" class="btn btn-primary">
            Create New Contact
        </a>
    
    </body>
    </html>
    

</body>
</html>