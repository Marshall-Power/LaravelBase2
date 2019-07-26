<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepage</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;*/
          margin: 0;
      }

      .full-height {
          height: 10vh;
      }

      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }
      
      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      }

      .links > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }

      .m-b-md {
          margin-bottom: 30px;
      }
      h4{
        margin-bottom:0px;
      }
      
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                      <a href="{{ url('/home') }}">{{trans("web.home")}}</a>
                      @if (Auth::check() && Auth::user()->user_type==1)
                        <a href="/pice/public/dashboard" class="link">{{trans("web.admin")}}</a>
                      @endif
                    @else
                        <a href="{{ route('login') }}">{{trans("web.login")}}</a>
    
                        @if (Route::has('register'))
                <a href="{{ route('register') }}">{{trans("web.sign_up")}}</a>
                        @endif
                    @endauth
                </div>
            @endif
            
          </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            @isset($brand)
              @forelse($products as $product)
                @if($product->brand_id == $brand->id)
                  <div class="col-md-4" style="margin-bottom:15px;">
                    <u><h4>{{$product->name}}</h4></u><br>
                    {{trans("web.description")}}:{{$product->description}}<br>
                    {{trans("web.brand")}}:{{$product->brand->name}}<br>
                    {{trans("web.price")}}: {{$product->price}} € <br>
                    {{trans("web.category")}}:  {{$product->category->nom}}
                  </div>
                @endif
              @empty
                {{trans("web.no_products")}}
              @endforelse
            @endisset

            @isset($category)
              @forelse($products as $product)
                @if($product->category_id == $category->id)
                  <div class="col-md-4" style="margin-bottom:15px;">
                    <u><h4>{{$product->name}}</h4></u><br>
                    {{trans("web.description")}}:{{$product->description}}<br>
                    {{trans("web.brand")}}:{{$product->brand->name}}<br>
                    {{trans("web.price")}}: {{$product->price}} € <br>
                    {{trans("web.category")}}:  {{$product->category->nom}}
                  </div>
                @endif
              @empty
                {{trans("web.no_products")}}
              @endforelse
            @endisset

            @empty($brand)
              @empty($category)
                @forelse($products as $product)
                <div class="col-md-4" style="margin-bottom:15px;">
                  <u><h4>{{$product->name}}</h4></u><br>
                  {{trans("web.description")}}:{{$product->description}}<br>
                  {{trans("web.brand")}}:{{$product->brand->name}}<br>
                  {{trans("web.price")}}: {{$product->price}} € <br>
                  {{trans("web.category")}}:  {{$product->category->nom}}
                </div>
              @empty
                {{trans("web.no_products")}}
              @endforelse
              @endempty
            @endempty
          </div>
        </div>  

        <div class="col-md-3">
          <u><h4><a href="/pice/public">{{trans("web.brands")}}</a></h4></u><br>
            @forelse($brands as $brand)
              <a href={{$brand->id}}>{{$brand->name}}</a><br>
            @empty
              {{trans("web.no_brands")}}
            @endforelse

            <u><h4 style="margin-top:10px"><a href="/pice/public">{{trans("web.categories")}}</a></h4></u><br>
            @forelse($categories as $category)
              <a href="{{route('categoryid', $category->id)}}">{{$category->nom}}</a><br>
            @empty
              {{trans("web.no_categories")}}
            @endforelse
        </div>
        

                

        
      </div>
    </div>
        
  </body>
</html>