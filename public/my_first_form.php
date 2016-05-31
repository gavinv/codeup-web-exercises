<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
</head>
<body>
	<form method="POST" action="/my_first_form.php">
        <h3>User Login</h3>

        <div>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="password">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>

    <div>
    <form method="POST" action="/my_first_form.php">
        <h3>Compose an Email</h3>

        <div>
            <textarea id="email_to" name="email_to" placeholder="To"></textarea>
        </div>
        <div>
            <textarea id="email_from" name"email_to" placeholder="From"></textarea>
        </div>
        <div>
            <textarea id="email_subject" name="email_subject" placeholder="Subject"></textarea>
        </div>
        <div>
            <textarea id="email_body" name"email_body" rows="5" cols="40" placeholder="Compose your message"></textarea>
        </div>
        <div>
            <button type="send">Send</button>
        </div>
    </form>
    </div>
    <form method="POST" action="/my_first_form.php">
    <div>
            <p>What is the capital of Texas?</p>
        <label>
            <input type="radio" name="q1" value="houston">
            Houston
        </label>
        <label>
            <input type="radio" name="q1" value="dallas">
            Dallas
        </label>
        <label>
            <input type="radio" name="q1" value="austin">
            Austin
        </label>
        <label>
            <input type="radio" name="q1" value="san antonio">
            San Antonio
        </label>
    </div>
    <div>
            <p>What is the most current OS X version?</p>
        <label>
            <input type="radio" name="q2" value="Lion">
            Lion
        </label>
        <label>
            <input type="radio" name="q2" value="Mavericks">
            Mavericks
        </label>
        <label>
            <input type="radio" name="q2" value="El Capitan">
            El Capitan
        </label>
        <label>
            <input type="radio" name="q2" value="Yosemite">
            Yosemite
        </label>
    </div>
    <div>
        <label for="os">What operating systems have you used? </label>
        <select id="os" name="os[]" multiple>
            <option value="linus">Linux</option>
            <option value="osx">OS X</option>
            <option value="windows">Windows</option>
            <option value="none">None</option>
        </select>
    </div>
    <div>
        <input type="submit">
    </div>
    </form>
    <form method="POST" action="/my_first_form.php">
    <div>
        <label for="code">Are you learning how to code? </label>
        <select id="code" name="code">
            <option value="0">No</option>
            <option value="1" selected>Yes</option>
        </select>
    </div>
    <div>
        <input type="submit">
    </div>
    </form>
</body>
</html>