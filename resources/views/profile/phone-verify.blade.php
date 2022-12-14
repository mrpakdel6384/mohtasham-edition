@component('front.templates.royal.layouts.contents')

    @slot('main')
    <div class="bg_gray">
        <div class="container">
            <div class="row d-flex align-content-between py-4 align-items-center">
                <div class="col-md-6 ">
                    <h4>حساب کاربری</h4>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">حساب کاربری</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Active phone number
                    </div>

                    <div class="card-body">
                        <form action="{{route('profile.getphoneverify')}}" method="post">
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
@endslot

@endcomponent
