@extends('userInfo.layout')
@section('content')
<div class="container" style ="padding-top :12% ">
    <div class="card " >
        <div class="card-body">
            <p class="card-text"><span><a href="{{route ('user.index')}}"> back </a></span>list name:{{$User->name}}</p>
        </div>
    </div>
</div>
<div class ="container" style ="padding-top :2%">
    <form action="{{route('user.update',$User->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">اسم المستخدم</label>
            <input type="text" name ="name" value ="{{$User->name}}" class="form-control"  placeholder="info name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">البريد الالكتروني</label>
            <input type="text" name ="email" value ="{{$User->email}}" class="form-control"  placeholder="info email">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">كلمة المرور </label>
            <input type="text" name ="password" value ="{{$User->password}}" class="form-control"  placeholder="info password">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">تاريخ الانضمام </label>
            <input type="text" name ="date_join" value ="{{$User->date_join}}" class="form-control"  placeholder="info date_join">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> المدير الحالي </label>
            <input type="text" name ="current_poss" value ="{{$User->current_poss}}" class="form-control"  placeholder="info current_poss">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> المدير السابق </label>
            <input type="text" name ="previous_poss" value ="{{$User->previous_poss}}" class="form-control"  placeholder="info previous_poss">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> نوع المستخدم </label>
            <input type="text" name ="user_type" value ="{{$User->user_type}}" class="form-control"  placeholder="info user_type">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> حالتك الان </label>
            <input type="text" name ="is_active" value ="{{$User->is_active}}" class="form-control"  placeholder="info date_is_activejoin">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">update</button>
        </div>
    </form>
</div>    
@endsection