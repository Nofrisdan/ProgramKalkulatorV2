<?php

$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];
$operasi = $_POST['operasi'];

$value = 'Nofrisdan Sitopu';

$tgl = date(yy);




if(isset($_POST["hitung"])){
    //pastikan angka yang dimasukkan tidak berbentuk string
    //jika salah satu operasi dilakukan maka lakukan fungsi operasi
    if($operasi == 'kali'){
        $hasil = $bil1 * $bil2;
    }
    elseif($operasi == 'bagi'){
        $hasil = $bil1 / $bil2;
    }
    elseif($operasi == 'tambah'){
        $hasil = $bil1 + $bil2;
    }
    elseif($operasi == 'kurang'){
        $hasil = $bil1 - $bil2;
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="hmf.jpg">
    <title>Tugas IMK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&family=Syne+Tactile&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet"> 
    <style>
        *{
            padding:0;
            margin:0;
        }
        body{
            background-color: #808080;
        }
        ul{
            margin-left:50px;
        }
        ul li{
            list-style-type:none;
            margin-bottom:10px;
        }
        button{
            margin-left:10px;
        }
        img{
            margin-left:126px;
            margin-bottom:10px;
            border-radius:50%;
        }
        b{
            margin-left:10px;
            font-family: 'Syne Mono', monospace;
            font-family: 'Syne Tactile', cursive;
        }
        h1{
            font-family: 'Syne Mono', monospace;
            font-family: 'Syne Tactile', cursive;
        }
        h2{
            font-family: 'Architects Daughter', cursive;
        }
        input{
            font-family: 'Syne Mono', monospace;
            font-family: 'Syne Tactile', cursive;
        }

        @media(min-width :550px){
            .cover{
                margin-top:60px;
                margin-left:40%;
                margin-right:50%;
            }

        }
     
    </style>
</head>
<body>
   
    <div class="cover">
        <div style="border:5px solid  #000080 ; width:350px;  padding:20px; background-color:white;margin:15%">
            <h1 style="text-align:center;font-size:25px;margin-bottom:10px;">Tugas IMK <br> Program Kalkulator</h1>
            <img src="hmf.jpg" width="60px;" height=60px;>
            <form action="" method="post">
                <ul >
                    <li><input type="number" autocomplete="off" placeholder="Masukkan Bilangan Pertama" name="bil1" required autofocus></li>
                    <li><input type="number" autocomplete="off" placeholder="Masukkan Bilangan kedua" name="bil2" required></li>
                    <li>
                        <select id="" name="operasi" style="width:120px; height:35px;">
                            <option value="kali">x</option>
                            <option value="bagi">:</option>
                            <option value="tambah">+</option>
                            <option value="kurang">-</option>
                        </select>
                        <button type="submit" name="hitung" class="btn btn-danger">Hitung</button>
                    </li>
                </ul>
            </form>
            <div class="layar" style="border:3px solid; height:100px; width:210px;margin-left:50px;padding:10px;">
                
                <h1 style="font-size:25px; font-style:italic;">Hasil :<b><?= $hasil; ?></b></h1>
            </div>
            <marquee scrollamount="3">
                <h2 style="font-size:15px; margin-top:10px; margin-left:50px;">Copyright&copy;<?= $tgl.$value; ?></h2>
            </marquee>
         </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>