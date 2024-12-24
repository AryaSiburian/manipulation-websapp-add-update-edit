<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
        }
        header{
            background-color: #0d6efd;
            text-align: center;
            padding: 20px;
            color: white;
        }
        .content{
            padding:20px
        }
        table{
            width:100%;
            background-color: rgba(0,0,0,.03);
            border-top: 1px solid rgba(0,0,0,.125);
            border-left: 1px solid rgba(0,0,0,.125);
        }
        th,td{
            border-right: 1px solid rgba(0,0,0,.125);
            border-bottom: 1px solid rgba(0,0,0,.125);
            padding:10px;
        }
        .btn{
            padding: 10px;
            border:none;
            border-radius: 5px;
            color: white;
            display: inline-block;
            margin-bottom: 10px;
            margin-top: 10px;
            text-decoration: none;
            margin-left: 20px;
            
        }
        .btn-green{
            background-color: green; 
        }
        .btn-blue{
            background-color: blue;
        }
        .btn-red{
            background-color: red;
        }
        .field{
        padding: 10px;
    }
    .field .label{
        display: block;
    }
    .field input {
        padding:10px;
        font-size: 16px;
    }
    .field textarea{
        padding: 10px;
        width: 500px;
    }
        
    </style>
</head>
<body>
<?php
    require("connection.php");
?>



    <header>Data Manipulation Apps</header>
    <div id="content"></div>