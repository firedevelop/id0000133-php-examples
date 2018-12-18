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
    <textarea name="content" rows="7" cols="21" placeholder="Content"></textarea>

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
    <div><label><input type="checkbox" name="terms" value="yes">Terms</label></div>
<fieldset>    
<legend>Wich color do you like?</legend>
    <div><input type="checkbox" name="red">red</div>
    <div><input type="checkbox" name="blue">blue</div>
    <div><input type="checkbox" name="green">green</div>
    
    <div><input type="checkbox" name="colours[]" value="red">red</div>
    <div><input type="checkbox" name="colours[]" value="blue">blue</div>
    <div><input type="checkbox" name="colours[]" value="green">green</div>
    
    <div><label><input type="radio" name="colour" value="red" >red</label></div>
    <div><label><input type="radio" name="colour" value="blue" checked>blue</label></div>
    <div><label><input type="radio" name="colour" value="green">green</label></div>

	<div><label for="title">Title</label>: <input type="text" name="title" id="title"></div> 
	<div><label for="event">Event</label>: <input type="text" name="event" id="event" value="snow retreat" readonly></div>
    
     <div>
        number 18 to 21: <input type="number" required name="number" min="18" max="21" autofocus>
    </div>
    
    <button>Send</button>
</fieldset>
</form>

</body>
</html>
