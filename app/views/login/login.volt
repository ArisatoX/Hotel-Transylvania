{% extends "layouts/base.volt" %}

{% block content %}

<?php echo "<h2> Login Form </h2>"; ?>

<form action="" method="POST">
    <p>
        <label for="email">Email</label> <br>
        <?php echo $this->tag->textField("email"); ?>
    </p>

    <p>
        <label for="pass">Password</label> <br>
        <?php echo $this->tag->PasswordField("pass"); ?>
    </p>

    <p>
        <?php echo $this->tag->submitButton("Login"); ?>
    </p>

</form>

{% endblock %}