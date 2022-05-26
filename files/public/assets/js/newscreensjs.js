// Screen_ JS
var screen_width = screen.width;
var screen_height = screen.height;
$(document).ready(function () {
    if (screen_width <= 767) {
        $(".navbar-toggler>.close").attr('style', 'color: #000 !important');
        $("#demo_timer").attr('style', 'display: none !important');
        $('nav').addClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: hidden");
        if (screen_width > screen_height) {
            $(".footer-buttons-div").attr('style', 'display: none !important');
            $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
            $('nav').removeClass('new-navbar-mbl');
            $('.newnavbar_img').attr('style', "visibility: visible");
        }
        else {
            $(".footer-buttons-div").attr('style', 'display: block !important');
            if ($('#screen__helpcenterpage_inp').val() == '1') {
                $('nav').attr('style', "display: none;");
            }
        }

        // For Screen__3 tabs animation
        $('.screen__3tabs_ul a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
            var $old_tab = $($(e.target).attr("href"));
            var $new_tab = $($(e.relatedTarget).attr("href"));

            if ($new_tab.index() < $old_tab.index()) {
                $old_tab.css('position', 'relative').css("right", "0").show();
                $old_tab.animate({ "right": "-100%" }, 300, function () {
                    $old_tab.css("right", 0).removeAttr("style");
                });
            }
            else {
                $old_tab.css('position', 'relative').css("left", "0").show();
                $old_tab.animate({ "left": "-100%" }, 300, function () {
                    $old_tab.css("left", 0).removeAttr("style");
                });
            }
        });

        $('.screen__3tabs_ul a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            var $new_tab = $($(e.target).attr("href"));
            var $old_tab = $($(e.relatedTarget).attr("href"));

            if ($new_tab.index() > $old_tab.index()) {
                var $menu = $('.screen__3tabs_ul');
                var $menuitem = $('.screen__3tabs_ul .nav-link.active');
                var elOffset = $menuitem.offset().left;
                var elWidth = $menuitem.outerWidth(true);
                var menuScrollLeft = $menu.scrollLeft();
                var menuWidth = $menu.width();

                var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2) + 1000;
                $menu.scrollLeft(myScrollPos);
                $new_tab.css('position', 'relative').css("right", "-2500px");
                $new_tab.animate({ "right": "0" }, 500, 'linear');
            }
            else {
                var $menu = $('.screen__3tabs_ul');
                var $menuitem = $old_tab;
                var elOffset = $menuitem.offset().left;
                var elWidth = $menuitem.outerWidth(true);
                var menuScrollLeft = $menu.scrollLeft();
                var menuWidth = $menu.width();

                var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2) - 1000;
                $menu.scrollLeft(myScrollPos);
                $new_tab.css('position', 'relative').css("left", "-2500px");
                $new_tab.animate({ "left": "0" }, 500, 'linear');
            }
        });
    }
});

$(window).resize(function () {
    screen_width = $(window).width();
    screen_height = $(window).height();
    if (screen_width <= 767) {
        $(".navbar-toggler>.close").attr('style', 'color: #000 !important');
        $("#demo_timer").attr('style', 'display: none !important');
        $('nav').addClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: hidden");
        $(".navbar-toggler-icon").attr('style', "color: #000; -webkit-text-stroke: 1px #fff");
        if ($('#screen__helpcenterpage_inp').val() == '1') {
            if (screen_width > screen_height) {
                $('nav').attr('style', "display: block;");
                $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
                $('nav').removeClass('new-navbar-mbl');
                $('.newnavbar_img').attr('style', "visibility: visible");
            }
            else {
                $('nav').attr('style', "display: none;");
            }
        }
        else if ($('#screen__personalinfo_inp').val() == '1') {
            $(".footer-buttons-div").attr('style', 'display: none !important');
            $('nav').attr('style', 'display: none !important');
            $("#demo_timer").attr('style', 'display: none !important');
        }
        else if ($('#screen__ajouter_inp').val() == '1' || $('#screen__connexion_inp').val() == '1' || $('#screen__creercompte_inp').val() == '1') {
            $(".footer-buttons-div").attr('style', 'display: none !important');
        }
        else {
            if (screen_width > screen_height) {
                $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
                $(".footer-buttons-div").attr('style', 'display: none !important');
                $('nav').removeClass('new-navbar-mbl');
                $('.newnavbar_img').attr('style', "visibility: visible");
            }
            else {
                $(".footer-buttons-div").attr('style', 'display: block !important');
            }
        }

        // For Screen__3 tabs animation
        $('.screen__3tabs_ul a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
            var $old_tab = $($(e.target).attr("href"));
            var $new_tab = $($(e.relatedTarget).attr("href"));

            if ($new_tab.index() < $old_tab.index()) {
                $old_tab.css('position', 'relative').css("right", "0").show();
                $old_tab.animate({ "right": "-100%" }, 300, function () {
                    $old_tab.css("right", 0).removeAttr("style");
                });
            }
            else {
                $old_tab.css('position', 'relative').css("left", "0").show();
                $old_tab.animate({ "left": "-100%" }, 300, function () {
                    $old_tab.css("left", 0).removeAttr("style");
                });
            }
        });

        $('.screen__3tabs_ul a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            var $new_tab = $($(e.target).attr("href"));
            var $old_tab = $($(e.relatedTarget).attr("href"));

            if ($new_tab.index() > $old_tab.index()) {
                var $menu = $('.screen__3tabs_ul');
                var $menuitem = $('.screen__3tabs_ul .nav-link.active');
                var elOffset = $menuitem.offset().left;
                var elWidth = $menuitem.outerWidth(true);
                var menuScrollLeft = $menu.scrollLeft();
                var menuWidth = $menu.width();

                var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2) + 1000;
                $menu.scrollLeft(myScrollPos);
                $new_tab.css('position', 'relative').css("right", "-2500px");
                $new_tab.animate({ "right": "0" }, 500, 'linear');
            }
            else {
                var $menu = $('.screen__3tabs_ul');
                var $menuitem = $old_tab;
                var elOffset = $menuitem.offset().left;
                var elWidth = $menuitem.outerWidth(true);
                var menuScrollLeft = $menu.scrollLeft();
                var menuWidth = $menu.width();

                var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2) - 1000;
                $menu.scrollLeft(myScrollPos);
                $new_tab.css('position', 'relative').css("left", "-2500px");
                $new_tab.animate({ "left": "0" }, 500, 'linear');
            }
        });
    }
    else {
        $(".navbar-toggler>.close").attr('style', 'color: #fff');
        $('nav').removeClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: visible");
        $(".navbar-toggler-icon").attr('style', "color: #fff; -webkit-text-stroke: 1px #000");
        $(".footer-buttons-div").attr('style', 'display: none !important');
        if ($('#screen__helpcenterpage_inp').val() == '1') {
            $('nav').attr('style', 'display: block !important');
            $("#demo_timer").attr('style', 'display: flex !important; z-index: 1020; display: block; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
        }
        else if ($('#screen__personalinfo_inp').val() == '1') {
            $('nav').attr('style', 'display: none !important');
            $("#demo_timer").attr('style', 'display: none !important');
        }
        else if ($('#screen__creercompte_inp').val() == '1' || $('#screen__ajouter_inp').val() == '1' || $('#screen__connexion_inp').val() == '1') {
            $("#demo_timer").attr('style', 'z-index: 0; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
        }
        else {
            $("#demo_timer").attr('style', 'display: flex !important; z-index: 1020; display: block; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
        }
    }
});

// Screen_1 Mes Reservation
function openAjouterModal() {
    $('#screen__ajouter_inp').val('1');
    $(".screen__ajouter_main").attr('style', 'visibility: visible;');
    $(".screen__ajouter_dsk_custmodal").attr('style', 'transform: translateY(0%);');
    $(".footer-buttons-div").attr('style', 'display: none !important');
    if (screen_width <= 767) {
        $("#demo_timer").attr('style', 'display: none !important');
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 0; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    }
}
function closeAjouterModal() {
    $('#screen__ajouter_inp').val('0');
    $(".screen__ajouter_main").attr('style', 'visibility: hidden;');
    $(".screen__ajouter_dsk_custmodal").attr('style', 'transform: translateY(100%);');
    if (screen_width <= 767) {
        if (screen_width > screen_height) {
            $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
            $(".footer-buttons-div").attr('style', 'display: none !important');
            $('nav').removeClass('new-navbar-mbl');
            $('.newnavbar_img').attr('style', "visibility: visible");
        }
        else {
            $("#demo_timer").attr('style', 'display: none !important');
            $(".footer-buttons-div").attr('style', 'display: block !important');
        }
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    }
}
function openConnexionModal() {
    $('#screen__connexion_inp').val('1');
    $(".screen__connexion_main").attr('style', 'display: block !important');
    $(".footer-buttons-div").attr('style', 'display: none !important');
    $("body").addClass('screen_bodyclass_white');
    if (screen_width <= 767) {
        $(".navbar-toggler>.close").attr('style', 'color: #000 !important');
        $("#demo_timer").attr('style', 'display: none !important');
        $('nav').addClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: hidden");
        $(".navbar-toggler-icon").attr('style', "color: #000; -webkit-text-stroke: 1px #fff");
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1');
    }
}
function closeConnexionModal() {
    $('#screen__connexion_inp').val('0');
    $(".screen__connexion_main").attr('style', 'display: none !important');
    $("body").removeClass('screen_bodyclass_white');
    if (screen_width <= 767) {
        if (screen_width > screen_height) {
            $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
            $(".footer-buttons-div").attr('style', 'display: none !important');
            $('nav').removeClass('new-navbar-mbl');
            $('.newnavbar_img').attr('style', "visibility: visible");
        }
        else {
            $("#demo_timer").attr('style', 'display: none !important');
            $(".footer-buttons-div").attr('style', 'display: block !important');
        }
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    }
}
// Forgot password
function openForgotPassModal() {
    $('#screen__forgotpass_inp').val('1');
    $(".screen__forgotpass_main").attr('style', 'display: block !important');
    $(".footer-buttons-div").attr('style', 'display: none !important');
    if (screen_width <= 767) {
        $(".navbar-toggler>.close").attr('style', 'color: #000 !important');
        $("#demo_timer").attr('style', 'display: none !important');
        $('nav').addClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: hidden");
        $(".navbar-toggler-icon").attr('style', "color: #000; -webkit-text-stroke: 1px #fff");
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1');
    }
}
function closeForgotPassModal() {
    $('#screen__forgotpass_inp').val('0');
    // $(".screen__forgotpass_main").attr('style', 'display: none !important');
    // if (screen_width <= 767) {
    //     if (screen_width > screen_height) {
    //         $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    //         $(".footer-buttons-div").attr('style', 'display: none !important');
    //         $('nav').removeClass('new-navbar-mbl');
    //         $('.newnavbar_img').attr('style', "visibility: visible");
    //     }
    //     else {
    //         $("#demo_timer").attr('style', 'display: none !important');
    //         $(".footer-buttons-div").attr('style', 'display: block !important');
    //     }
    // }
    // else {
    //     $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    // }
}

function openForgotPassConfirmModal() {
    $('#screen__forgotpassconfirm_inp').val('1');
    $(".screen__forgotpass_confirm").attr('style', 'display: block !important');
    $(".screen__forgotpass_main").attr('style', 'display: none !important');
    $(".footer-buttons-div").attr('style', 'display: none !important');
    if (screen_width <= 767) {
        $(".navbar-toggler>.close").attr('style', 'color: #000 !important');
        $("#demo_timer").attr('style', 'display: none !important');
        $('nav').addClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: hidden");
        $(".navbar-toggler-icon").attr('style', "color: #000; -webkit-text-stroke: 1px #fff");
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1');
    }
}
// Reset password
function openResetPassModal() {
    $('#screen__resetpass_inp').val('1');
    $(".screen__resetpass_main").attr('style', 'display: block !important');
    $(".footer-buttons-div").attr('style', 'display: none !important');
    if (screen_width <= 767) {
        $(".navbar-toggler>.close").attr('style', 'color: #000 !important');
        $("#demo_timer").attr('style', 'display: none !important');
        $('nav').addClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: hidden");
        $(".navbar-toggler-icon").attr('style', "color: #000; -webkit-text-stroke: 1px #fff");
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1');
    }
}
function closeResetPassModal() {
    $('#screen__resetpass_inp').val('0');
    // $(".screen__resetpass_main").attr('style', 'display: none !important');
    // if (screen_width <= 767) {
    //     if (screen_width > screen_height) {
    //         $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    //         $(".footer-buttons-div").attr('style', 'display: none !important');
    //         $('nav').removeClass('new-navbar-mbl');
    //         $('.newnavbar_img').attr('style', "visibility: visible");
    //     }
    //     else {
    //         $("#demo_timer").attr('style', 'display: none !important');
    //         $(".footer-buttons-div").attr('style', 'display: block !important');
    //     }
    // }
    // else {
    //     $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    // }
}

function openResetPassConfirmModal() {
    $('#screen__resetpassconfirm_inp').val('1');
    $(".screen__resetpass_confirm").attr('style', 'display: block !important');
    $(".screen__resetpass_main").attr('style', 'display: none !important');
    $(".footer-buttons-div").attr('style', 'display: none !important');
    if (screen_width <= 767) {
        $(".navbar-toggler>.close").attr('style', 'color: #000 !important');
        $("#demo_timer").attr('style', 'display: none !important');
        $('nav').addClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: hidden");
        $(".navbar-toggler-icon").attr('style', "color: #000; -webkit-text-stroke: 1px #fff");
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1');
    }
}

// Screen_2 Compte
function openCreerCompteModal() {
    $('#screen__creercompte_inp').val('1');
    $("body").addClass('screen_bodyclass_white');
    $(".screen__creercompte_main").attr('style', 'display: block !important');
    $("#screen__2_1by3").attr('style', 'display: block !important');
    $("#screen__2_2by3").attr('style', 'display: none !important');
    $("#screen__2_3by3").attr('style', 'display: none !important');
    if (screen_width <= 767) {
        $(".footer-buttons-div").attr('style', 'display: none !important');
        $(".navbar-toggler>.close").attr('style', 'color: #000 !important');
        $("#demo_timer").attr('style', 'display: none !important');
        $('nav').addClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: hidden");
        $(".navbar-toggler-icon").attr('style', "color: #000; -webkit-text-stroke: 1px #fff");
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1');
    }
}
function closeCreerCompteModal() {
    $('#screen__creercompte_inp').val('0');
    $("body").removeClass('screen_bodyclass_white');
    $(".screen__creercompte_main").attr('style', 'display: none !important');
    $("#screen__2_1by3").attr('style', 'display: none !important');
    $("#screen__2_2by3").attr('style', 'display: none !important');
    $("#screen__2_3by3").attr('style', 'display: none !important');
    if (screen_width <= 767) {
        $("#demo_timer").attr('style', 'display: none !important');
        if (screen_width > screen_height) {
            $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
            $(".footer-buttons-div").attr('style', 'display: none !important');
            $('nav').removeClass('new-navbar-mbl');
            $('.newnavbar_img').attr('style', "visibility: visible");
        }
        else {
            $(".footer-buttons-div").attr('style', 'display: block !important');
        }
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
    }
}
function backCreerCompteModal(id) {
    if (id == '1') {
        $("#screen__2_1by3").attr('style', 'display: block !important');
        $("#screen__2_2by3").attr('style', 'display: none !important');
        $("#screen__2_3by3").attr('style', 'display: none !important');
    }
    if (id == '2') {
        $("#screen__2_1by3").attr('style', 'display: none !important');
        $("#screen__2_2by3").attr('style', 'display: block !important');
        $("#screen__2_3by3").attr('style', 'display: none !important');
    }
}
$("#continue_screen2_1by3").click(function () {
    $("#screen__2_1by3").attr('style', 'display: none !important');
    $("#screen__2_2by3").attr('style', 'display: block !important');
    $("#screen__2_3by3").attr('style', 'display: none !important');
});
$("#continue_screen2_2by3").click(function () {
    $("#screen__2_1by3").attr('style', 'display: none !important');
    $("#screen__2_2by3").attr('style', 'display: none !important');
    $("#screen__2_3by3").attr('style', 'display: block !important');
});
// Screen_3
function openBookingDetailsModal() {
    $('#screen__mesreserv_details_inp').val('1');
    $(".screen__3Mdl_details").attr('style', 'visibility: visible;');
    $(".screen__3details_custommodal").attr('style', 'transform: translateY(0%);');
}
function closeBookingDetailsModal() {
    $('#screen__mesreserv_details_inp').val('0');
    $(".screen__3Mdl_details").attr('style', 'visibility: hidden;');
    $(".screen__3details_custommodal").attr('style', 'transform: translateY(100%);');
}
function openBookingModifierModal() {
    $('#screen__mesreserv_modifier_inp').val('1');
    $(".screen__3Mdl_modifier").attr('style', 'visibility: visible;');
    $(".screen__3modifier_custommodal").attr('style', 'transform: translateY(0%);');
    // Close the previous details modal
    $('#screen__mesreserv_details_inp').val('0');
    $(".screen__3Mdl_details").attr('style', 'visibility: hidden;');
    $(".screen__3details_custommodal").attr('style', 'transform: translateY(100%);');
}
function closeBookingModifierModal() {
    $('#screen__mesreserv_modifier_inp').val('0');
    $(".screen__3Mdl_modifier").attr('style', 'visibility: hidden;');
    $(".screen__3modifier_custommodal").attr('style', 'transform: translateY(100%);');
    // Again opening the details modal
    $('#screen__mesreserv_details_inp').val('1');
    $(".screen__3Mdl_details").attr('style', 'visibility: visible;');
    $(".screen__3details_custommodal").attr('style', 'transform: translateY(0%);');
}
function openBookingAnnulerModal() {
    $('#screen__mesreserv_annuler_inp').val('1');
    $(".screen__3Mdl_annuler").attr('style', 'visibility: visible;');
    $(".screen__3annuler_custommodal").attr('style', 'transform: translateY(0%);');
    // Close the previous details modal
    $('#screen__mesreserv_details_inp').val('0');
    $(".screen__3Mdl_details").attr('style', 'visibility: hidden;');
    $(".screen__3details_custommodal").attr('style', 'transform: translateY(100%);');
}
function closeBookingAnnulerModal() {
    $('#screen__mesreserv_annuler_inp').val('0');
    $(".screen__3Mdl_annuler").attr('style', 'visibility: hidden;');
    $(".screen__3annuler_custommodal").attr('style', 'transform: translateY(100%);');
    // Again opening the details modal
    $('#screen__mesreserv_details_inp').val('1');
    $(".screen__3Mdl_details").attr('style', 'visibility: visible;');
    $(".screen__3details_custommodal").attr('style', 'transform: translateY(0%);');
}
// Screen_4 js
function openPersonalInfoModal() {
    $('#screen__personalinfo_inp').val('1');
    $(".screen__4infocontainer").attr('style', 'display: block;');
    $(".screen__4maincontainer").attr('style', 'display: none');
    $("#demo_timer").attr('style', 'display: none !important');
    // $(".inner-custom-navbar").attr('style', 'display: none !important');
    $('nav').attr('style', 'display: none !important');
    $(".footer-buttons-div").attr('style', 'display: none !important');
}
function closePersonalInfoModal() {
    $('#screen__personalinfo_inp').val('0');
    $(".screen__4infocontainer").attr('style', 'display: none');
    $(".screen__4maincontainer").attr('style', 'display: block');
    if (screen_width <= 767) {
        $('nav').addClass('new-navbar-mbl');
        $('nav').attr('style', 'display: block !important');
        if (screen_width > screen_height) {
            $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
            $(".footer-buttons-div").attr('style', 'display: none !important');
            $('nav').removeClass('new-navbar-mbl');
            $('.newnavbar_img').attr('style', "visibility: visible");
        }
        else {
            $(".footer-buttons-div").attr('style', 'display: block !important');
        }
    }
    else {
        $("#demo_timer").attr('style', 'z-index: 1020; display: flex !important; color: black; background: #fbd220; font-weight: 700; text-align: center; min-height: 32px;');
        $(".footer-buttons-div").attr('style', 'display: none !important');
        $('nav').removeClass('new-navbar-mbl');
        $('.newnavbar_img').attr('style', "visibility: visible");
    }
}
function openVehiclesListModal() {
    $('#screen__vehicles_list_inp').val('1');
    $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: visible;');
    $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(0%);');
}
function closeVehiclesListModal() {
    $('#screen__vehicles_list_inp').val('0');
    $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: hidden;');
    $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(100%);');
    if (screen_width <= 767) {
        if (screen_width > screen_height) {
            $(".footer-buttons-div").attr('style', 'display: none !important');
        }
        else {
            $(".footer-buttons-div").attr('style', 'display: block !important');
        }
    }
}
function openVehicleEditModal() {
    $('#screen__vehicles_edit_inp').val('1');
    $(".screen__4Mdl_vehiclesedit").attr('style', 'visibility: visible;');
    $(".screen__4vehicleedit_custommodal").attr('style', 'transform: translateY(0%);');
    $(".footer-buttons-div").attr('style', 'display: none !important');
    // Vehicles List modal hide
    $('#screen__vehicles_list_inp').val('0');
    $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: hidden;');
    $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(100%);');
}
function closeVehicleEditModal() {
    $('#screen__vehicles_edit_inp').val('0');
    $(".screen__4Mdl_vehiclesedit").attr('style', 'visibility: hidden;');
    $(".screen__4vehicleedit_custommodal").attr('style', 'transform: translateY(100%);');
    // Vehicles List Modal show
    $('#screen__vehicles_list_inp').val('1');
    $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: visible;');
    $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(0%);');
}
function openVehicleAddModal() {
    $('#screen__vehicles_add_inp').val('1');
    $(".screen__4Mdl_vehiclesadd").attr('style', 'visibility: visible;');
    $(".screen__4vehicleadd_custommodal").attr('style', 'transform: translateY(0%);');
    $(".footer-buttons-div").attr('style', 'display: none !important');
    // Vehicles List modal hide
    $('#screen__vehicles_list_inp').val('0');
    $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: hidden;');
    $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(100%);');
}
function closeVehicleAddModal() {
    $('#screen__vehicles_add_inp').val('0');
    $(".screen__4Mdl_vehiclesadd").attr('style', 'visibility: hidden;');
    $(".screen__4vehicleadd_custommodal").attr('style', 'transform: translateY(100%);');
    // Vehicles List Modal show
    $('#screen__vehicles_list_inp').val('1');
    $(".screen__4Mdl_vehicleslist").attr('style', 'visibility: visible;');
    $(".screen__4vehiclelist_custommodal").attr('style', 'transform: translateY(0%);');
}
function openContactorModal() {
    $('#screen__contactor_inp').val('1');
    $(".screen__4Mdl_contactor").attr('style', 'visibility: visible;');
    $(".screen__4contactor_custommodal").attr('style', 'transform: translateY(0%);');
}
function closeContactorModal() {
    $('#screen__contactor_inp').val('0');
    $(".screen__4Mdl_contactor").attr('style', 'visibility: hidden;');
    $(".screen__4contactor_custommodal").attr('style', 'transform: translateY(100%);');
}
$('input#screen__4contactnumber').attr('readonly', true);
$('input#screen__4contactemail').attr('readonly', true);
function copyContact(value) {
    var copyText = document.getElementById(value);
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
}

// New Navbar functions
function dummyNavbarFunc() {
    $(".newnav_usernotactive").attr('style', 'display: none !important');
    $(".newnav_useractive").attr('style', 'display: flex !important');
}
var $el = $("#openNavMenuMblid");
var $ee = $(".newnav_mblmenu");
$el.click(function (e) {
    e.stopPropagation();
    $(".newnav_mblmenu").addClass('active');
    $("body").addClass('new_navbar_mobile_body');
});
$(document).on('click', function (e) {
    if (($(e.target).attr('class') != $ee.attr('class')) && ($ee.hasClass('active'))) {
        $ee.removeClass('active');
        $("body").removeClass('new_navbar_mobile_body');
    }
});

$("#screen_hs_inputsearch").click(function (e) {
    e.stopPropagation();
    $(".screen__hcsearchbox").attr('style', 'display: block');
});
$(document).on('click', function (e) {
    if (($(e.target).attr('class') != $(".screen__hcsearchbox").attr('class'))) {
        $(".screen__hcsearchbox").attr('style', 'display: none');
    }
});