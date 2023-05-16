  <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel Crud </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expend-sm bg-dark ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link text-light">new products</a>
            </li>
        </ul>
    </nav>

    @if($massage =Session::get('success'))
    <div class="alert alert-success alert-block" >
        <strong>{{$massage}}</strong>
    </div>
    @endif
    <div class="container">
        <div class="row justify-content-center ">
             <div class="col-sm-8">
            <div class=" card mt-3 p-3">
                <form action="/products/store"  method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <textarea name="description" rows="4" class="form-control"
                        value="{{ old('description')}}"></textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">image</label>
                        <input type="file" name="image" class="form-control">
                        @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}} </span>
                        @endif
                    </div>
                   <button type="submit " class="btn btn-success ">submit </button>


                </form>
            </div>
            </div>
        </div>
    
     
    </div> 
    </body> 
</html> 