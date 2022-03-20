@extends('userinfo.layout')
@section('content')
    <div class="jumbotron container">
    <p>ALL User</p>
    <a class="btn btn-primary btn-lg" href ="{{route ('user.create')}}" role="button">create User</a>

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
                <th scope="col">اسم المراقب</th>
                <th scope="col">اسم الموجه الحالي  </th>
                <th scope="col">اسم الموجه السابق  </th>
                <th scope="col">حالتك    </th>
                <th scope="col" style="width:400px">تاريخ الانضمام  </th>

                </tr>
            </thead>
            <tbody>
                @php
                    $i=0;
                @endphp
                @foreach($info as $item)
                <tr>
                    <th scope="row">{{++ $i}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->current_poss}}</td>
                    <td>{{$item->previous_poss}}</td>
                    <td>{{$item->is_active}}</td>
                    <td>{{$item->date_join}}</td>
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
                    <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a class="btn btn-success" href ="{{route ('user.edit',$item ->id)}}"><i class="fas fa-edit"></i>edit</a>
                            </div>
                            <div class="col-sm">
                                <a class="btn btn-success" href ="{{route ('user.show',$item ->id)}}"><i class="fas fa-edit"></i>Show</a>
                            </div>
                            <div class="col-sm">
                                <form action ="{{route ('user.destroy',$item ->id)}}"method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type ="submit" class="btn btn-danger">delete</button>
                                </form> 
                            </div>
                        </div>
                    </div>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

@endsection
