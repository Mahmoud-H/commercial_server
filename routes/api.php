<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Com Countries
    Route::apiResource('com-countries', 'ComCountriesApiController');

    // Com Governorates
    Route::apiResource('com-governorates', 'ComGovernoratesApiController');

    // Com Cities
    Route::apiResource('com-cities', 'ComCitiesApiController');

    // Com Districts
    Route::apiResource('com-districts', 'ComDistrictsApiController');

    // Com Needed Docs
    Route::apiResource('com-needed-docs', 'ComNeededDocsApiController');

    // Crec Reg Requests
    Route::apiResource('crec-reg-requests', 'CrecRegRequestsApiController');

    // Com Work Class
    Route::apiResource('com-work-classes', 'ComWorkClassApiController');

    // Crec Reg Branches
    Route::apiResource('crec-reg-branches', 'CrecRegBranchesApiController');

    // Crec Reg Delegates
    Route::apiResource('crec-reg-delegates', 'CrecRegDelegatesApiController');

    // Crec Reg Docs
    Route::post('crec-reg-docs/media', 'CrecRegDocsApiController@storeMedia')->name('crec-reg-docs.storeMedia');
    Route::apiResource('crec-reg-docs', 'CrecRegDocsApiController');

    // Com Service
    Route::apiResource('com-services', 'ComServiceApiController');

    // Fee Class
    Route::apiResource('fee-classes', 'FeeClassApiController');

    // Service Needed Fee
    Route::apiResource('service-needed-fees', 'ServiceNeededFeeApiController');

    // Crec Reg Fee
    Route::apiResource('crec-reg-fees', 'CrecRegFeeApiController');
});
