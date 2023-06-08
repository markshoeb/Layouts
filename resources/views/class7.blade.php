@extends('layout.app')
@section('content')
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <div class="container" id="first-page">

            <?php

            // prints something like: Sunday the 11th

            echo date('l \t\h\e jS');

            ?>

            <?php
            echo "Welcome to the world of dates<br>";
            // $d = date("dS F Y");
            $d = date("dS F Y, g:i A");
            echo "Todays date is $d <br>";
            // Quick Quiz - Post at least 3 examples of dates in php in the comments below

            // Prints something like: Monday 8th of August 2005 03:12:46 PM
            echo date('l jS \of F Y h:i:s A');

            $year = date("Y");
            echo "<br>";
            echo "Copyright $year | All rights reserved <br>";

            ?>

        </div>
    </div>
</main>
<!--Main layout-->
@endsection