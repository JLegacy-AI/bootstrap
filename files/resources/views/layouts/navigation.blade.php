<nav class="navbar navbar-expand-sm new-navbar">
        <input type="hidden" id="screen__newnavmobile_inp" value="0" />
        <div class="container new-navbar-container new_navbar_desktop">
            <div class="row new-navbar-row screen__dsplyflexspacebw">
                <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                    <a class="screen__dsplyflexcenter" href="{{ url('') }}">
                        <img src="{{ $settings->application_logo }}" class="newnavbar_img img-fluid logo_image" alt="parking aeroport toulouse">
                    </a>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-12">
                    <div class="screen__dsplyflexend">
                        <a href="{{ url('') }}" class="{{ (request()->is('/')) ? 'new-menu-items active' : 'new-menu-items' }}">Accueil</a>
                        <a href="{{ url('') }}" class="new-menu-items">Réserver</a>
                        <a href="{{ url('mes-reservations') }}" class="{{ (request()->is('mes-reservations*') || request()->is('reservations*')) ? 'new-menu-items active' : 'new-menu-items' }}">Mes réservations</a>
                        <a href="{{ url('mon-compte') }}" class="{{ (request()->is('mon-compte*') || request()->is('home*')) ? 'new-menu-items active' : 'new-menu-items' }}">Compte</a>
                        <a href="{{ url('help-center/support/nous-contacter') }}" class="{{ (request()->is('help-center/support/nous-contacter')) ? 'new-menu-items active' : 'new-menu-items' }}">support</a>
                        <a href="{{ url('help-center') }}" class="{{ (request()->is('help-center*')) ? 'new-menu-items active' : 'new-menu-items' }}">centre d’AIDE</a>
                        <div class="new-nav-line-vertical"></div>
                        @if(Auth::user())
                        <a href="{{ url('home') }}" class="screen__dsplyflexcenter cursorpointer txtdeco_nn_blk">
                            <span class="new_menu_circle"><?= substr(Auth::user()->name,0,1);?></span>
                            <span class="new_menu_username"><?= substr(Auth::user()->name.' '.Auth::user()->lname,0,10).'.'; ?></span>
                        </a>
                        @else
                        <div class="newnav_usernotactive screen__dsplyflexcenter">
                            <a href="{{ url('login') }}" onclick="dummyNavbarFunc()" class="newnav_btns">Connexion</a>
                            <a href="{{ url('register') }}" class="newnav_btns">S’inscrire</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container new-navbar-container new_navbar_mobile">
            <div class="row new-navbar-row">
                <div class="col-2 screen__dsplyflexcenter">
                    <a href="javascript:void(0)" class="newmenu_navbars" id="openNavMenuMblid"><span class="fa fa-bars"></span></a>
                </div>
                <div class="col-sm-2 col-10">
                    <a class="navbar-brand newnav_imgflex col-sm-12 offset-sm-0 offset-3 col-4" href="{{ url('') }}">
                        <img src="{{ $settings->application_logo }}" class="newnavbar_img img-fluid logo_image" alt="parking aeroport toulouse">
                    </a>
                </div>

                <div class="newnav_mblmenu">
                    @if(Auth::user())
                    <a href="{{ url('home') }}" class="newnav_useractive cursorpointer newnav_blackmbluser txtdeco_nn_blk">
                        <span class="new_menu_circle"><?= substr(Auth::user()->name, 0, 1); ?></span>
                        <span class="new_menu_username"><?= substr(Auth::user()->name.' '.Auth::user()->lname,0,10).'.'; ?></span>
                    </a>
                    @else
                    <div class="newnav_usernotactive newnav_blackmblbtn">
                        <a href="{{ url('login') }}" onclick="dummyNavbarFunc()" class="newnav_btns">Connexion</a>
                        <a href="{{ url('register') }}" class="newnav_btns">S’inscrire</a>
                    </div>
                    @endif
                    <div class="mt-2">
                        <a href="{{ url('') }}" class="{{ (request()->is('/')) ? 'new-menu-items-mbl active' : 'new-menu-items-mbl' }}">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-1"></div>
                                <span>Accueil</span>
                            </div>
                        </a>
                        <a href="{{ url('') }}" class="new-menu-items-mbl">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-2"></div>
                                <span>Réserver</span>
                            </div>
                        </a>
                        <a href="{{ url('mes-reservations') }}" class="{{ (request()->is('mes-reservations*') || request()->is('reservations*')) ? 'new-menu-items-mbl active' : 'new-menu-items-mbl' }}">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-3"></div>
                                <span>Mes réservations</span>
                            </div>
                        </a>
                        <a href="{{ url('mon-compte') }}" class="{{ (request()->is('mon-compte*') || request()->is('home*')) ? 'new-menu-items-mbl active' : 'new-menu-items-mbl' }}">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-4"></div>
                                <span>Compte</span>
                            </div>
                        </a>
                        <div class="new-nav-line-horizontal"></div>
                        <a href="{{ url('help-center/support/nous-contacter') }}" class="{{ (request()->is('help-center/support/nous-contacter')) ? 'new-menu-items-mbl active' : 'new-menu-items-mbl' }}">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-5"></div>
                                <span>Support</span>
                            </div>
                        </a>
                        <a href="{{ url('help-center') }}" class="{{ (request()->is('help-center*')) ? 'new-menu-items-mbl active' : 'new-menu-items-mbl' }}">
                            <div class="screen__dsplyflexstart">
                                <div class="newnav_mbl_item newnav_mbl_item-6"></div>
                                <span>Centre d’aide</span>
                            </div>
                        </a>
                    </div>
                    <div class="screen__dsplyflexcenter mt-3">
                        <a href="https://parkme.fr/condition_general_parkme_de_ventes.pdf" target="_blank" class="screen__4cgv" id="">CGV</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>