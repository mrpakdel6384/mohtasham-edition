@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Two Factor Auth
                    </div>

                    <div class="card-body">
                        <form action="{{route('two_factor_auth.token')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="token" class="col-form-label">token</label>
                                <input type="text" class="form-control @error('token') is-invalid @enderror" name="token" placeholder="please enter your code">
                                @error('token')
                                    <span class="invalid-feedback">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
