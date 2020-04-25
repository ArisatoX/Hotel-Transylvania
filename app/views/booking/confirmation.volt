{% extends "layouts/base.volt" %}

{% block content %}

    <div class="container">
        <br>
        <div class="room-booking">
            <h3>Booking Confirmation</h3>

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
                                                <td class="r-o">Room Name:</td>
                                                <td>{{room.names}} </td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Price:</td>
                                                <td>Rp {{room.price}} </td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Duration:</td>
                                                <td>{{duration}} Day(s)</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Total Room:</td>
                                                <td>{{totalroom}} Room(s)</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h5><b>Subtotal:</b></h5>
                                    <h2>Rp {{totalprice}}</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <form method = "POST" action = "create">
                    <input class="input100" type="text" name="id_user" value="{{ id_user }}" hidden>
                    <input class="input100" type="text" name="id_room" value="{{ id_room }}" hidden>
                    <input class="input100" type="text" name="duration" value="{{ duration }}" hidden>
                    <input class="input100" type="text" name="totalroom" value="{{ totalroom }}" hidden>
                    <input class="input100" type="text" name="totalprice" value="{{ totalprice }}" hidden>
                    <button type="submit" class="primary-btn">Confirm</a>
                </form>
        </div>
        <br>
    </div>

{% endblock %}