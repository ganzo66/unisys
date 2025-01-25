<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch teacher gender data
        $teacherData = DB::table('teachers')
            ->select('huis', DB::raw('COUNT(*) as total'))
            ->groupBy('huis')
            ->get();

        // Prepare teacher data for Google Charts
        $teacherChartData = [['Хүйс', 'Тоо']]; // Add headers for Google Charts
        foreach ($teacherData as $row) {
            $teacherChartData[] = [$row->huis, (int)$row->total];
        }

        // Fetch student gender data
        $studentData = DB::table('students')
            ->select('huis', DB::raw('COUNT(*) as total'))
            ->groupBy('huis')
            ->get();

        // Prepare student data for Google Charts
        $studentChartData = [['Хүйс', 'Тоо']]; // Add headers for Google Charts
        foreach ($studentData as $row) {
            $studentChartData[] = [$row->huis, (int)$row->total];
        }

        $departmentCount = DB::table('departments')->count();
        $classCount = DB::table('classes')->count();
        $subjectCount = DB::table('subjects')->count();

        // Pass the chart data to the view
        return view('admin.dashboard', [
            'teacherChartData' => json_encode($teacherChartData),
            'studentChartData' => json_encode($studentChartData),
            'departmentData'=> $departmentCount,
            'classData'=>$classCount,
            'subjectData'=>$subjectCount,
        ]);
    }
}
