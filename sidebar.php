<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href='css/bootstrap.css'>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }


        .dropbtn1 {
            background-color: #333;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown1 {
            float: left;
            overflow: hidden;
        }

        .dropdown1 .dropbtn1 {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar1 a:hover, .dropdown1:hover .dropbtn1 {
            background-color: black;
        }

        .dropdown-content1 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content1 a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content1 a:hover {
            background-color: #ddd;
        }

        .dropdown1:hover .dropdown-content1 {
            display: block;
        }

        .container {
            margin-top: 20px;
        }

        input {
            width: 250px;
            border: 1px solid gray;
            padding: 10px;
            border-radius: 8px;
        }


    </style>
</head>
<body>

<ul>
    <li><a class="active" href="index.php">Home</a></li>

    <li><a href="#Notice.php">Notice</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="apply-form.php">Apply</a></li>
    <div class="dropdown1">
        <button class="dropbtn1">login
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content1">

            <a href="adminlogin.php">Admin</a>
            <a href="stulogin.php">Student</a>

            <a href="member-login.php">Member</a>

        </div>
</ul>