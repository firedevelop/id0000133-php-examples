<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post" novalidate>

    <div>
        postcode: <input name="postcode"
        pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}"
        title="Please enter a valid UK postcode">
    </div>

  <div>
        text: <input type="text" name="surname" value="Bloggs">
    </div>
    <textarea name="content" rows="7" cols="21"></textarea>

    <div>
        password: <input type="password" name="password">
    </div>

    <div>
        tel: <input type="tel" name="telephone">
    </div>

    <div>
        url: <input type="url" name="web_address">
    </div>

    <div>
        date: <input type="date" name="date">
    </div>

    <div>
        time: <input type="time" name="time">
    </div>

    <div>
        week: <input type="week" name="week">
    </div>

    <div>
        color: <input type="color" name="colour">
    </div>

    <div>
        email: <input type="email" name="email_address">
    </div>

    <div>
        month: <input type="month" name="month">
    </div>

    <div>
        range: <input type="range" name="range">
    </div>

    <div>
        hidden: <input type="hidden" name="invisible" value="1234">
    </div>

    <div>
        number: <input type="number" name="number">
    </div>

    <div>
        search: <input type="search" name="search">
    </div>

    <div>
        datetime-local: <input type="datetime-local" name="datetime">
    </div>
   
	<select name="country">
        <optgroup label="Europe">
            <option value="germany">Germany</option>
            <option value="france">France</option>
            <option value="uk" selected>United Kingdom</option>
        </optgroup>
        <optgroup label="America">
            <option value="brazil">Brazil</option>
            <option value="canada">Canada</option>
            <option value="usa">United States</option>
        </optgroup>
    </select>
    
    <button>Send</button>

</form>

</body>
</html>
