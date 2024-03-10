<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('/Theme/Partial/styles')
</head>
<body>
<div class="container-fluid" style="border:5px solid black ;width:100%" >
 <div class="row" >
    <div class="col-md-4 bg-light" style="border:2px  solid black;height :670px ; ">
    <h2 style="margin-top:10px ;text-align:center">  Menu Bar </h2><br>
 
<ul >
    <li><a class="btn btn-outline-danger" href="{{url('/cosmatic')}}"  style="margin-top:5px">COSMATICS</a></li><br>

    <li><a class="btn btn-outline-primary" href="{{url('/jewellery')}}">JEWELLERY</a></li><br>
    <li><a class="btn btn-outline-success" href="{{url('/transport')}}">AUTOMOBILES</a> </li>
</ul>
    </div>
    <div class="col-md-8 bg-light" style="border:2px solid black ;background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIc-f7JqH8ZSFhB3dpzDDbBkFZio5-E5ouZQ&usqp=CAU'); ">
    

    
 </div>
</div>
</body>
</html>