<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/"></a>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
        @csrf
        <label >First name</label> <br />
        <input type="text" name="Firstname" /> <br />
        <br/>
        <label >Last name</label> <br />
        <input type="text" name="Lastname" /> <br />
        <br/>
        <label>Gender</label> <br/>
        <input type="radio" name="Gender" value="1"/>Male <br/>
        <input type="radio" name="Gender" value="1"/>Female <br/>
        <input type="radio" name="Gender" value="1"/>Other <br/>
        <br/>
        <label>Nationality</label> <br/>
        <select name="Nationality">
            <option value="1">Indonesia</option>
            <option value="1">Korea</option>
            <option value="1">Prancis</option>
            <option value="1">USA</option>
            <option value="1">Other</option>
        </select>
        <br/>
        <br/>
        <label>Language Spoken</label> <br/>
        <input type="checkbox" name="Languagespoken" value="1"/>Bahasa Indonesia <br/>
        <input type="checkbox" name="Languagespoken" value="1"/>English <br/>
        <input type="checkbox" name="Languagespoken" value="1"/>Other <br/>
        <br/>
        <label>Bio</label> <br/>
        <textarea name="Bio" cols="40" rows="10"></textarea> <br/>
        <br/>
        <a href="/welcome"><button type="submit">Sign Up</button></a>
    </form>
</body>
</html>