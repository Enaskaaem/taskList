@extends('leaderInfo.layout')
@section('content')
                
               
    <div class="jumbotron container">
    <p>ALL User</p>
    <a class="btn btn-primary btn-lg" href =#  role="button">create User</a>
    </div>
    <div class="container">
        <!-- @if($message=Session::get('success'))
            <div class="alert alert-primary" role="alert">
                {{$message}}
            </div>
        @endif -->
        
    </div>
    <div class ="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">اسم القائد</th>
                <th scope="col">رقم فريق المتابعة</th>
                <th scope="col" style="width:400px">رقم فريق الرقابة</th>

                </tr>
            </thead>
            <tbody>
                @php
                    $i=0;
                @endphp
                @foreach($info as $item)
                <tr>
                    <th scope="row">{{++ $i}}</th>
                    <td>{{$item->leader_name}}</td>
                    <td>{{$item->follow_team_num}}</td>
                    <td>{{$item->observ_team_num}}</td>
                    <td>
                    <li class="sidebar-item active"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route ('user.show',$item ->id)}}" aria-expanded="false"><i class="far fa-address-card act" style="font-size: 1.5em;"></i>
                        <span class="hide-menu">بياناتك الشخصية</span>
                    </a>
                </li>
                    </td>
                    <td>
                    <div class="container">
                        <div class="row">
                        </div>
                    </div>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

@endsection
