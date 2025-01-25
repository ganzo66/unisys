@extends('admin.layouts.index');

@section('contents')

    {{-- @if (@session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Teacher chart
            var teacherData = google.visualization.arrayToDataTable({!! $teacherChartData !!});
            var teacherOptions = {
                title: 'Багшийн тоо /хүйсээр/',
                pieHole: 0.4, // Example: create a doughnut chart
            };
            var teacherChart = new google.visualization.PieChart(document.getElementById('teacherChart'));
            teacherChart.draw(teacherData, teacherOptions);

            // Student chart
            var studentData = google.visualization.arrayToDataTable({!! $studentChartData !!});
            var studentOptions = {
                title: 'Оюутны тоо /хүйсээр/',
                pieHole: 0.4, // Example: create a doughnut chart
            };
            var studentChart = new google.visualization.PieChart(document.getElementById('studentChart'));
            studentChart.draw(studentData, studentOptions);
        }
    </script>

    <div class="head" style="width: 100%; display: flex; justify-content: space-evenly ;background-color: #d5d1e9">
        <h2 style="background-color: #d5d1e9">Дашборд</h2>
    </div>
    <hr>

    <div class="maincon">
        <div class="row" style="display: flex; justify-content:space-evenly; margin-bottom: 30px; position: relative;">
            <div class="col-md-3" style="padding:0; width:300px; height: 200px; border: 1px solid black; align-items:center; justify-content:center; background-color:#df8c8c; border-radius:20px">
                <p style="font-size: 30px;font-weight:bolder">Нийт тэнхимийн тоо: </p> <p style="font-size: 30px;font-weight:bolder" >{{ $departmentData }}</p>
            </div>

            <div class="col-md-3" style="padding:0; width:300px; height: 200px; border: 1px solid black; align-items:center; justify-content:center; background-color:	#a8ce93; border-radius:20px">
                <p style="font-size: 30px;font-weight:bolder">Нийт ангийн <br> тоо: </p> <p style="font-size: 30px;font-weight:bolder">{{ $classData }}</p>
            </div>
            <div class="col-md-3" style="padding:0; width:300px; height: 200px; border: 1px solid black; align-items:center; justify-content:center ; background-color: #dada93; border-radius:20px">
                <p style="font-size: 30px;font-weight:bolder">Нийт хичээлийн тоо: </p> <p style="font-size: 30px;font-weight:bolder ">{{ $subjectData }}</p>
            </div>

            <div class="col-md-3" style="padding:0; width:300px; height: 200px; border: 1px solid black; align-items:center; justify-content:center;background-color: #83afe5; border-radius:20px">

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div id="teacherChart" style="width: 100%; height: 300px; border: 1px solid black; align-items:center"></div>
            </div>

            <div class="col-md-6">
                <div id="studentChart" style="width: 100%; height: 300px; border: 1px solid black; align-items:center "></div>
            </div>
        </div>


    </div>


@endsection
