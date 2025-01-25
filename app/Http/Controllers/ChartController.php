<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


// class ChartController extends Controller
// {
//     public function index()
//     {
//         // Fetch chart data from the database
//         $result = DB::table('teachers')
//             ->select('huis as gender', DB::raw('COUNT(*) as total'))
//             ->groupBy('huis')
//             ->get();

//         // Prepare data for Google Charts
//         $chartData = [['Gender', 'Total']];
//         foreach ($result as $row) {
//             $chartData[] = [$row->gender, (int)$row->total];
//         }

//         // Pass data to the view
//         return view('admin.dashboard', ['chartData' => json_encode($chartData)]);
//     }
// }
