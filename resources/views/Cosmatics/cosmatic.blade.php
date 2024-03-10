<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Theme.Partial.styles')
</head>
<body> 
    @include('Theme.Partial.scripts')
    <div class="container-fluid">
    <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
            <form method="POST" action="{{route('order.store')}}">
                @csrf
                <input type="text" placeholder="Enter CATEGORY NAME" class="form-control" name="category_name" />
                <input type="text" placeholder="Enter product_TITLE" class="form-control" name="product_title" />
                <input type="text" placeholder="Enter product_DESCRIPTION" class="form-control" name="product_description" />
                <input type="text" placeholder="Enter product_PRICE" class="form-control" name="product_price" />           
                <input type="text" placeholder="Enter customer_name" class="form-control" name="customer_name" />
                <input type="text" placeholder="Enter customer_email" class="form-control" name="customer_email" />
                <input type="text" placeholder="Enter customer_addres" class="form-control" name="customer_address" />            
                <input type="text" placeholder="Enter customer_description" class="form-control" name="customer_description" />
                <input type="text" placeholder="Enter company_name" class="form-control" name="company_name" />
                <input type="text" placeholder="Enter company_eamil" class="form-control" name="company_email" />
                <input type="text" placeholder="Enter company_address" class="form-control" name="company_address" />
                <input type="text" placeholder="Enter company_description" class="form-control" name="company_description" />
                <input type="submit" />
            </form>

  <!--  <div class=" row bg-secondary" style="border:5px secondary ">
           @foreach ($products as $singleProduct )
                <div class="col-md-3" style="margin:30px;">
                    <div class="card mb-3" style="border:3px bg-warning">
                        <h2 class="card-header">{{ $singleProduct['cname'] }}</h2>
                        <div class="card-body">
                            <h4 class="card-title">{{ $singleProduct['cosmatic_title'] }}</h4>
                            <h6 class="card-subtitle text-muted">{{ $singleProduct['cosmatic_description'] }}</h6>
                        </div>
                        <img src="{{ $singleProduct['cosmatic_image'] }}" style="width:100%;height:200px" />

                        <div class="card-footer ">
                            {{ $singleProduct['cosmatic_price'] }}
                        </div>
                    </div>
                </div>
           @endforeach
</div>  
</div> 
-->
</body>
</html>