{% extends "layouts/base.volt" %}

{% block content %}

<form method = "POST" action="signup/register">

    <h2> REGISTER FORM </h2><br>

    <label for="firstName"> First name </label><br>
    <input type="text" name="firstName"><br>

    <label for="lastName">Last name</label><br>
    <input type="text" name="lastName"><br>

    <label for="email"> Email</label><br>
    <input type="text" name="email"><br>

    <label for="pass">Password</label><br>
    <input type="password" name="pass"><br>

    <label for="confirm">Confirm Password</label><br>
    <input type="password" name="confirm"><br>

    <label for="country"> Country / Region </label><br>
    <input type="text" name="country"><br><br>

    <label for="phone">Phone Number</label><br>
    <input type="text" name="phone"><br><br>

    <input type="submit" value="Submit">

</form>

{% endblock %}