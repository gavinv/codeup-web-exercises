<?php
function clearSession() {
    session_unset();
    session_regenerate_id(true);
    header('Location: high-low.php');
}
function checkGuess($guess, $number) {
    $message = '';
    if($guess > $number) {
        $message = 'LOWER';
    } elseif($guess < $number) {
        $message = 'HIGHER';
    } else {
        $message = 'GOOD GUESS';
    }
    return $message;
}
function getClass($message) {
    $class = '';
    if ($message == 'HIGHER' || $message == 'LOWER') {
        $class = 'alert-info';
    } elseif ($message == 'GOOD GUESS') {
        $class = 'alert-success';
    }
    return $class;
}
function pageController() {
    session_start();
    $data['newGame'] = isset($_GET['newGame']) ? clearSession() : null;
    $data['message'] = '';
    $data['class'] = 'hidden';
    if(!isset($_SESSION['magicNumber'])) {
        $_SESSION['magicNumber'] = mt_rand(1, 100);
    } else {
        $data['magicNumber'] = $_SESSION['magicNumber'];
    }
    if ($_POST) {
        $data['guess'] = isset($_POST['guess']) ? $_POST['guess'] : null;
        $data['message'] = checkGuess($data['guess'], $data['magicNumber']);
        $data['class'] = getClass($data['message']);
    }
    return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous"
    >
    <title>High-Low game</title>
</head>
<body>
    <div class="container">
        <header class="page-header">
            <h1>High-Low Game</h1>
        </header>
        <div class="alert <?= $class ?>" role="alert">
            <?= $message ?>
        </div>
        <form method="post">
            <div class="form-group">
                <label for="guess">Guess</label>
                <input
                type="number"
                class="form-control"
                name="guess"
                id="guess" autofocus>
            </div>
            <button type="submit" class="btn btn-primary">
                Guess!!
            </button>
        </form>
        <a href="high-low.php?newGame" class="btn btn-primary">
            Start Over
        </a>
    </div>
    <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"
    ></script>
    <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"
    ></script>
</body>
</html>