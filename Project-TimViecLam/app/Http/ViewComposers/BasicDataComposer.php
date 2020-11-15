<?php
 namespace App\Http\ViewComposers;

 use App\Repositories\UserRepository;
 use Illuminate\View\View;
 use Illuminate\Support\Facades\DB;

 class BasicDataComposer
 {
     /**
      * Create a data composer.
      *
      * @return void
      */

      public function __construct()
    {
        // $this->careers = DB::table('career')->get();
        // $this->city = DB::table('city')->get();
    }
     /**
      * Bind data to the view.
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {
        //  $view->with('careers', end($this->careers));
        //  $view->with('city', end($this->city));
     }
 }