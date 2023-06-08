@extends('layout.app')
@section('content')
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <div class="container" id="first-page">
            <?php
            $name = "Sunil";
            $class = "12th";
            $phy = 68;
            $che = 78;
            $math = 86;
            $eng = 65;
            $hindi = 55;

            $total = $phy + $che + $math + $eng + $hindi;

            $per = $total / 500 * 100;

            echo "Student name is = $name<br>";
            echo "Student class is = $class<br>";
            echo "Student total number is = $total<br>";
            echo "Student percentage is = $per<br>";
            ?>



        </div>
    </div>
</main>
<!--Main layout-->
@endsection