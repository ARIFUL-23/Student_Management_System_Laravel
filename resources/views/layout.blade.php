<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Management System</title>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .first-column {
            height: 100vh;
            width: 20%;
            color: white;
            background-color: #625D5D;
            padding: 0;
            margin: 0;
        }


       


        .second-column {
            padding: 0;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #D5D6EA;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
          
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
             
            }
            .sidebar a {
                float: left;
            }
            div.content {
                margin-left: 0;
            }
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid h-100">
    <div class="row h-100">

        

        <!-- First column -->
        <div class="col-md-2 first-column">
        <br>
    <div id="imagePreview" style="display: flex; justify-content: center; align-items: center;">
        <!-- Default image -->
        <img id="preview" src="default.png" width="200" height="200" alt="Default Image"
         style="max-width: 100%; display: block; margin: auto; cursor: pointer;">
    </div>
    <input type="file" id="imageUpload" accept="image/*" style="display: none;" onchange="previewImage(event)">

   <p align="center"><b><u>Profile</u></b></p>
</div>

<script>
    document.getElementById('imagePreview').addEventListener('click', function() {
        document.getElementById('imageUpload').click();
    });

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var imagePreview = document.getElementById('imagePreview');
            // Update the image source with the uploaded image
            imagePreview.innerHTML = '<img src="' + reader.result + '" style="max-width:100%; display: block; margin: auto; cursor: pointer;">';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>







        <!-- Second column -->
        <div class="col-md-10 second-column">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#"><h2>Student Management Project<h2></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <!-- The sidebar -->
                        <div class="sidebar">
                          <!--  <a class="active" href="#home">Home</a> -->
                            <a href="{{ url('hom') }}">Home</a>
                            <a href="{{ url('students') }}">Student</a>
                            <a href="{{ url('teachers') }}">Teacher</a>
                            <a href="{{ url('courses') }}">Courses</a>
                            <a href="{{ url('batches') }}">Batches</a>
                            <a href="{{ url('entollments') }}">Enrollment</a>
                            <a href="{{ url('payments') }}">Payment</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX
