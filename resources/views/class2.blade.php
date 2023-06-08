@extends('layout.app')
@section('content')
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <div class="container" id="first-page">
            <?php
            $x = 5;
            $y = 10;

            $z = $x + $y;
            //echo $z;

            echo "<b><font color='red'>Total is = $z</font></b>";
            ?>


        </div>
    </div>
</main>
<!--Main layout-->
@endsection