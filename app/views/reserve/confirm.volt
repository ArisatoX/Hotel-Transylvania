{% extends "layouts/base.volt" %}

{% block content %}

<div class="container">
    <br>
    <div class="room-booking">
        <h3>Reservation Confirmation</h3>
            <section class="room-details-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-details-item">

                            <div class="rd-text">

                                <!-- Repost Data -->
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Meeting Room:</td>
                                            <td>{{room.name}} </td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Date:</td>
                                            <td>{{dates}} </td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Start time:</td>
                                            <td>{{start_time}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Finish time:</td>
                                            <td>{{end_time}}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Price:</td>
                                            <td>Rp. {{price}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <form method = "POST" action = "/reserve/create">
                <input class="input100" type="text" name="userid" value="{{ userid }}" hidden>
                <input class="input100" type="text" name="roomid" value="{{ roomid }}" hidden>
                <input class="input100" type="date" name="dates" value="{{ dates }}" hidden>
                <input class="input100" type="time" name="start_time" value="{{ start_time }}" hidden>
                <input class="input100" type="time" name="end_time" value="{{ end_time }}" hidden>
                <input class="input100" type="text" name="price" value="{{ price }}" hidden>
                <button type="submit">Confirm</button>
            </form>
    </div>
    <br>
</div>
{% endblock %}