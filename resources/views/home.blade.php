@extends('base')

@section('content')
    <style>
        body {
            background-color: azure;
        }
        .intro {
            padding: 30px;
        }
        .image {
            background-image: url(aa.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
	        height: 500px; 
	        width: 1280px; 
        }
        .txt {
            position: relative;
	        top: 200px;
            left: 60px;
            font-family:monospace;
        }
        h1{
            font-family:monospace;
            color:red;
        }
    </style>

    <body>
        <div>
            <div class="container intro" style="text-align: center">
                <h1><b>Welcome To CheapTalk!</b></h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="image">
                        <h1 class="txt">Always think before you Chat </h1>
                        <h6 class="txt">
                            <form action="{{url('/register')}}" method="get">
                                <button class="btn btn-warning" type="submit">Register Here !</button>
                            </form>
                        </h6>
                        <p></p>
                        <h6 class="txt" style="color: blue"> Login if you already have an account!</h6>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection