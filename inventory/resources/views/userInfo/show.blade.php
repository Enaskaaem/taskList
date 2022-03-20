@extends('userinfo.layout')
@section('content')
<div class="container" style ="padding-top :12% ">
    <div class="card " >
        <div class="card-body">
            <p class="card-text"><span><a href="{{route ('user.index')}}"> back </a></span>معلومات عن المراقب  :{{$User->name}}</p>
        </div>
    </div>
</div>
<div class ="container"style ="padding-top :2%" >
    
        <div class="form-group">
            <label style="background-color:Plum;"  class="btn btn-primary btn-lg">اسم المراقب -> </lable>
            <div>
            <label style="background-color:Purple;"class="btn btn-primary btn-lg" for="exampleFormControlInput1">{{$User->name}}</label>
            </div>
        </div>
        <div  class="form-group">
            <label style="background-color:Plum;" class="btn btn-primary btn-lg">البريد الالكتروني المراقب -> </lable>
            <div >
            <label style="background-color:Purple;" class="btn btn-primary btn-lg" for="exampleFormControlInput1">{{$User->email}}</label>
            </div>
        </div>
    
        <div class="form-group">
            <label style="background-color:Plum;"  class="btn btn-primary btn-lg">كلمة المرور  -> </lable>
            <div>
            <label style="background-color:Purple;"  class="btn btn-primary btn-lg" for="exampleFormControlInput1">{{$User->password}}</label>
            </div>    
        </div>
        <div class="form-group">
            <label style="background-color:Plum;" class="btn btn-primary btn-lg">تاريخ الانضمام  -> </lable>
            <div>
            <label style="background-color:Purple;"class="btn btn-primary btn-lg" for="exampleFormControlInput1">{{$User->date_join}}</label>
            </div>
        </div>
        <div class="form-group">
            <label style="background-color:Plum;" class="btn btn-primary btn-lg">الموجه الحالي  -> </lable>
            <div>
            <label style="background-color:Purple;"class="btn btn-primary btn-lg" for="exampleFormControlInput1">{{$User->current_poss}}</label>
            </div> 
        </div>
        <div class="form-group">
            <label style="background-color:Plum;" class="btn btn-primary btn-lg">الموجه السابق  -> </lable>
            <div>
            <label style="background-color:Purple;"class="btn btn-primary btn-lg" for="exampleFormControlInput1">{{$User->previous_poss}}</label>
            </div>
        </div>
        
</div>    
@endsection