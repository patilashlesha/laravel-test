<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Styles -->
        
    </head>
    <body>
    	
        <div class="container">

            <h2>Product Information</h2>
        
            <form method="POST" action="{{ action('HomeController@formValidationPost') }}" autocomplete="off">
        
        
                @if(count($errors))
        
                    <div class="alert alert-danger">
        
                        <strong>Whoops!</strong> There were some problems with your input.
        
                        <br/>
        
                        <ul>
        
                            @foreach($errors->all() as $error)
        
                            <li>{{ $error }}</li>
        
                            @endforeach
        
                        </ul>
        
                    </div>
        
                @endif
        
        
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        
                <div class="row">
        
                    <div class="col-md-6">
        
                        <div class="form-group {{ $errors->has('proname') ? 'has-error' : '' }}">
        
                            <label for="proname">Product name</label>
        
                            <input type="text" id="proname" name="proname" class="form-control" placeholder="Enter Product Name" value="{{ old('proname') }}">
        
                            <span class="text-danger">{{ $errors->first('proname') }}</span>
        
                        </div>
        
                    </div>
        
                    <div class="col-md-6">
        
                        <div class="form-group {{ $errors->has('qtyinstock') ? 'has-error' : '' }}">
        
                            <label for="qtyinstock">Quantity in stock:</label>
        
                            <input type="text" id="qtyinstock" name="qtyinstock" class="form-control" placeholder="Enter Quantity in Stock" value="{{ old('qtyinstock') }}">
        
                            <span class="text-danger">{{ $errors->first('qtyinstock') }}</span>
        
                        </div>
        
                    </div>
        
                </div>
        
        
                <div class="row">
        
                    <div class="col-md-6">
        
                        <div class="form-group {{ $errors->has('priceperitem') ? 'has-error' : '' }}">
        
                            <label for="priceperitem">Price per item:</label>
        
                            <input type="text" id="priceperitem" name="priceperitem" class="form-control" placeholder="Enter Price per item" value="{{ old('priceperitem') }}">
        
                            <span class="text-danger">{{ $errors->first('priceperitem') }}</span>
        
                        </div>
        
                    </div>
        
                  </div>         
        
                <div class="form-group">
        
                    <button class="btn btn-success">Submit</button>
        
                </div>
        
        
            </form>
        	<div class="row">
        
                    <div class="col-md-6">
                        <table class="form-group table" width="100%">
                        <tr><th>Product Name</th><th>Qty</th><th>Rate</th><th>Total value number</th></th>
                        <tr><td>{{ $proname  }}</td><td>{{  $qty  }}</td><td>{{  $amt  }}</td><td>{{  $sumamt  }}</td></tr>
                        </table>
                    </div>
          </div>
        </div>
        	
    </body>
</html>
