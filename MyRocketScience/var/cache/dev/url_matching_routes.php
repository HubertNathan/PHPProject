<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/agency' => [[['_route' => 'Agency List', '_controller' => 'App\\Controller\\AgencyController::index'], null, null, null, false, false, null]],
        '/hangar' => [[['_route' => 'app_hangar_index', '_controller' => 'App\\Controller\\HangarController::index'], null, ['GET' => 0], null, false, false, null]],
        '/hangar/new' => [[['_route' => 'app_hangar_new', '_controller' => 'App\\Controller\\HangarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/starship' => [[['_route' => 'app_starship_index', '_controller' => 'App\\Controller\\StarshipController::index'], null, ['GET' => 0], null, false, false, null]],
        '/starship/new' => [[['_route' => 'app_starship_new', '_controller' => 'App\\Controller\\StarshipController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/agency/(\\d+)(*:215)'
                .'|/hangar/(?'
                    .'|([^/]++)(?'
                        .'|(*:245)'
                        .'|/edit(*:258)'
                        .'|(*:266)'
                    .')'
                    .'|starship/(\\d+)(*:289)'
                .')'
                .'|/starship/(?'
                    .'|([^/]++)(?'
                        .'|/edit(*:327)'
                        .'|(*:335)'
                    .')'
                    .'|(\\d+)/show(*:354)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        215 => [[['_route' => 'agency_show', '_controller' => 'App\\Controller\\AgencyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'app_hangar_show', '_controller' => 'App\\Controller\\HangarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_hangar_edit', '_controller' => 'App\\Controller\\HangarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'app_hangar_delete', '_controller' => 'App\\Controller\\HangarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        289 => [[['_route' => 'app_hangar_starship_show', '_controller' => 'App\\Controller\\HangarController::starshipShow'], ['id'], ['GET' => 0], null, false, true, null]],
        327 => [[['_route' => 'app_starship_edit', '_controller' => 'App\\Controller\\StarshipController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [[['_route' => 'app_starship_delete', '_controller' => 'App\\Controller\\StarshipController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        354 => [
            [['_route' => 'app_starship_show', '_controller' => 'App\\Controller\\StarshipController::starshipShow'], ['id'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
