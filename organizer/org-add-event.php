<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Loading CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="organizer.css">

    <title>Organizer | Adding Event</title>
</head>
<body>

<?php // header
require_once 'header.php' ?>

<!-- Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="headings my-4 p-4">Adding Event</h1>
    <!-- Wrapper -->
    <div class="event-location-wrapper p-4">
        <!-- form -->
        <form class="col-10 offset-1">
            <div class="form-group row">
                <label for="event-name" class="col-sm-3 col-form-label">Event Name</label>
                <input type="email" class="col-sm-8 form-control" id="event-name"
                       placeholder="Name">
            </div>
            <div class="form-group row align-items-center">
                <label class="col-sm-3 col-form-label" for="event-selector">Type of
                    Event</label>
                <select class="col-sm-3 custom-select" id="event-selector">
                    <option selected>Choose...</option>
                    <option value="c">Conference</option>
                    <option value="e">Entertainment</option>
                    <option value="s">Seminar</option>
                    <option value="t">Trade Fair</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="max-entries" class="col-sm-3 col-form-label">Maximum
                    Entries</label>
                <input type="number" class="col-sm-3 form-control" id="max-entries"
                       placeholder="Entries" min="1" max="999">
            </div>

            <!-- Location -->
            <div class="form-group row">
                <!-- Auto Complete -->
                <label for="autocomplete-address"
                       class="col-sm-3 col-form-label">Location</label>
                <div id="location-field" class="col-sm-9 px-0">
                    <input id="autocomplete-address" class="form-control mb-4"
                           placeholder="Enter your address..."
                           onFocus="geolocate()" type="text">
                    <div class="row container">
                        <!-- House No/ Village, Road -->
                        <div class="form-group row col-12 mb-4">
                            <label for="street_number" class="col-lg-2 col-form-label">House
                                Number</label>
                            <input type="text" class="col-lg-2 form-control"
                                   id="street_number"
                                   placeholder="House No.">
                            <label for="route" class="col-lg-2 col-form-label">Road
                                Address</label>
                            <input type="text" class="col-lg-6 form-control" id="route"
                                   placeholder="Road Address">
                        </div>
                        <!-- Subdistrict, District -->
                        <div class="form-group row col-12 mb-4">
                            <label for="sublocality_level_2"
                                   class="col-lg-2 col-form-label">Subdistrict</label>
                            <input type="text" class="col-lg-4 form-control"
                                   id="sublocality_level_2"
                                   placeholder="Subdistrict">
                            <label for="sublocality_level_1"
                                   class="col-lg-2 col-form-label">District</label>
                            <input type="text" class="col-lg-4 form-control"
                                   id="sublocality_level_1"
                                   placeholder="District">
                        </div>
                        <!-- City -->
                        <div class="form-group row col-12 mb-4">
                            <label for="administrative_area_level_1"
                                   class="col-lg-2 col-form-label">City</label>
                            <input type="text" class="col-lg-10 form-control"
                                   id="administrative_area_level_1"
                                   placeholder="City">
                        </div>
                        <!-- Postal code, Country -->
                        <div class="form-group row col-12 mb-4">
                            <label for="postal_code" class="col-lg-2 col-form-label">Postal
                                Code</label>
                            <input type="number" class="col-lg-2 form-control"
                                   id="postal_code"
                                   placeholder="Postal Code">
                            <label for="country"
                                   class="col-lg-2 col-form-label">Country</label>
                            <input type="text" class="col-lg-6 form-control" id="country"
                                   placeholder="Country">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row col-sm-8 offset-2">
                <div class="col-centered">
                    <button type="submit" class="btn btn-primary m-1" id="add-event">Add
                        Event
                    </button>
                    <button type="submit" class="btn btn-primary m-1">Discard</button>
                </div>
            </div>
            <!-- /.form -->
        </form>
        <!-- /.wrapper -->
    </div>
    <!-- /.container -->
</div>

<!-- Loading Scripts -->
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<!-- Header Script -->
<script src="headerjs.js"></script>
<!-- Auto Address Script -->
<script src="auto-address.js"></script>
<!-- Google Maps JS API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFDllUC_ofU2tABnCon3X-WUfPtjS4H_o
&libraries=places&callback=initAutocomplete"
        async defer></script>
</body>
</html>
