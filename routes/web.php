<?php


use App\Http\Controllers\AgentController;
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


Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});


// Agents Logged in routes
Route::get('/agent', function () {
    return view('agentPages.index');
})->name('agent_index')->middleware('auth', 'role');

Route::get('/agentactivebeneficiaries', function () {
    return view('agentPages.activebeneficiaries');
})->name('agent_activeben')->middleware('auth', 'role');

Route::post('/agentaddbeneficiaries', function () {
    return view('agentPages.addbeneficiaries');
})->name('agent_addben')->middleware('auth', 'role');

Route::get('/agentaddgroupbeneficiaries', function () {
    return view('agentPages.addgroupbeneficiaries');
})->name('agent_addgroupben')->middleware('auth', 'role');

Route::get('/agentpendingbeneficiaries', function () {
    return view('agentPages.pendingbeneficiaries');
})->name('agent_pendingben')->middleware('auth', 'role');

Route::get('/agenttotalbeneficiaries', function () {
    return view('agentPages.totalbeneficiaries');
})->name('agent_totalben')->middleware('auth', 'role');

Route::get('/agentmessage', function () {
    return view('agentPages.message');
})->name('agent_message')->middleware('auth', 'role');

Route::get('/agentnotification', function () {
    return view('agentPages.notification');
})->name('agent_notify')->middleware('auth', 'role');

Route::get('/agentearning', function () {
    return view('agentPages.earning');
})->name('agent_earning')->middleware('auth', 'role');

Route::get('/agentprofile', function () {
    return view('agentPages.profile');
})->name('agent_profile')->middleware('auth', 'role');



// admins Logged in routes
Route::get('/admin', function () {
    return view('adminPages.index');
})->name('admin_index')->middleware('auth', 'role');

Route::get('/adminactivebeneficiaries', function () {
    return view('adminPages.activebeneficiaries');
})->name('admin_activeben')->middleware('auth', 'role');

Route::get('/adminaddbeneficiaries', function () {
    return view('adminPages.addbeneficiaries');
})->name('admin_addben')->middleware('auth', 'role');

Route::get('/adminpendingbeneficiaries', function () {
    return view('adminPages.pendingbeneficiaries');
})->name('admin_pendingben')->middleware('auth', 'role');

Route::get('/admintotalbeneficiaries', function () {
    return view('adminPages.totalbeneficiaries');
})->name('admin_totalben')->middleware('auth', 'role');

Route::get('/adminactiveagent', function () {
    return view('adminPages.activeagents');
})->name('admin_activeagent')->middleware('auth', 'role');

Route::get('/adminpendingagent', function () {
    return view('adminPages.pendingagents');
})->name('admin_pendingagent')->middleware('auth', 'role');

Route::get('/admintotalagent', function () {
    return view('adminPages.totalagents');
})->name('admin_totalagent')->middleware('auth', 'role');

Route::get('/adminmessage', function () {
    return view('adminPages.message');
})->name('admin_message')->middleware('auth', 'role');

Route::get('/adminnotification', function () {
    return view('adminPages.notification');
})->name('admin_notify')->middleware('auth', 'role');

Route::get('/adminearning', function () {
    return view('adminPages.report');
})->name('admin_report')->middleware('auth', 'role');

Route::get('/adminprofile', function () {
    return view('adminPages.profile');
})->name('admin_profile')->middleware('auth', 'role');



Route::resource('agents', AgentController::class);
