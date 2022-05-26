<div class="arrival-time mb-0">
    <div class="container m-auto p-0">
        <div class="row m-0 p-0">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12 px-md-3 px-1">
                <div class="row newyellowbar">
                    <div class="col-2 newyellowbarline text-center newyellowbar-1">
                        <label>AÉROPORT</label>
                        <h3 class="airport_name"><?= session()->get('airport')??'N/A'; ?></h3>
                    </div>
                    <div class="col-4 newyellowbarline newyellowbar-2">
                        <div class="row no-gutter">
                            <div class="col-6 newyellowbar-2-1">
                                <label>ARRIVÉE</label>
                                <?php
                                $newstartdate = explode('/', session()->get('start_date'));
                                $newenddate = explode('/', session()->get('end_date'));
                                ?>
                                <div class="sdate"><?= $newstartdate[0] ?>/<?= $newstartdate[1] ?></div>
                                <div class="stime"><?= session()->get('start_time')??'N/A'; ?></div>
                            </div>
                            <div class="col-6 newyellowbar-2-2">
                                <label>RETOUR</label>
                                <div class="edate"><?= $newenddate[0] ?>/<?= $newenddate[1] ?></div>
                                <div class="etime"><?= session()->get('end_time')??'N/A'; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 newyellowbarline newyellowbar-3">
                        <label>RÉSERVATION</label>
                        <div class="screentop-font">Parkme (<span class="parkingtotalcharged"><?= session()->get('parking_charges').'€'??'00.00 €'; ?></span>)</div>
                        <div class="screentop-font">Navette (0€)</div>
                        <div class="screentop-font lavage_type_text">
                        <?php if(session()->get('services_charges') > 0){
                        ?>

                        <span><?= session()->get('service_type')??'Lavage' ?></span>(<span><?= session()->get('services_charges')??'0€'; ?></span>€)

                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-2 text-center newyellowbar-4">
                        <label>TOTAL</label>
                        <div class="total-price"> <?= session()->get('parking_charges')+session()->get('services_charges') ??'0'; ?>€</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>