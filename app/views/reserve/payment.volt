{% extends "layouts/base.volt" %}

{% block content %}

    <div class="container">
        <div class="booking-form">
            <h3>Payment</h3>
            <h4>Price: Rp.{{book.price}}</h4>
            <h6 style="color:red">*Please upload the payment</h6>
            <br>
            <form method ="POST" action="/reserve/progress" enctype="multipart/form-data">

                <input type="file" name="payment" placeholder="">  
                <input type="text" name="id" value="{{ bookid }}" hidden>  
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
{% endblock %}