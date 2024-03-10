<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Theme/Partial/styles')
</head>
<body>
  <!--1card-->
    
  <div class="row" style="margin:20px">
  <div class="card-sm-4">
  <div class="card mb-3">
  <h3 class="card-header">{{$a_name}}</h3>
  <div class="card-body">
    <h5 class="card-title">{{$a_product}}</h5>
    <h6 class="card-subtitle ">{{$product_description}}</h6>
  </div>
  <img src="{{$product_img}}" width="300px"  height="300px">
  
  <div class="card-footer ">{{$product_price}}

  </div>
</div>
</div>
</div>
<!--2card-->
<div class="row" style="margin:20px">
<div class="card mb-3">
  <h3 class="card-header">{{$b_name}}</h3>
  <div class="card-body">
    <h5 class="card-title">{{$b_product}}</h5>
    <h6 class="card-subtitle ">{{$b_description}}</h6>
  </div>
  <img src="{{$b_img}}" width="300px"  height="300px">
  
  <div class="card-footer ">{{$b_price}}

  </div>
</div>
</div>
</div>

<!--3card-->
<c
<!--4card-->
 
  <div class="row" style="margin:20px">
<div class="card mb-3">
  <h3 class="card-header">{{$d_name}}</h3>
  <div class="card-body">
    <h5 class="card-title">{{$d_product}}</h5>
    <h6 class="card-subtitle ">{{$d_description}}</h6>
    </div>
    <img src="{{$d_img}}" width="300px"  height="300px">
  
  <div class="card-footer ">{{$d_price}}

  </div>
</div>
</div>
</div>
<!--5card-->
<div class="row" style="margin:20px">
<div class="card mb-3">
  <h3 class="card-header">{{$e_name}}</h3>
  <div class="card-body">
    <h5 class="card-title">{{$e_product}}</h5>
    <h6 class="card-subtitle ">{{$e_description}}</h6>
  </div>
  <img src="{{$e_img}}" width="300px"  height="300px">
  
  <div class="card-footer ">{{$e_price}}

  </div>
</div>
</div>
</div>


</div>

</body>
</html>