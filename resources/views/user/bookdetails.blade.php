@extends('userlayout.master')

@include('userlayout.header')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
       <div class="container">
       <br>
        <div class="jumbotron">
            <h1 class="display-4">Thank You, !</h1>
            <p class="lead">Your booking enquiry request has been successfully done.Your Booking Enquiry ID is : RES821.

        In case of any further communication for this transaction, please use the above provided Booking ID</p>
            <hr class="my-4">
            <p>For any other queries or doubts,
                Do not hesitate to call on : 1-303-999-9999
                    Or drop an email at: demohotel@yahoo.com</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/" role="button">Make another booking</a>
                <a  class="btn btn-lg btn-success" href="/" role="button">Return to website</a>
            </p>
        </div>
       </div>
    </div>
</div>

@include('userlayout.footer')