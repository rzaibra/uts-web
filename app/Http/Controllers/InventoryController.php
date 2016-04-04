<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Inventory;

class InventoryController extends Controller
{
    public function __construct(Inventory $inventory)
    {
        $this->inventory = $inventory;
    }

    public function index(Request $request)
    {
        $inventories = $this->inventory->all();
        return response()->view('index', ['inventories' => $inventories ]);
    }

    public function form(Request $request)
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($request->input('id'))) {
              $inventory = Inventory::find($request->input('id'));
              $inventory->name = $request->input('name');
              $inventory->code = $request->input('code');
              $inventory->qty = $request->input('qty');
              $inventory->save();
            } else {
              // Catch the values and push it to database!
              $this->inventory->name = $request->input('name');
              $this->inventory->code = $request->input('code');
              $this->inventory->qty = $request->input('qty');
              $this->inventory->save();
            }

            // Redirect using plain PHP function
            header('Location:http://'.$_SERVER['HTTP_HOST']);
            die();
        } else {
            // Nay, return the empty form page
            $name = $request->query('name');
            $code = $request->query('code');
            $qty = $request->query('qty');
            $id = $request->query('id');
            return response()->view('form', [
              'name'=>$name,
              'code'=>$code,
              'qty'=>$qty,
              'id'=>$id
            ]);
        }

    }
    public function delete(Request $request) {

      $id = $request->query('id');
      Inventory::destroy($id);

      // Redirect using plain PHP function
      header('Location:http://'.$_SERVER['HTTP_HOST']);
      die();
    }

    // Unused

    /*
    public function detail(Request $request, $id)
    {
        return response()->view('detail');
    }

    public function create(Request $request) {
    }
     */

}
