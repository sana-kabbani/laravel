<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('post') ;}}">
        @csrf
        <label>Ad soyad</label>
        <input type="text" name="name"/>
        <br/>
        <label> email </label>
        <input type="mail" name="mail"/>
        <select name="subject">
            <option>Destek</option>
            <option> iş teklifi</option>
        </select>
        <label> masajınız</label>
        <textarea rows="3" name="message"></textarea>
        <button type="submit"></button>
    </form>
    
</body>
</html>