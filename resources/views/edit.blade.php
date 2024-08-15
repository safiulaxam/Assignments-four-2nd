<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        @csrf
        @method('PUT')

        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $contact->name }}"><br><br>

       
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $contact->email }}"><br><br>

      
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}"><br><br>

       
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $contact->address }}"><br><br>

        
        <button type="submit">Update</button>
    </form>

   
    <br><br>
    <a href="{{ route('contacts.index') }}">Back to Contacts</a>
</body>
</html>
