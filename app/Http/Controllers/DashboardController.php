<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Models\Tool;
use App\Models\Picture;
use App\Models\Supplier;
use App\Models\Inventory;
use App\Models\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends Controller {

	public function index()
	{
		// Monday this week
		$last_monday = date('Y-m-d H:i:s', strtotime("last monday"));

		// Requests this week
		//$requests = Requests::where( 'created_at', '>', $last_monday )->get();

		/* Total Cost this Week
		$totals = DB::table('requests')
			->select(DB::raw('FORMAT(SUM(amount * cost), 2) total'))
			->where('created_at', '>', $last_monday)
			->get();*/

		$sum = 0;
		/*foreach($totals[0] as $total)
		{
			$sum = $sum + str_replace(',', '', $total);
		}*/

		if (Auth::check())
		{
			$user = User::find(Auth::user()->id);
			//$notifications = $user->notifications()->unread()->get();
			return view('index', compact('user'));
		} else
		{
			return view('index', compact('last_monday'));
		}
	}

	public function test()
	{
		//$item = Inventory::find(1);

		$result = Supplier::find(6);

		echo json_encode($result->getTotalInventoryValue());

		dd($result);
		//return view('test', compact('result'));
	}
}
