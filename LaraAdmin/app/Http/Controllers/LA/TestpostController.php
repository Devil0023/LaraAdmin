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

use App\Models\Testtable;

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
        $module = Module::get('Testtables');
        return View('la.testpost.index', [
            'module' => $module
        ]);
    }

    public function postdatapost(Request $request){

        $info = Testtable::create(array(
            "name" => $request->name,
            "address" => $request->address,
        ));

        var_dump($info);

//        DB::beginTransaction();
//        $orderInfo = TicketOrder::where('id', 11482)
//            // ->where('user_order_id', $userOrderId)
//            // ->where('state', 0)
//            ->lockForUpdate()
//            ->first();
//        $orderInfo->state=1;
//        $s = $orderInfo->save();
//        var_dump($s);
//        DB::commit();
//        $orderInfo->state=2;
//        $s = $orderInfo->save();
//        var_dump($s);
//        exit(json_encode($orderInfo));
    }

}
