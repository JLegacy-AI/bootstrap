@extends('layouts.app')
@section('style')
<link href="{{ asset('public/css/facture.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/assets/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/fonts/fontawesome/css/all.css') }}">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
@endsection
@section('content')
<div class="container">
@if(session()->has('success'))
    <div class="alert alert-success text-center">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('failed_message'))
    <div class="alert alert-danger text-center">
        {{ session()->get('failed_message') }}
    </div>
@endif

    <div class="row justify-content-center">
        <div class="col-sm-12 col-12">
            <div class="card">
                <div class="card-header">Facture</div>
                <div class="facture-fields">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-facture" id="form_id" method="POST" action="{{ route('admin_email_receipt') }}">
                        @csrf
                        <input type="hidden" id="total_amt" name="total">
                        <input type="hidden" id="days_difference" name="days_difference">
                        <input type="hidden" id="parking_charges" name="parking_charges" >
                        <input type="hidden" id="services_charges" name="services_charges" >
                        <input class="form-control" type="text" name="email" placeholder="mail">
                        <input class="form-control" type="text" name="name" placeholder="Nom">
                        <input class="form-control" type="text" name="phone" placeholder="numéro téléphone">

                        <div class="date">
                            <input class="form-control form-control-lg" type="text"
                                   placeholder="Sélectionner Date" name="start_date" id="arrivalDate"
                                   readonly/>
                            <span class="input-group-addon">
                                <i class="fa fa-calendar-alt"></i>
                            </span>
                            {{-- <label id="arrivalError">Arrival Date Not Selected</label> --}}
                        </div>
                         
                        <select class="form-control" id="arriveeTime" name="start_time">
                            <option value="" disabled selected hidden>Arrivée Heure</option>
                            <option>5 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>5 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>6 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>6 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>7 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>7 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>8 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>8 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>9 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>9 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>10 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>10 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>11 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>11 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>12 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>12 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>13 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>13 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>14 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>14 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>15 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>15 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>16 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>16 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>17 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>17 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>18 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>18 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>19 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>19 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>20 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>20 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>21 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>21 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>22 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>22 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>23 &nbsp&nbsp&nbsp&nbsp 00</option>
                        </select>
                        <div class="date">
                            <input class="form-control form-control-lg" type="text"
                                   placeholder="Sélectionner Date" name="end_date" id="departureDate"
                                   readonly/>

                            <span class="input-group-addon">
                            <i class="fa fa-calendar-alt"></i>
                            </span>
                        </div>
                        <select class="form-control custom-select-lg" id="departTime" name="end_time">
                            <option value="" disabled selected hidden>Retour Heure</option>
                            <option>5 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>5 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>6 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>6 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>7 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>7 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>8 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>8 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>9 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>9 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>10 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>10 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>11 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>11 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>12 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>12 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>13 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>13 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>14 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>14 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>15 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>15 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>16 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>16 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>17 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>17 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>18 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>18 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>19 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>19 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>20 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>20 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>21 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>21 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>22 &nbsp&nbsp&nbsp&nbsp 00</option>
                            <option>22 &nbsp&nbsp&nbsp&nbsp 30</option>
                            <option>23 &nbsp&nbsp&nbsp&nbsp 00</option>
                        </select>
                        <select class="form-control custom-select-lg" id="serviceId">
                            <option disabled selected hidden>Service Sélectionner</option>
                            {{-- <option  style="font-style: italic;padding-top: 5px;" value="Facile-0">Facile 0€</option> --}}
                            
                            
                            <option  style="font-style: italic;padding-top: 5px;" value="Aucun-0">Aucun 0€</option>

                            <option  style="font-style: italic;padding-top: 5px;" value="Lavage EXTÉRIEUR-15">Lavage Extérier 15€</option>
                            <option  style="font-style: italic;" value="Lavage INTERIEUR-40">Lavage intérior 40€</option>
                            <option  style="font-style: italic;" value="Lavage COMPLET-50">Lavage complete 50€</option>
                        </select>

                        <input type="checkbox" id="serviceRadioInput" name="service[]" style="display: none;" >

                        <div class="text-facture">
                            <h2>Prix:<span class="total-price"></span></h2>
                        </div>
                        <button type="submit" id="index-btn" class="btn btn-danger">ENVOYER</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('script')

<script src="{{ asset('public/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/assets/js/custom.js') }}"></script>
<script type="text/javascript">

    $("#form_id").submit(function() {
      // disable button
      $("#index-btn").prop("disabled", true);
      // add spinner to button
      $("#index-btn").html(
        `<span class="spinner-border spinner-border-sm"  style="padding-right:10px;">ENVOYER</span><i class="fa fa-spinner fa-pulse"></i>`
      );
        
    });

    

    $("#departTime, #arrivalDate, #arriveeTime, #departureDate").click(function(){

      setSelectedValues();
    });

    $("#serviceId").change(function(){
        var serviceVla = $("select#serviceId option").filter(":selected").val();
        $("#serviceRadioInput").val(serviceVla);
        $("#serviceRadioInput").prop('checked',true);    
        setSelectedValues();
    });
 
     
$(function () {
    $("#arrivalDate, #expiryDate").datepicker({
        firstDay: 1,
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        currentText: 'Aujourd\'hui',
    monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
    monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
    'Jul','Aou','Sep','Oct','Nov','Dec'],
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    weekHeader: 'Sm',
        yearRange: "2020:2025",
        // yearRange: new Date().getFullYear().toString() + ':' + new Date().getFullYear().toString(),
        onClose: function (selectedDate) {
            $("#departureDate").datepicker("option", "minDate", selectedDate);
        }
    });
    $("#departureDate").datepicker({
        firstDay: 1,
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        currentText: 'Aujourd\'hui',
    monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
    monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun','Jul','Aou','Sep','Oct','Nov','Dec'],
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    weekHeader: 'Sm',
        yearRange: "2020:2025",
        onClose: function (selectedDate) {
            $("#arrivalDate").datepicker("option", "maxDate", selectedDate);
        }
    });
});
  
    $('#navbarDropdown').on('click', function (e) {
        e.stopPropagation();
        $('.dropdown-menu').toggle();
    });

    $('.navbar-toggler').on('click', function(){
        $('.navbar-collapse').toggle('slow');
    });
</script>
@endsection


