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
<div class="row bg-light" style="border:5px secondary ">

           @foreach ($products as $singleProduct )
                <div class="col-md-3" style="margin:30px;">
                    <div class="card mb-3"style="border:3px secondary">
                        <h2 class="card-header">{{ $singleProduct['cname'] }}</h2>
                        <div class="card-body">
                            <h4 class="card-title">{{ $singleProduct['t_title'] }}</h4>
                            <h6 class="card-subtitle text-muted">{{ $singleProduct['t_description'] }}</h6>
                        </div>
                        <img src="{{ $singleProduct['t_image'] }}" style="width:100%;height:200px" />

                        <div class="card-footer ">
                            {{ $singleProduct['t_price'] }}
                        </div>
                    </div>
                </div>
           @endforeach
</div>
</div>
</body>
</html>