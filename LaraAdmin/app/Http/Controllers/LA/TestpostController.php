<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use Validator;
use Datatables;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\Testmodule;

class TestpostController extends Controller
{


    public function __construct() {
        // Field Access of Listing Columns
//        if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
//            $this->middleware(function ($request, $next) {
//                $this->listing_cols = ModuleFields::listingColumnAccessScan('Testmodules', $this->listing_cols);
//                return $next($request);
//            });
//        } else {
//            $this->listing_cols = ModuleFields::listingColumnAccessScan('Testmodules', $this->listing_cols);
//        }
    }

    /**
     * Display a listing of the Testmodules.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $module = Module::get('Testmodules');
//
//        if(Module::hasAccess($module->id)) {
//            return View('la.testmodules.index', [
//                'show_actions' => $this->show_action,
//                'listing_cols' => $this->listing_cols,
//                'module' => $module
//            ]);
//        } else {
//            return redirect(config('laraadmin.adminRoute')."/");
//        }
    }

    public function postdata(){
        $module = Module::get('Testmodules');
        var_dump($module); die;
        return View('la.testpost.index', [
            'module' => $module
        ]);
    }

    public function postdatapost(){
        echo "Hello2";
    }

}
