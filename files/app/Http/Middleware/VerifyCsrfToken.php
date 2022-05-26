<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'modify-booking-by-user',
        'book/update','book/upload-image/*',
        'create-session-contact','create-session-vehicle','create-session-card',
        'book/create-session-contact','book/create-session-vehicle','book/create-session-card',
        'delete-vehicle',
        'book/check-availibility',
        'book', 'book/details',
        'book/request-login',
        'post-add-vehicle',
        'post-edit-vehicle',
        'cancel-booking-by-id',
        'admin/add-helpcenter-category',
        'admin/edit-helpcenter-category',
        'admin/delete-helpcenter-category',
        'admin/add-helpcenter-content',
        'admin/edit-helpcenter-content',
        'admin/delete-helpcenter-content',
        'password/reset',
        'update-info-personnelles',
        'update-identifiant-connexion'
    ];
}
