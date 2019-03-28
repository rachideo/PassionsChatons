@extends('layout')

@section('title', 'Mes adresses')

@section('content')

    <form method="POST" action="" class="">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md myForms p-4 m-4">
                <h3 class="mb-3">Adresse de livraison</h3>

                <div class="form-group">
                    <label for="streetNumber">Numéro de rue :</label>
                    <input type="text" class="form-control" name="streetNumber" value="" required autofocus id="streetNumber">
                </div>

                <div class="form-group">
                    <label for="streetName">Nom de la voie :</label>
                    <input type="text" class="form-control" name="streetName" value="" id="streetName" required>
                </div>

                <div class="form-group">
                    <label for="zipcode">Code postal :</label>
                    <input type="text" class="form-control" name="zipcode" value="" id="zipcode" required>
                </div>

                <div class="form-group">
                    <label for="city">Ville :</label>
                    <input type="text" class="form-control" name="city" value="" id="city" required>
                </div>

                <div class="form-group">
                    <label for="country">Pays :</label>
                    <input type="text" class="form-control" name="country" value="" id="country" required>
                </div>

                <div class="text-center">
                    <label for="country">Votre adresse de facturation différente de votre adresse de livraison ?</label>
                    <input type="checkbox" class="form-control" id="checkButton" onclick="showDiv(this)">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md myForms p-4 m-4" id="billing_address_form" style="display: none">
                <h3 class="mb-3">Adresse de facturation</h3>

                <div class="form-group">
                    <label for="streetNumber">Numéro de rue :</label>
                    <input type="text" class="form-control" name="streetNumber_billing" value="" id="streetNumber">
                </div>

                <div class="form-group">
                    <label for="streetName">Nom de la voie :</label>
                    <input type="text" class="form-control" name="streetName_billing" value="" id="streetName">
                </div>

                <div class="form-group">
                    <label for="zipcode">Code postal :</label>
                    <input type="text" class="form-control" name="zipcode_billing" value="" id="zipcode">
                </div>

                <div class="form-group">
                    <label for="city">Ville :</label>
                    <input type="text" class="form-control" name="city_billing" value="" id="city">
                </div>

                <div class="form-group">
                    <label for="country">Pays :</label>
                    <input type="text" class="form-control" name="country_billing" value="" id="country">
                </div>
            </div>
        </div>

        <div class="row align-middle">
            <button type="submit" class="btn btn-primary mx-auto">Enregistrer l'adresse</button>
        </div>
    </form>

<script type="text/javascript">
    function showDiv(checkButton) {
        var divBillingAddress = document.getElementById("billing_address_form");
        divBillingAddress.style.display = checkButton.checked ? "block" : "none";
    }
</script>

@endsection