
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Contact</title>
</head>
<body>
    <h2>Create New Contact</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br><br>
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br><br>
            <br><br>
        </div>
        
        <div>
            <button type="submit">Save Contact</button>
        </div>
        <div>
            <br><br>
            <a href="{{ route('contacts.index') }}">Back to Contacts</a>
        </div>
    </form>
</body>
</html>

