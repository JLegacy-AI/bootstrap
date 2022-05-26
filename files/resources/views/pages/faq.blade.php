@extends('layouts.app')
@section('content')
<style>
.navbar{
    background:#000 !important;
}
@media(max-width:767px){
    .navbar{
        background:transparent !important;
    }
    .hompage_bg {
        background: #fff !important;
    }
}
</style>
    <main>
            <!-- FAQs page -->
            <div class="faq-section">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="faq-heading">
                                <h1>f.a.q</h1>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse1">RÉSERVER</a>
                                    <i class="fa fa-caret-down"></i>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <h3>-COMMENT RÉSERVER ?</h3>
                                    <p>Site internet uniquement “parkme.fr” sur la page d’accueil OU dans le menu en
                                        haut en cliquant sur “Réserver”</p>
                                    <h3>-COMMENT ÇA MARCHE ?</h3>
                                    <p>Aller:</p>
                                    <ul>
                                        <li>RÉSERVE EN LIGNE</li>
                                        <li>GARER VOTRE VOITURE</li>
                                        <li>TRANSPORTÉ VERS AÉROPORT EN 2 MIN. (Navette PARKME)</li>
                                        <li>DURANT VOTRE VOYAGE (Lavage/Carburant) voir séction “nos services” dans
                                            F.A.Q)
                                        </li>
                                    </ul>
                                    <h3>Retour:</h3>
                                    <ul>
                                        <li>J’APPELLE NAVETTE</li>
                                        <li>JE RÉCUPÈRE MA VOITURE</li>
                                    </ul>
                                    <h3>-MODIFIER OU ANNULER MA RÉSERVATION</h3>
                                    <p>Envoyer un message à adresse mail: contact@parkme.fr</p>
                                    <h3>-COMBIEN DE TEMPS J’AI POUR RÉSERVER AVANT MON ARRIVÉE ?</h3>
                                    <p>Minimum 12h avant votre arrivée.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapse2">NOS SERVICES</a>
                                    <i class="fa fa-caret-down"></i>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <h3>-OÙ SÉLECTIONNER DES SERVICES ?</h3>
                                    <p>Lors de votre réservation après avoir sélectionné des dates.</p>
                                    <h3>-QUELLES SONT VOS SERVICES ?</h3>
                                    <ul>
                                        <li><b>Navette:</b> Notre navette parkme vous transporte gratuitement à l’aller
                                            et au retour en 2 min, au retour vous n’avez juste qu’à appeler ce numéro:
                                            0786288671.
                                        </li>
                                        <li><b>Lavage:</b> Récupérer votre voiture lavée à l’exterieur ET/OU à
                                            l’intérieur selon vos choix.
                                        </li>
                                        <li><b>Carburant:</b> Récupérer votre voiture avec le plein de carburant.</li>
                                        <li><b>Révision:</b> Contrôle téchnique, pneu, liquide, huile, profitez d’un
                                            pannel de révision à sélectionner lors de la réservation.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapse3">LOCALISATION</a>
                                    <i class="fa fa-caret-down"></i>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body location">
                                    <p>Adresse: 32 rue Raymond Grimaud, 31700, Blagnac.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapse4">PAIEMENT</a>
                                    <i class="fa fa-caret-down"></i>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <h3>-QUELLES MÉTHODES DE PAIEMENT ACCEPTEZ-VOUS?</h3>
                                    <p>Carte Bancaire, Paypal.</p>
                                    <h3>-MON PAIEMENT A-T-IL ÉTÉ EFFECTUÉ AVEC SUCCÈS?</h3>
                                    <p>Si votre paiement a été effectué avec succès, vous recevrez un mail de
                                        confirmation de commande.</p>
                                    <h2>-SÉCURITÉ ET DEVISE</h2>
                                    <h3>-MES DONNÉES DE PAIEMENT SONT-ELLES SÉCURISÉES?</h3>
                                    <p>Nous utilisons le leader de paiement Stripe qui assure une sécurité optimale de
                                        vos données de paiement.</p>
                                    <h3>-CONSERVEZ-VOUS MES DONNÉES DE PAIEMENT?</h3>
                                    <p>Non, nous ne conservons pas vos données de paiement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapse5">CONTACT</a>
                                    <i class="fa fa-caret-down"></i>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body contact">
                                    <p><b>MAIL:</b> contact@parkme.fr</p>
                                    <p><b>NUMÉRO DE TÉLÉPHONE:</b> 0786288671</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs Ends -->
            <section id="footer">
                @include('layouts.footer')
            </section>
    </main>
@endsection