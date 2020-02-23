<?php

return [

    /*
     * Relative path from the app directory to api controllers directory.
     */
    'controllers_dir'  => 'Api/Controllers',

    /*
     * Relative path from the app directory to service directory.
     */
    'services_dir' => 'Api/Services',

    /*
     * Relative path from the app directory to the export file.
     */
    'exports_dir'      => 'Api/Exports',

    /*
     * Relative path from the app directory to the api routes file.
     */
    'routes_file'      => 'Api/routes.php',

    /*
     * Relative path from the app directory to the models directory. Typically it's either 'Models' or ''.
     */
    'models_base_dir'  => 'Models',

    /*
     * Relative path from the base directory to the api controller stub.
     */
    'controller_stub'  => 'vendor/huangwalker/api-model-generator/src/Generator/stubs/controller.stub',

    /*
     * Relative path from the base directory to the api controller stub.
     */
    'export_stub'  => 'vendor/huangwalker/api-model-generator/src/Generator/stubs/export.stub',

    /*
     * Relative path from the base directory to the route stub.
     */
    'route_stub'       => 'vendor/huangwalker/api-model-generator/src/Generator/stubs/route.stub',

    /*
     * Relative path from the base directory to the service stub.
     */
    'service_stub' => 'vendor/huangwalker/api-model-generator/src/Generator/stubs/service.stub',
];
