@extends('layout.app')
@section('content')
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <div class="container" id="first-page">

            <?php
            $x = 4;
            $y = 6;
            echo $test = ($x > $y) ? "This is true" : "This is not true";
            ?>
        </div>
    </div>
</main>
<!--Main layout-->
@endsection