@extends('app')
@section('title','Login - Vote-App')
@section('content')
    <div class="mt-5 text-center">
        <h2>Login</h2>
    </div>

    <div class="mt-5 mx-auto w-25 h-25">
        <form action="#" method="post">
            @csrf
            <div class="form-group mt-3">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary mt-5 form-control">Submit</button>
        </form>
    </div>
@endsection

@section('scripts')

@endsection