{% extends "layouts/base.volt" %}

{% block content %}

    <div class="container">
        <div class="booking-form">
            <h3>Payment</h3>
            <h6 style="color:red">*Please upload the payment</h6>
            <br>
            <form method ="POST" action="/booking/uploadpayment" enctype="multipart/form-data">

                <input type="file" name="payment" placeholder="">  
                <input type="text" name="id_book" value="{{book.id}}" hidden>  
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

{% endblock %}