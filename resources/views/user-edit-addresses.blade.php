@extends('layout')

@section('title', 'Mes adresses')

@section('content')

    <form method="POST" action="" class="">
        @method('PUT')
        @csrf
        <div class="row justify-content-md-center p-4">
            <div class="col-md-10 myForms p-4 m-4 text-center">
                <h3 class="mb-3">Adresse de livraison</h3>
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-3">
                        <label for="streetNumber" class="control-label">Numéro de rue :</label>
                        <input type="text" class="form-control" name="streetNumber" value="" required autofocus id="streetNumber">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="streetName" class="control-label">Nom de la voie :</label>
                        <input type="text" class="form-control" name="streetName" value="" id="streetName" required>
                    </div>
                </div>
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-3">
                        <label for="zipcode" class="control-label">Code postal :</label>
                        <input type="text" class="form-control" name="zipcode" value="" id="zipcode" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city" class="control-label">Ville :</label>
                        <input type="text" class="form-control" name="city" value="" id="city" required>
                    </div>
                </div>
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-6">
                        <label for="country" class="control-label">Pays :</label>
                        <input type="text" class="form-control" name="country" value="" id="country" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <label for="country" class="control-label">Votre adresse de facturation est différente de votre adresse de livraison ?</label>
            <input type="checkbox" class="form-control" id="checkButton" onclick="showDiv(this)">
        </div>

        <div class="row justify-content-md-center p-4" id="billing_address_form" style="display: none">
            <div class="col-md-10 myForms p-4 m-4 text-center">
                <h3 class="mb-3">Adresse de facturation</h3>
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-3">
                        <label for="streetNumber_billing" class="control-label">Numéro de rue :</label>
                        <input type="text" class="form-control" name="streetNumber_billing" value="" required id="streetNumber_billing">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="streetName_billing" class="control-label">Nom de la voie :</label>
                        <input type="text" class="form-control" name="streetName_billing" value="" id="streetName_billing" required>
                    </div>
                </div>
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-3">
                        <label for="zipcode_billing" class="control-label">Code postal :</label>
                        <input type="text" class="form-control" name="zipcode_billing" value="" id="zipcode_billing" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city_billing" class="control-label">Ville :</label>
                        <input type="text" class="form-control" name="city_billing" value="" id="city_billing" required>
                    </div>
                </div>
                <div class="form-row justify-content-md-center">
                    <div class="form-group col-md-6">
                        <label for="country_billing" class="control-label">Pays :</label>
                        <input type="text" class="form-control" name="country_billing" value="" id="country_billing" required>
                    </div>
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
        divBillingAddress.style.display = checkButton.checked ? "flex" : "none";
    }
</script>

@endsection