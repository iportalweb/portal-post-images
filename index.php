<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megdel Movies</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
   <style>
       body {
           width: 90%;
           margin: 0 auto;
           font-family: 'PT Serif', serif;
       }
       h1 {
            font-size: 1.5em;
            text-align: center;
        }
        ol {
            font-size: 1em;
            list-style-type: none;
            counter-reset: list-number;
        }
        
        
        li a{
            color: #6E6E6E;
            padding: 10px 0 10px 10px;
            margin-bottom: 5px;
            text-decoration: none;
            display: block;
            background-color: #DDDDDD;
            position: relative;
        }
        li a:hover {
            background-color: #EEEEEE;
        }
        
        li a:before {
            content: counter(list-number);
            counter-increment: list-number;
            width: 20px;
            padding: 10px;
            color: #000;
            margin-right: 5px;
            text-align: center;
            background-color: #FB806F;
            display: inline-block;
            position: absolute;
            top: 0px;
            bottom: 0px;
            left: -50px; 
            
            vertical-align: middle;
        }
        
        
   </style>
        
   </style>
</head>
<body>
<h1>Megdel Movies</h1>
<ol> 
<?php
    
    $files = scandir('.');
    sort($files); // this does the sorting
    foreach($files as $file){
        if(strlen($file) > 15 ){
            //echo'<li><a href="'.$file.'">'.$file.'</a></li>';
            echo'<li><a href="'.$file.'">'.preg_replace('/\@^|(\.+)/', ' ', $file).'</a></li>';
            
            
        }
       
    }

?>
</ol>
    
</body>
</html>