<?php


use App\Http\Controllers\BillingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

//vista contacto footer
Route::get('/contacto', function () {
    return view('footer.contactoFooter');
});


//Formulario peque ruta
Route::get('/pequeruta', function () {
    return view('forms.rutaPequeForm');
});

//Formulario banco libros
Route::get('/banco-libros', function () {
    return view('forms.banco-libros');
});

//Formulario Actividades varias
Route::get('/actiForm', function () {
    return view('forms.actividadesForm');
});

//Formulario banco libros
Route::get('/bancolibros', function () {
    return view('forms.banco-libros');
});

// Vista Aviso legal
Route::get('/avisoLegal', function () {
    return view('footer.avisoLegal');
});

// Vista Politica de Privacidad
Route::get('/politicaPriv', function () {
    return view('footer.politicaPrivacidad');
});

Route::get('/dashboard', function () {
    return view('home-dashboard');
})->name('dashboard');


Route::get('/user', function () {
    return view('user.create');
})->name('user.create');

Route::get('/rutas', function () {
    return view('rutas.index');
})->name('rutas.index');

Route::get('/libros', function () {
    return view('libros.index');
})->name('libros.index');


Route::get('/logout', function () {
    return view('logout.index');
})->name('logout.index');


Route::get('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/perfil', [UserController::class, 'showProfile'])->middleware('auth')->name('user.perfil');


//Categories
Route::get('/category-index', [CategoryController::class, 'indexCategory'])->name('categories.index');
Route::get('/category-create', [CategoryController::class, 'createCategory'])->name('categories.create');
Route::post('/category-store', [CategoryController::class, 'storeCategory'])->name('categories.store');
Route::get('/category-edit/{id}', [CategoryController::class, 'editCategory'])->name('categories.edit');
Route::put('/category-update/{id}', [CategoryController::class, 'updateCategory'])->name('categories.update');
Route::get('/category-show', [CategoryController::class, 'showCategory'])->name('categories.show');
Route::delete('/category-destroy/{id}', [CategoryController::class, 'destroyCategory'])->name('categories.destroy');

//Events
Route::get('/actividades', [EventController::class, 'indexEvent'])->name('events.index');
Route::get('/todas-las-actividades', [EventController::class, 'showAllEvents'])->name('events.events');
Route::get('/event-create', [EventController::class, 'createEvent'])->name('events.create');
Route::post('/event-store', [EventController::class, 'storeEvent'])->name('events.store');
Route::get('/event-show/{id}', [EventController::class, 'showEvent'])->name('events.show');
Route::delete('/event-destroy/{id}', [EventController::class, 'destroyEvent'])->name('events.destroy');



//Event user
Route::get('/eventUser-index', [EventUserController::class, 'indexEventUser'])->name('events-user.index');
Route::get('/formularios', [EventUserController::class, 'createEventUser'])->name('events-user.create');
Route::post('/eventuser', [EventUserController::class, 'store'])->name('events-user.store');
Route::get('/eventUser-show', [EventUserController::class, 'showEventUser'])->name('events-user.show');
Route::delete('/eventUser-destroy/{id}', [EventUserController::class, 'destroyEventUser'])->name('events-user.destroy');


//BLOG Dashboard
// Ruta para mostrar todos los blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');


// Ruta para mostrar el formulario de creación de un blog
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

// Ruta para guardar un nuevo blog
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

// Ruta para mostrar un blog específico layout
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::get('ampa-blog', [BlogController::class, 'showAllBlogs'])->name('blog.blogs');

// Ruta para eliminar un blog
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

//Calendario
// Route::get('/calendar', function () {
//     return view('components.calendar');
// });

//stripe(Aida)
Route::get('/nuevo-socio', [BillingController::class, 'index'])->middleware('auth')->name('billings.index');
Route::get('/usuarios', [BillingController::class, 'showAll'])->middleware('auth')->name('billings.show');

Route::get('/user/invoice/{invoice}', function (Request $request, string $invoiceId) {
    return $request->user()->downloadInvoice($invoiceId);
});


Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');

