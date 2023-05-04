<?php

use App\Guest;
use Illuminate\Support\Facades\Route;
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
// Route::get('/greetingz', function () {
//   // $guestReg=Guest::where('category_id',1)->first()->id;//1
//   // $guestVip=Guest::where('category_id',2)->first()->id;//2501
//   // $guestVv=Guest::where('category_id',3)->first()->id;//3461
//   //1200
//   // for ($x = $guestReg; $x <=1200; $x++) {
//   //  $guest=Guest::where('id',$x)->first();
//   //  $num=$x;
//   //  $guest->name=$guest->category->slug.'-'.$x;
//   //  $guest->save();
//   // }
//   // 186
//   // for ($x =$guestVip; $x <=2686; $x++) {
//   //   $guest=Guest::where('id',$x)->first();
//   //   $num=$x-2500;

//   //   $guest->name=$guest->category->slug.'-'.$num;
//   //   $guest->save();
//   //  }
//   //  180
//   //  for ($x =$guestVv; $x <=3640; $x++) {
//   //   $guest=Guest::where('id',$x)->first();
//   //   $num=$x-3460;

//   //   $guest->name=$guest->category->slug.'-'.$num;
//   //   $guest->save();
//   //  }


//   // $lastVip=Guest::where('name',	'VIP-186')->first()->id;//2686
//   // $lastVv=Guest::where('name',	'VVIP-180')->first()->id;//3640
//   //  Prapanca 37 187-223 VIP
//   // $counter=186;
//   //  for ($x = 2687; $x <=2723; $x++) {
//   //   $guest=Guest::where('id',$x)->first();
//   //   $counter+=1;

//   //   $guest->name=$guest->category->slug.'-'.$counter;
//   //   $guest->save();
//   //  }
//   // //  Falatehan 10 224 233 VIP
//   //  for ($x = 2724; $x <=2733; $x++) {
//   //   $guest=Guest::where('id',$x)->first();
//   //   $counter+=1;

//   //   $guest->name=$guest->category->slug.'-'.$counter;
//   //   $guest->save();
//   //  }

//   // 2160-2184  Reg
//   //  for ($x = 2160; $x <=2184; $x++) {
//   //   $guest=Guest::where('id',$x)->first();
//   //   $guest->name=$guest->category->slug.'-'.$x;
//   //   $guest->save();
//   //  }

//   // 181-184  VVIP
//REG 3901-4500
//      for ($x = 3901; $x <=4500; $x++) {
//       // "qr" => "guest-qr/REG-3901.jpg"
//       $qr='guest-qr/REG-'.$x.'.jpg';
//       $guest=Guest::where('qr',$qr)->first();
//       $guest->name=$guest->category->slug.'-'.$x;
//       $guest->save();
//    }
//REG 2028-2040
//      for ($x = 2028; $x <=2040; $x++) {
//       $qr='guest-qr/REG-'.$x.'.jpg';
//       $guest=Guest::where('qr',$qr)->first();
//       $guest->name=$guest->category->slug.'-'.$x;
//       $guest->save();
//    }

//    return 'success';
// });

Auth::routes(['register' => false,'reset' => false,]);
// Route::get('lang/{lang}','HomeController@switchLang')->name('lang.switch');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail', 'HomeController@detail')->name('detail');
Route::get('/business-talk', 'HomeController@businessTalk')->name('business-talk');

Route::get('/early-participant/{location}', 'EarlyParticipantController@earlyParticipantForm');
Route::post('/early-participant/register', 'EarlyParticipantController@register')->name('early-participant.register');

Route::middleware('auth')->group(function(){
  //--- Users // Admins ---
  Route::get('/admin', 'AdminsController@index')->name('admin.index');
  Route::get('/admin/logs/excel', 'AdminsController@export_excel')->name('admin.excel');
  //--- Users // Admins ---
});
Route::middleware(['role:admin','auth'])->group(function(){
  //--- Users // Admins ---
  Route::get('admin/users', 'UserController@index')->name('users.index');
  Route::put('admin/users/{user}/update', 'UserController@update')->name('user.profile.update');
  Route::delete('admin/users/{user}/destroy', 'UserController@destroy')->name('user.destroy');
  Route::put('admin/users/{user}/attach','UserController@attach')->name('user.role.attach');
  Route::put('admin/users/{user}/detach','UserController@detach')->name('user.role.detach');
  //--- Users // Admins ---

    // --- Early Participants ---
    Route::get('/admin/early-participants/export_excel', 'EarlyParticipantController@export_excel')->name('early-participant.excel');
    // Create
    Route::get('/admin/early-participants', 'EarlyParticipantController@index')->name('early-participant.index');
    Route::get('/admin/early-participants/create', 'EarlyParticipantController@create')->name('early-participant.create');
    Route::post('/admin/early-participants', 'EarlyParticipantController@store')->name('early-participant.store');
    Route::put('/admin/early-participants/{early_participant}/send', 'EarlyParticipantController@send')->name('early-participant.send');
    Route::post('/admin/early-participants/send', 'EarlyParticipantController@sendAll')->name('early-participant.send.all');
    // Update
    Route::patch('/admin/early-participants/{early_participant}/update', 'EarlyParticipantController@update')->name('early-participant.update');
    Route::get('/admin/early-participants/{early_participant}/edit', 'EarlyParticipantController@edit')->name('early-participant.edit');
    // Delete
    Route::delete('/admin/early-participants/{early_participant}/destroy', 'EarlyParticipantController@destroy')->name('early-participant.destroy');
    // --- Early Participants ---
});
Route::middleware(['role:admin','can:view,user'])->group(function(){
  //--- Users // Admins ---
  Route::get('admin/users/{user}/profile','UserController@show')->name('user.profile.show');
  //--- Users // Admins ---

 
});

Route::middleware(['role:admin-room','auth'])->group(function(){
// --- Participants ---
Route::get('/participant/qr/download', 'ParticipantController@download')->name('participant.qr.download');
Route::get('/admin/participants/export_excel', 'ParticipantController@export_excel')->name('participant.excel');

  // Create
  Route::get('/admin/participants', 'ParticipantController@index')->name('participant.index');
  Route::get('/admin/participants/create', 'ParticipantController@create')->name('participant.create');
  Route::post('/admin/participants', 'ParticipantController@store')->name('participant.store');
  Route::post('/admin/participants/multiple', 'ParticipantController@storeMultiple')->name('participant.store.multiple');
  Route::put('/admin/participants/{participant}/send', 'ParticipantController@send')->name('participant.send');
  Route::post('/admin/participants/send', 'ParticipantController@sendAll')->name('participant.send.all');
  // Update
  Route::patch('/admin/participants/{participant}/update', 'ParticipantController@update')->name('participant.update');
  Route::get('/admin/participants/{participant}/edit', 'ParticipantController@edit')->name('participant.edit');
  // Delete
  Route::delete('/admin/participants/{participant}/destroy', 'ParticipantController@destroy')->name('participant.destroy');
  // --- Participants ---

  Route::get('/admin/participants/bt1', 'ParticipantController@bt1')->name('participant.bt1');
  Route::get('/admin/participants/bt2', 'ParticipantController@bt2')->name('participant.bt2');
  Route::get('/admin/participants/bt3', 'ParticipantController@bt3')->name('participant.bt3');


 
});
Route::middleware(['role:officer-room','auth'])->group(function(){
  //--- Participant qr ---
  Route::get('/participant-qrcode/{email}', 'ParticipantController@qrCheck')->name('participant.qr.check');
  Route::post('/participant-qrcode/{participant}/present', 'ParticipantController@qrPresent')->name('participant.qr.present');
  Route::post('/participant-qrcode/{participant}/room', 'ParticipantController@qrRoom')->name('participant.qr.log');
  //--- Participant qr ---

  //--- Early Participant qr ---
  // Route::get('/early-participant-qrcode/{email}', 'EarlyParticipantController@qrCheck')->name('early-participant.qr.check');
  // Route::post('/early-participant-qrcode/{early_participant}/present', 'EarlyParticipantController@qrPresent')->name('early-participant.qr.present');
  //--- Early Participant qr ---
});

Route::middleware(['role:receptionist','auth'])->group(function(){
  Route::get('/admin/loket-guests', 'LoketGuestController@index')->name('loket-guest.index');
  Route::get('/admin/loket-guests/create', 'LoketGuestController@create')->name('loket-guest.create');
  Route::post('/admin/loket-guests', 'LoketGuestController@store')->name('loket-guest.store');

  Route::get('/admin/guests', 'GuestController@index')->name('guest.index');
  Route::get('/admin/guests/export_excel', 'GuestController@export_excel')->name('guest.excel');
  Route::get('/admin/guests/create', 'GuestController@create')->name('guest.create');
  // Route::post('/admin/guests/search', 'GuestController@search')->name('guest.search');
  Route::post('/admin/guests', 'GuestController@store')->name('guest.store');
  // Update
  Route::patch('/admin/guests/{guest}/update', 'GuestController@update')->name('guest.update');
  Route::patch('/admin/guests/{guest}/update-name', 'GuestController@updateName')->name('guest.update.name');
  Route::patch('/admin/guests/{guest}/update-barcode-id', 'GuestController@updateBarcodeId')->name('guest.update.barcode-id');
  Route::get('/admin/guests/{guest}/edit', 'GuestController@edit')->name('guest.edit');
  Route::get('/admin/guests/{guest}/logs', 'GuestController@logs')->name('guest.log');
  // Delete
  Route::delete('/admin/guests/{guest}/destroy', 'GuestController@destroy')->name('guest.destroy');
});
Route::middleware(['role:officer-gate','auth'])->group(function(){
  //--- qr ---
  Route::get('/guest-qrcode/{id}', 'GuestController@qrCheck')->name('guest.qr.check');
  Route::post('/guest-qrcode/{guest}/in', 'GuestController@guestIn')->name('guest.in');
  Route::post('/guest-qrcode/{guest}/out', 'GuestController@guestOut')->name('guest.out');
  //--- qr ---
});
Route::get("sitemap.xml" , function () {
  return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
});

