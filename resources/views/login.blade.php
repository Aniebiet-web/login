@extends('layout.master')
@section('body')


<div class="container jumbotron " style="margin-top:35px">
    
    <div class="row">
        <div class="col-md-6">
         <H1> <b> login Form</b></H1>
            <div class="text-center">
                <form action="{{route('postlogin')}}" method="post">
                    @csrf
                   

                    <div class="form-group">
                    <input type="password"placeholder="Enter password" class="form-control" name="password" require>

                    </div>

                    <div class="form-group">
                    <input type="email"placeholder="Enter email" class="form-control" name="email" require>

                    </div>

                   

                    <div class="form-group">
                   
                    <button class="btn btn-info" type="submit">login</button>
                    <a href="{{route('login')}}" class="btn btn-success"> have an account</a>
                    
                     
                    </div>


                </form>
                
  
            </div>     
                
                
        </div>        

    </div>              

</div>  

@endsection