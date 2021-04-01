
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hekaya</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('assets/kendo/jquery.min.js')}}"></script>
       <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script src="http://cdn.kendostatic.com/2015.1.318/js/jszip.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.rtl.min.css')}}">
    
    <link rel="stylesheet" href="{{ asset('assets\css\levels-style.css')}}">
     <!--   Kendo Grid Include -->
    <link rel="stylesheet" href="{{ asset('assets/kendo/styles/kendo.common.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/kendo/styles/kendo.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/kendo/styles/kendo.blueopal.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/kendo/styles/kendo.dataviz.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/kendo/styles/kendo.dataviz.default.min.css') }}">
     <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
<style>
    .playbtn
    {
        text-align: center;font-size: 30px;color: #00aca9;
    }
    table th
    {
    border-right: #dfeff6 !important;
    border-style: solid !important;
    border-width: thin !important;
    text-align:center;
    }
    table td
    {
   border-right: #dfeff6 !important;
    border-style: solid !important;
    border-width: thin !important;
    text-align:center;
    }
    th
    {
        text-align:center !important;
    }
    .k-popup-edit-form
    {
     width:100% !important;
    scroll-snap-align: none;
    overflow: hidden;
    margin-bottom: 10px;
    }
    .row
    {
        margin-left: 0px;
        margin-right: 0px;
         direction: rtl;
    }
    .col-md-6
    {
    padding: 0px;
    margin: 0px;
    width: 48%;
    }
    .k-edit-label
    {
    float: right !important;
    clear: both;
    width: 100%;
    padding-left:2%;
    padding-right:2%;
    }
    select
    {
    width: 96% !important;
    padding-right: 3% !important;
    margin: 0px !important;
    }
    .k-multiselect-wrap, input.k-textbox, textarea.k-textbox
    {
    width: 96% !important;
    }
    .k-window>div.k-popup-edit-form
    {
     padding:0px !important;
    }
    .k-edit-form-container
    {
     width:100%;
    }
    .bbtn
    {
    float: right;
    padding-right: 1%;
    }
    .boxes1
    {
        background:#ac5c8c !important;
        padding:1%;
        width: 50%;
    }
    .boxes1 a
    {
        color:white; !important;
        
    }
     .boxes2
    {
        background:#00a19a !important;
         padding:1%;
         width: 50%;
        
    }
    .boxes2 a
    {
        color:white; !important;
        
    }
    .col-md-4
    {
        padding: 0px;
    }
    .col-md-3
    {
        padding: 0px;
    }
    h4
    {
        font-size:18px !important;
    }
       .boxes41
    {
        background:#ac5c8c !important;
        padding:1%;
        width: 25%;
        border: white;
    border-style: dashed;
        border-bottom: none;
    }
    .boxes41 a
    {
        color:white; !important;
        
    }
     .boxes42
    {
        background:#00a19a !important;
         padding:1%;
         width: 25%;
         border: white;
    border-style: dashed;
        border-bottom: none;
        
    }
    .boxes42 a
    {
        color:white; !important;
        
    }
         .boxes41
    {
        background:#ac5c8c !important;
        padding:1%;
        width: 25%;
    }
    .boxes31
    {
        background:#ac5c8c !important;
        padding:1%;
        width: 33.333%;
        border: white;
    border-style: dashed;
    }
    .boxes31 a
    {
        color:white; !important;
        
    }
     .boxes32
    {
        background:#00a19a !important;
         padding:1%;
         width: 33.333%;
         border: white;
    border-style: dashed;
        
    }
    .boxes32 a
    {
        color:white; !important;
        
    }
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #ac5c8c;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: right;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  color:white;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color:#00a19a;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color:#00a19a;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
@media print {
   #printableArea {background: red;}
}
</style>
</head>
