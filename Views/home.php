<?php
?>
<style>
    html{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url('/Jurassic2.jpg');
        background-size: cover;
        margin: 0;
        height: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 11% 79.8% 9.2%;
        
    }
    .header{
        grid-column: 1/8;
        grid-row: 1;
        /* width: 100%;
        height: 12vh; */
        background: black;
        box-shadow: 2px 3px 5px red;
        z-index: 2;
    }
    .navbar{
        grid-column: 1;
        grid-row: 2;
        background: radial-gradient(grey,black);
        height: 100%;
        box-shadow: -2px -3px 6px inset red;
        z-index: 0;
        text-align: left;
    }
    .main{
        grid-column: 2/8;
        grid-row: 2;
        text-shadow: rgb(255,0,0) 1px 1px 1px;
    }
    .footer{
        grid-column: 1/8;
        grid-row: 3;
        background: black;
        height: 100%;
        box-shadow: 2px -3px 3px red;
        z-index: 1;
    }
    h1{
        color: red;
        text-align: center;
        text-shadow: 2px 3px 3px silver;
    }
    
    h4{
        color: red;
        text-align: center;
        text-shadow: 1px 1px 1px silver;
    }
    a{
        color: white;
        text-align: center;
        text-shadow: 1px 1px 1px red;
    }
    ul{
        list-style: none;
        margin-left: -10%;
    }
    strong{
        color: white;
        text-shadow: 1px 1px 1px red;
    }
    .no_a{
        text-decoration: none;
        color:black;
        font-weight:bold;
    }
    button{
        background:black;
        color:white;
        box-shadow: 2px 2px 3px red;
        border:none;
        border-radius:9px;
        width:5%;
        height:5%;
        margin-left:0.5%;
        text-shadow:1px 1px 1px red;
        font-weight:bold;
    }
</style>
<html>
<body>
<div class="header">
<h1>Welcome to Mammouthel</h1>
</div>
<div class="navbar">
    <ul><br>
        <legend><h3><strong>Sites list</strong></h3></legend><br>
        <li><a href="/Home/indexo/1">Saint petersburg</a></li><br>
        <li><a href="/Home/indexo/2">Bordeaux</a></li><br>
        <li><a href="/Home/indexo/3">Quito</a></li>
    </ul>
</div>
<div class="footer">
    <h4>&copy;Geo - First CI4 small project</h4>
</div>
</body>
</html>