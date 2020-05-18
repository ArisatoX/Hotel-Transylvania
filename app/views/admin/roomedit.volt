{% extends "layouts/adminbase.volt" %}

{% block content %}

    <div class="container">
        <div class="booking-form">
            <h3>Edit</h3>
            <h6 style="color:red">*Please refill your data</h6>
            <br>
            <form method ="POST" action="/admin/roomupdate" enctype="multipart/form-data">
                
                <div class="wrap-input100 validate-input" data-validate="Name is required" enctype="multipart/form-data">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" placeholder="{{room.names}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Price is required">
					<span class="label-input100">Price</span>
					<input class="input100" type="text" name="price" placeholder="{{room.price}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Size is required">
					<span class="label-input100">Size</span>
					<input class="input100" type="text" name="size" placeholder="{{room.size}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Capacity is required">
					<span class="label-input100">Capacity</span>
					<input class="input100" type="text" name="capacity" placeholder="{{room.capacity}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Bed is required">
					<span class="label-input100">Bed</span>
					<input class="input100" type="text" name="bed" placeholder="{{room.bed}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Features is required">
					<span class="label-input100">Features</span>
					<input class="input100" type="text" name="features" placeholder="{{room.features}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Description is required">
					<span class="label-input100">Description</span>
					<input class="input100" type="text" name="description" placeholder="{{room.descriptions}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Room Count is required">
					<span class="label-input100">Available</span>
					<input class="input100" type="text" name="available" placeholder="{{room.available}}">
                </div>

                <span class="label-input100">{{room.picture}}<br></span>
                <input type="file" name="picture" placeholder="">
                <br><br>

                <input class="input100" type="text" name="id" value="{{room.id}} "placeholder="{{room.id}}" hidden>

                <button type="submit">Edit</button>
            </form>
        </div>
    </div>

{% endblock %}