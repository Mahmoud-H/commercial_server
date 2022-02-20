<?php
use App\Http\Controllers\Admin\FrontController;
//use App\Http\Controllers\NotificationMessage;
 // Route::get('/link', function () {
    // Artisan::call('storage:link');
// });
Route::resource('message', \App\Http\Controllers\NotificationMessage::class);

Route::redirect('/', '/login');
//Route::redirect('/', '/commercial/public/login');
Route::get("/front/logousst",'\App\Http\Controllers\Admin\FrontController@logousst');


Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }
    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
//لدخول الموحد
   Route::group(['prefix'=>'front','middleware'=>['AuthFront','web']],function (){ 
     

  Route::resource('UserFrontHome', '\App\Http\Controllers\Front\HomeController');
});
//لدخول الموحد
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

     // front
    Route::group(['prefix' => 'front', 'as' => 'front.'], function () {
        Route::resource('/', '\App\Http\Controllers\Admin\FrontController');
        Route::get('{id}/show', 'FrontController@show')->name('show');

        Route::post('create-step-one', 'FrontController@postCreateStepOne')->name('create_step_one_post');

        Route::get('create-step-two123', 'FrontSessionController@createStepTwo')->name('create_step_two');
        Route::post('create-step-two123_api', 'FrontSessionController@createsteptwo123api')->name('create-step-two123_api'); //API

        Route::get('create-step-two22', 'FrontSessionController@postCreateStepTwo22')->name('create_step_two_post_22');
        Route::post('create-step-two', 'FrontSessionController@postCreateStepTwo')->name('create_step_two_post_22');

        Route::get('create-step-three', 'FrontSessionController@createStepthree')->name('create_step_three');
        Route::post('create-step-three-post', 'FrontSessionController@postCreateStepthree')->name('create_step_three_post');
        Route::get('create-step-four', 'FrontSessionController@createStepfour')->name('create_step_four');

        Route::get('{reg_request}/collection_order', 'FrontController@create_step_collection_order')->name('step_collection_order');
        Route::any('collection_order/{reg_request}/export_pdf', 'FrontController@exportPDF')->name('export_pdf');
        Route::get('collection_order/{reg_request}/approval_request', 'FrontController@approval_request')->name('approval_request');
        Route::post('collection_order/{reg_request}/store_approval_request', 'FrontController@store_approval_request')->name('store_approval_request');

        //accept-rejected
        Route::get('{reg_request}/accept', 'FrontController@accept')->name('accept');
        Route::get('{reg_request}/rejected', 'FrontController@rejected')->name('rejected');

        //search
        Route::post('reg_request_search', 'FrontController@regsearch');
        Route::get('reg_request_search', 'FrontController@regsearch');

        //search excel
//        Route::resource('student', StudentController::class);
//        Route::get('student_export',[StudentController::class, 'get_student_data'])->name('student.export');
    });

});




Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // front
//    Route::resource('front', 'FrontController');
//
//    Route::get('front/{reg_request}/collection_order', 'FrontController@create_step_collection_order')->name('create_step_2');
//    Route::get('front/collection_order/{reg_request}/export_pdf', 'FrontController@exportPDF')->name('export_pdf');
//    Route::get('front/collection_order/{reg_request}/approval_request', 'FrontController@approval_request')->name('approval_request');
//    Route::post('front/collection_order/{reg_request}/store_approval_request', 'FrontController@store_approval_request')->name('store_approval_request');
//
//    Route::post('front/create-step-one', 'FrontController@postCreateStepOne')->name('front.create.step.one.post');
//    Route::get('fron/create-step-two123', 'FrontSessionController@createStepTwo')->name('front.create.step.two');
////    Route::post('fron/create-step-two22', 'FrontSessionController@postCreateStepTwo22')->name('fro.create.step.two22.post');
//    Route::get('fron/create-step-two22', 'FrontSessionController@postCreateStepTwo22')->name('fro.create.step.two22.post');
//    Route::post('fron/create-step-two', 'FrontSessionController@postCreateStepTwo')->name('fro.create.step.two.post');
//    Route::get('fron/create-step-three', 'FrontSessionController@createStepthree')->name('fron.create.step.three');
//    Route::post('fron/create-step-three-post', 'FrontSessionController@postCreateStepthree')->name('fron.create.step.three.post');
//    Route::get('fron/create-step-four', 'FrontSessionController@createStepfour')->name('fron.create.step.four');
//بداية الفرونت
    // front
  /*  Route::group(['prefix' => 'front', 'as' => 'front.'], function () {
        Route::resource('/', 'FrontController');
        Route::get('{id}/show', 'FrontController@show')->name('show');

        Route::post('create-step-one', 'FrontController@postCreateStepOne')->name('create_step_one_post');

        Route::get('create-step-two123', 'FrontSessionController@createStepTwo')->name('create_step_two');
        Route::post('create-step-two123_api', 'FrontSessionController@createsteptwo123api')->name('create-step-two123_api'); //API

        Route::get('create-step-two22', 'FrontSessionController@postCreateStepTwo22')->name('create_step_two_post_22');
        Route::post('create-step-two', 'FrontSessionController@postCreateStepTwo')->name('create_step_two_post_22');

        Route::get('create-step-three', 'FrontSessionController@createStepthree')->name('create_step_three');
        Route::post('create-step-three-post', 'FrontSessionController@postCreateStepthree')->name('create_step_three_post');
        Route::get('create-step-four', 'FrontSessionController@createStepfour')->name('create_step_four');

        Route::get('{reg_request}/collection_order', 'FrontController@create_step_collection_order')->name('step_collection_order');
        Route::get('collection_order/{reg_request}/export_pdf', 'FrontController@exportPDF')->name('export_pdf');
        Route::get('collection_order/{reg_request}/approval_request', 'FrontController@approval_request')->name('approval_request');
        Route::post('collection_order/{reg_request}/store_approval_request', 'FrontController@store_approval_request')->name('store_approval_request');

        //accept-rejected
        Route::get('{reg_request}/accept', 'FrontController@accept')->name('accept');
        Route::get('{reg_request}/rejected', 'FrontController@rejected')->name('rejected');

        //search
        Route::post('reg_request_search', 'FrontController@regsearch');
        Route::get('reg_request_search', 'FrontController@regsearch');

        //search excel
//        Route::resource('student', StudentController::class);
//        Route::get('student_export',[StudentController::class, 'get_student_data'])->name('student.export');
    });*/
//نهاية الفرونت
    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Com Countries
    Route::delete('com-countries/destroy', 'ComCountriesController@massDestroy')->name('com-countries.massDestroy');
    Route::resource('com-countries', 'ComCountriesController');

    // Com Governorates
    Route::delete('com-governorates/destroy', 'ComGovernoratesController@massDestroy')->name('com-governorates.massDestroy');
    Route::resource('com-governorates', 'ComGovernoratesController');

    // Com Cities
    Route::delete('com-cities/destroy', 'ComCitiesController@massDestroy')->name('com-cities.massDestroy');
    Route::resource('com-cities', 'ComCitiesController');

    // Com Districts
    Route::delete('com-districts/destroy', 'ComDistrictsController@massDestroy')->name('com-districts.massDestroy');
    Route::resource('com-districts', 'ComDistrictsController');

    // Com Needed Docs
    Route::delete('com-needed-docs/destroy', 'ComNeededDocsController@massDestroy')->name('com-needed-docs.massDestroy');
    Route::resource('com-needed-docs', 'ComNeededDocsController');

    // Com Currencies
    Route::delete('com-currencies/destroy', 'ComCurrenciesController@massDestroy')->name('com-currencies.massDestroy');
    Route::resource('com-currencies', 'ComCurrenciesController');

    // Crec Reg Requests
    Route::delete('crec-reg-requests/destroy', 'CrecRegRequestsController@massDestroy')->name('crec-reg-requests.massDestroy');
    Route::resource('crec-reg-requests', 'CrecRegRequestsController');

    // Com Work Class
    Route::delete('com-work-classes/destroy', 'ComWorkClassController@massDestroy')->name('com-work-classes.massDestroy');
    Route::resource('com-work-classes', 'ComWorkClassController');

    // Crec Reg Persons
    Route::delete('crec-reg-people/destroy', 'CrecRegPersonsController@massDestroy')->name('crec-reg-people.massDestroy');
    Route::resource('crec-reg-people', 'CrecRegPersonsController');
    
    Route::get('create_crec-reg-people/{crecRegRequestid}', 'CrecRegPersonsController@createcrecregpeople');

    // Crec Reg Branches
    Route::delete('crec-reg-branches/destroy', 'CrecRegBranchesController@massDestroy')->name('crec-reg-branches.massDestroy');
    Route::resource('crec-reg-branches', 'CrecRegBranchesController');
    
    Route::get('create_crec-reg-branches/{crecRegRequestid}', 'CrecRegBranchesController@createcrecregbranches');

    // Crec Reg Delegates
    Route::delete('crec-reg-delegates/destroy', 'CrecRegDelegatesController@massDestroy')->name('crec-reg-delegates.massDestroy');
    Route::resource('crec-reg-delegates', 'CrecRegDelegatesController');
    
    Route::get('create_crec-reg-delegates/{crecRegRequestid}', 'CrecRegDelegatesController@createcrecregdelegates');

    // Crec Reg Docs
    Route::delete('crec-reg-docs/destroy', 'CrecRegDocsController@massDestroy')->name('crec-reg-docs.massDestroy');
    Route::delete('crec-reg-docs/deleteFile/{crecRegDoc}', 'CrecRegDocsController@deleteFile')->name('crec-reg-docs.deleteFile');
    Route::resource('crec-reg-docs', 'CrecRegDocsController');
    
    Route::get('create_crec-reg-docs/{crecRegRequestid}', 'CrecRegDocsController@createcrecregdocs');

    // crec-settings
    Route::resource('crec-settings', 'SettingsController');
        // Person Type
    Route::delete('person-types/destroy', 'PersonTypeController@massDestroy')->name('person-types.massDestroy');
    Route::resource('person-types', 'PersonTypeController');

    // Com Service
    Route::delete('com-services/destroy', 'ComServiceController@massDestroy')->name('com-services.massDestroy');
    Route::resource('com-services', 'ComServiceController');

    // Fee Class
    Route::delete('fee-classes/destroy', 'FeeClassController@massDestroy')->name('fee-classes.massDestroy');
    Route::resource('fee-classes', 'FeeClassController');

    // Fee Type
    Route::delete('fee-types/destroy', 'FeeTypeController@massDestroy')->name('fee-types.massDestroy');
    Route::resource('fee-types', 'FeeTypeController');

    // Service Needed Fee
    Route::delete('service-needed-fees/destroy', 'ServiceNeededFeeController@massDestroy')->name('service-needed-fees.massDestroy');
    Route::resource('service-needed-fees', 'ServiceNeededFeeController');

    // Crec Reg Fee
    Route::delete('crec-reg-fees/destroy', 'CrecRegFeeController@massDestroy')->name('crec-reg-fees.massDestroy');
    Route::resource('crec-reg-fees', 'CrecRegFeeController');

    // Com Account
    Route::delete('com-accounts/destroy', 'ComAccountController@massDestroy')->name('com-accounts.massDestroy');
    Route::resource('com-accounts', 'ComAccountController');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

//Route::get('gov',function (){
//    \Illuminate\Support\Facades\Storage::disk('z-d')->makeDirectory('test');
//    dd(\Illuminate\Support\Facades\Storage::disk('z-d')->files());
//    \Illuminate\Support\Facades\Storage::disk('ftp')->makeDirectory('test_ftp');
//    dd(\Illuminate\Support\Facades\Storage::disk('ftp')->put('test_ftp/file.txt' , 'file'));
//});
