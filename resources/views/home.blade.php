@extends('layout.app')
@section('content')
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <div class="container" id="first-page">

            <div class="row mb-20">
                <div class="col-md-2 text-align-right justify-content-end">
                    <label class="justify-content-end text-right">value1=</label>
                </div>
                <div class="col-md-10">
                    <input type="text" id="value1" name="value1" placeholder="enter value" class="form-control">
                </div>
            </div>


            <div class="row mb-20">
                <div class="col-md-2 text-align-right justify-content-end">
                    <label for="value2" class="justify-content-end text-right">value2=</label>
                </div>
                <div class="col-md-10">
                    <input type="text" id="value2" name="value2" placeholder="enter value" class="form-control">
                </div>
            </div>

            <div class="row mb-20">
                <div class="col-md-2 text-align-right justify-content-end">
                    <label class="justify-content-end text-right">Result=</label>
                </div>
                <div class="col-md-10">
                    <input type="text" id="result" name="result" class="form-control" disabled>
                </div>
            </div>
            <!-- value2=<input type="text" id="value2" name="value2"> -->
            <div class="row mb-20">
                <div class="d-flex justify-content-center">
                    <!-- result=<input type="text" id="result" name="result"> -->
                    <input type="button" class="btn btn-primary" value="Add" onclick="addition()">
                    <input type="button" class="btn btn-info" value="Sub" onclick="subtraction()">
                    <input type="button" class="btn btn-danger" value="Multiplication" onclick="multiplication()">
                    <input type="button" class="btn btn-warning" value="Division" onclick="division()">
                </div>
            </div>
        </div>
    </div>
</main>
<!--Main layout-->
@endsection