<?php


use App\Http\Controllers\BillingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::group(['middleware' => ['auth', AdminMiddleware::class]], function () {
    
// });

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/perfil', [UserController::class, 'showProfile'])->name('user.perfil');
    Route::get('/event-show/{event}', [EventController::class, 'showEvent'])->name('events.show');
    Route::get('/formulario-libros', [LibrosController::class, 'createLibros'])->name('libros.create');
    Route::post('/guardar-libros', [LibrosController::class, 'storeLibros'])->name('libros.store');
    Route::get('/formularios', [EventUserController::class, 'createEventUser'])->name('events-user.create');
    Route::post('/eventuser', [EventUserController::class, 'store'])->name('events-user.store');
    Route::get('/nuevo-socio', [BillingController::class, 'index'])->middleware('auth')->name('billings.index');
    Route::get('/usuarios', [BillingController::class, 'showAll'])->middleware('auth')->name('billings.show');
    Route::get('/user/invoice/{invoice}', function (Request $request, string $invoiceId) {
        return $request->user()->downloadInvoice($invoiceId);
    });
    Route::get('/stripe/{event}', [StripePaymentController::class, 'stripe'])->name('stripe');
    Route::post('/stripe/{event}', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
    Route::get('/pagos', [StripePaymentController::class, 'index'])->name('payments.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/category-index', [CategoryController::class, 'indexCategory'])->name('categories.index');
    Route::get('/category-create', [CategoryController::class, 'createCategory'])->name('categories.create');
    Route::post('/category-store', [CategoryController::class, 'storeCategory'])->name('categories.store');
    Route::delete('/category-destroy/{id}', [CategoryController::class, 'destroyCategory'])->name('categories.destroy');
    Route::get('/actividades', [EventController::class, 'indexEvent'])->name('events.index');
    Route::get('/event-create', [EventController::class, 'createEvent'])->name('events.create');
    Route::post('/event-store', [EventController::class, 'storeEvent'])->name('events.store');
    Route::delete('/event-destroy/{id}', [EventController::class, 'destroyEvent'])->name('events.destroy');
    Route::get('/libros', [LibrosController::class, 'indexLibros'])->name('libros.index');
    Route::get('/mostrar-libro/{id}', [LibrosController::class, 'showLibro'])->name('libros.show');
    Route::delete('/libro-destroy/{id}', [LibrosController::class, 'destroyLibro'])->name('libros.destroy');
    Route::get('/eventUser-index', [EventUserController::class, 'indexEventUser'])->name('events-user.index');
    Route::get('/eventUser-show/{id}', [EventUserController::class, 'showEventUser'])->name('events-user.show');
    Route::delete('/eventUser-destroy/{id}', [EventUserController::class, 'destroyEventUser'])->name('events-user.destroy');
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('ampa-blog', [BlogController::class, 'showAllBlogs'])->name('blog.blogs');
Route::get('/todas-las-actividades', [EventController::class, 'showAllEvents'])->name('events.events');


Route::get('/contacto', function () {
    return view('footer.contactoFooter');
});
Route::get('/avisoLegal', function () {
    return view('footer.avisoLegal');
});
Route::get('/politicaPriv', function () {
    return view('footer.politicaPrivacidad');
});


//Calendario
// Route::get('/calendar', function () {
//     return view('components.calendar');
// });

//stripe(Aida)






