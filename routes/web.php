<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function() {
    return response()->json('Error Message', 404);
});

Route::get('/','HomeController@index')->name('home');
Route::post('/','HomeController@store')->name('newsletter');
Route::get('/user/events','UsersController@events')->middleware('auth')->name('user.events');
Route::get('/user/notes','UsersController@notes')->middleware('auth')->name('user.notes');
Route::get('/user/students/notes','UsersController@usersnotes')->middleware('auth')->name('users.notes');
Route::resource('blog','BlogController');
Route::resource('contact','contactController');
Route::resource('event','EventController');
Route::resource('user','UsersController')->middleware('auth');
Route::resource('about','AboutController');
Route::resource('member','memberController');
Route::get('/students','HomeController@students')->name('students');
Route::get('/coaches','HomeController@coaches')->name('coaches');
Route::group(['middleware' => ['get.menu']], function () {
    Route::group(
       ['middleware' => ['role:admin'],
        'prefix' => 'admin',
    ],
    function () {

           Route::get('/', 'admin\DashboardController@index')->name('admin');
          // Route::resource('bread',  'BreadController');   //create BREAD (resource)
           Route::resource('users',        'admin\UsersController')->except( ['create', 'store'] );
           Route::resource('students',        'admin\StudentsController');
           Route::resource('coaches',        'admin\CoachesController');
           Route::resource('roles',        'admin\RolesController');
           Route::resource('members',        'admin\membersController');
           //Route::resource('mail',        'MailController');
           Route::resource('events',        'admin\EventController');
           Route::resource('eventsUsers',        'admin\EventUsersController');
           Route::resource('tournament', 'admin\TournementController');
           Route::resource('news', 'admin\blogController');
           Route::resource('abouts', 'admin\aboutContentController');
           Route::resource('homepageContent', 'admin\homepageController');
           Route::resource('faqs', 'admin\faqController');
           Route::resource('notes', 'admin\NotesController');

           Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
           Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
           Route::get('/roles/move/move-up',      'RolesController@moveUp')->name('roles.up');
           Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');

           Route::prefix('menu/element')->group(function () {
               Route::get('/',             'MenuElementController@index')->name('menu.index');
               Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
               Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
               Route::get('/create',       'MenuElementController@create')->name('menu.create');
               Route::post('/store',       'MenuElementController@store')->name('menu.store');
               Route::get('/get-parents',  'MenuElementController@getParents');
               Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
               Route::post('/update',      'MenuElementController@update')->name('menu.update');
               Route::get('/show',         'MenuElementController@show')->name('menu.show');
               Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
           });
           Route::prefix('menu/menu')->group(function () {
               Route::get('/',         'MenuController@index')->name('menu.menu.index');
               Route::get('/create',   'MenuController@create')->name('menu.menu.create');
               Route::post('/store',   'MenuController@store')->name('menu.menu.store');
               Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
               Route::post('/update',  'MenuController@update')->name('menu.menu.update');
               Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
           });
           Route::prefix('media')->group(function () {
               Route::get('/',                 'MediaController@index')->name('media.folder.index');
               Route::get('/folder/store',     'MediaController@folderAdd')->name('media.folder.add');
               Route::post('/folder/update',   'MediaController@folderUpdate')->name('media.folder.update');
               Route::get('/folder',           'MediaController@folder')->name('media.folder');
               Route::post('/folder/move',     'MediaController@folderMove')->name('media.folder.move');
               Route::post('/folder/delete',   'MediaController@folderDelete')->name('media.folder.delete');;

               Route::post('/file/store',      'MediaController@fileAdd')->name('media.file.add');
               Route::get('/file',             'MediaController@file');
               Route::post('/file/delete',     'MediaController@fileDelete')->name('media.file.delete');
               Route::post('/file/update',     'MediaController@fileUpdate')->name('media.file.update');
               Route::post('/file/move',       'MediaController@fileMove')->name('media.file.move');
               Route::post('/file/cropp',      'MediaController@cropp');
               Route::get('/file/copy',        'MediaController@fileCopy')->name('media.file.copy');
           });

           Route::resource('resource/{table}/resource', 'ResourceController')->names([
               'index'     => 'resource.index',
               'create'    => 'resource.create',
               'store'     => 'resource.store',
               'show'      => 'resource.show',
               'edit'      => 'resource.edit',
               'update'    => 'resource.update',
               'destroy'   => 'resource.destroy'
           ]);
       });

});
Auth::routes();
