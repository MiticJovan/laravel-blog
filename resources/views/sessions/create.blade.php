@extends ('layouts.master')

@section('content')

    <div class="col-md-8">
        <h1>Sign In</h1>

        <form method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">

            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">

            </div>
            <button class=" btn btn-primary" type="submit">Sign In</button>
            <br>
            <br>
            @include('layouts.errors')
        </form>

    </div>
@endsection