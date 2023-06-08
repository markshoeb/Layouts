@extends('layout.app')
@section('content')
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <div class="container" id="first-page">


            <?php

            function sumNumbers(int $a, int $b)
            {
                return $a + $b;
            }
            echo sumNumbers(5, 20);
            ?>


            <?php
            function add_some_extra($string)
            {
                $string .= 'Add something.';
            }

            $str = 'I have added this';
            add_some_extra($str);

            echo $str;
            // outputs ‘Add something. I have added this'

            ?>


            <?php
            echo "Welcome to php tutorial on functions <br>";

            function processMarks($marksArr)
            {
                $sum = 0;
                foreach ($marksArr as $value) {
                    $sum += $value;
                }
                return $sum;
            }

            function avgMarks($marksArr)
            {
                $sum = 0;
                $i = 1;
                foreach ($marksArr as $value) {
                    $sum += $value;
                    $i++;
                }
                return $sum / $i;
            }

            $rohanDas = [34, 98, 45, 12, 98, 93];
            // $sumMarks = processMarks($rohanDas);
            $sumMarks = avgMarks($rohanDas);

            $harry = [99, 98, 93, 94, 17, 100];
            // $sumMarksHarry = processMarks($harry);
            $sumMarksHarry = avgMarks($harry);
            echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
            echo "Total marks scored by Harry out of 600 is $sumMarksHarry";

            ?>



        </div>
    </div>
</main>
<!--Main layout-->
@endsection