@php 
$settings = \App\Settings::find(1);
@endphp
<footer>
    <div class="newfootersection">
        <div class="container newftcontainer pb-4 pt-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="newfth1">Parkme</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 newftdiv">
                    <div class="newftdiv2">
                        <div class="newftsubdivs">
                            <div class="newftbrdrbtm">
                                <h2 class="newftheadings">Assistance</h2>
                            </div>
                            <div class="newftdivhover newftbrdrbtm" onclick="location.href='{{ url('help-center/localisation/adresse') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Localisation</h2>
                                    <p class="newftp">Toutes les adresses</p>
                                </div>
                            </div>
                            <div class="newftdivhover newftbrdrbtm" onclick="location.href='{{ url('help-center/support/nous-contacter') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Support</h2>
                                    <p class="newftp">Nous contacter</p>
                                </div>
                            </div>
                            <div class="newftdivhover" onclick="location.href='{{ url('help-center') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Centre d’aide</h2>
                                    <p class="newftp">Questions fréquentes</p>
                                </div>
                            </div>
                        </div>
                        <div class="newftsubdivs">
                            <div class="newftbrdrbtm">
                                <h2 class="newftheadings">Réservation</h2>
                            </div>
                            <div class="newftdivhover newftbrdrbtm" onclick="location.href='{{ url('help-center/modification/comment-modifier-ma-reservation') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Modification</h2>
                                    <p class="newftp">Tout savoir sur la modification</p>
                                </div>
                            </div>
                            <div class="newftdivhover" onclick="location.href='{{ url('help-center/annulation/comment-annuler-ma-reservation') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Annulation</h2>
                                    <p class="newftp">Tout savoir sur l'annulation</p>
                                </div>
                            </div>
                        </div>
                        <div class="newftsubdivs">
                            <div class="newftbrdrbtm">
                                <h2 class="newftheadings">Service additionnel</h2>
                            </div>
                            <div class="newftdivhover newftbrdrbtm" onclick="location.href='{{ url('help-center/navette/la-navette-parkme-est-elle-incluse-dans-ma-reservation') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Navette</h2>
                                    <p class="newftp">Tous les sujets</p>
                                </div>
                            </div>
                            <div class="newftdivhover" onclick="location.href='{{ url('help-center/service-supplementaire/le-lavage') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Lavage</h2>
                                    <p class="newftp">Tous les sujets</p>
                                </div>
                            </div>
                        </div>
                        <div class="newftsubdivs">
                            <div class="newftbrdrbtm">
                                <h2 class="newftheadings">À propos</h2>
                            </div>
                            <div class="newftdivhover newftbrdrbtm" onclick="location.href='{{ url('help-center/premier-pas/qui-sommes-nous') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Qui sommes nous ?</h2>
                                    <p class="newftp">Découvrir Parkme</p>
                                </div>
                            </div>
                            <div class="newftdivhover" onclick="location.href='{{ url('help-center/premier-pas/comment-ca-marche') }}'">
                                <div class="newftpaddings">
                                    <h2 class="newftsubheadings">Comment ça marche ?</h2>
                                    <p class="newftp">Le fonctionnement de parkme</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters newftbrdrbtm newftmargintop"></div>
            <div class="row mt-4">
                <div class="col-6">
                    <p class="newftp1"><?= $settings->copyright ?> <a href="https://parkme.fr/condition_general_parkme_de_ventes.pdf" target="_blank" class="newfta">Conditions générales</a></p>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ $settings->fb_link }}" target="_blank"><img src="{{ asset('public/assets/images/footer_fb.png')}}" class="newftimg" alt="PARKME" /></a>
                    <a href="{{ $settings->insta_link }}" target="_blank"><img src="{{ asset('public/assets/images/footer_insta.png')}}" class="newftimg" alt="PARKME" /></a>
                </div>
            </div>
        </div>
    </div>
</footer>