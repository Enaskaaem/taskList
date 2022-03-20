@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Leader</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_join" class="col-md-4 col-form-label text-md-end">{{ __(' تاريخ الانضمام ') }}</label>

                            <div class="col-md-6">
                                <input id="date_join" type="text" class="form-control" name="date_join" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="cur" class="col-md-4 col-form-label text-md-end">{{ __(' المراقب الحالي') }}</label>

                            <div class="col-md-6">
                                <input id="current_poss" type="text" class="form-control" name="current_poss" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="prev_poss" class="col-md-4 col-form-label text-md-end">{{ __(' المراقب السابق') }}</label>

                            <div class="col-md-6">
                                <input id="previous_poss" type="text" class="form-control" name="previous_poss" required autocomplete="new-password">
                            </div>
                        </div>
                       

                        <div class="row mb-3">
                            <label for="user_type" class="col-md-4 col-form-label text-md-end">{{ __(' حالة المنضم') }}</label>
                            <select name="user_type" class ="col-md-4 col-form-label text-md-end">
                                <option value ="guided"> موجه </option>
                                <option value ="observer"> مراقب </option>
                            </select>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="is_active" class="col-md-4 col-form-label text-md-end">{{ __(' حالة المنضم') }}</label>
                            <select name="is_active" class ="col-md-4 col-form-label text-md-end">
                                <option value ="1"> 1 </option>
                                <option value ="0"> 0  </option>
                            </select>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
