<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class ApiRouteContractTest extends TestCase
{
    public function test_the_v1_api_exposes_the_legacy_feature_contract(): void
    {
        $uris = collect(Route::getRoutes()->getRoutes())->pluck('uri');

        foreach ([
            'api/v1/tours',
            'api/v1/packages',
            'api/v1/auth/register',
            'api/v1/auth/login',
            'api/v1/bookings',
            'api/v1/profile',
            'api/v1/admin/users',
            'api/v1/admin/tours',
            'api/v1/admin/packages',
            'api/v1/admin/bookings',
        ] as $uri) {
            $this->assertTrue($uris->contains($uri), "Missing route: {$uri}");
        }
    }
}
