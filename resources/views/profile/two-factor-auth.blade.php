@extends('profile.layout')

@section('main')
    <h4>Two Factor Authentication</h4>
    <hr>

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>


    @endif
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control">
                @foreach(config('twofactor.types') as $key => $name)
                <option value="{{$key}}" {{old('type') == $key || auth()->user()->hasTwoFactor($key) ? "selected" :""}}>{{$name}}</option>
                @endforeach

            </select>
        </div>
        <div class="form-group">
            <label for="phone" >Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="please enter a phone number" value="{{old('phone') ?? auth()->user()->phone}}">
        </div>
        <div class="form-group">
            <button type="submit"  class="btn btn-primary">ارسال</button>
        </div>
    </form>
@endsection
