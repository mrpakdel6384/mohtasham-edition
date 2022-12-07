@component('front.templates.aronv1.layouts.contents')
@slot('script')
    <script>
       $('#sendComment').on('show.bs.modal', function (event) {

           var button = $(event.relatedTarget) // Button that triggered the modal
           let parent_id = button.data('id');

           // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
           // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
           var modal = $(this)
           //modal.find('input[name="parent_id"]').val(parent_id)
        })
       $(document).ready(function(){
          $('.replay').on('click',function(){
                let id = $(this).data('id');
                let modal = $('.modal');
                modal.find('input[name="parent_id"]').val(id)
          });
       });
        /*document.querySelector('#sendCommentForm').addEventListener('submit' , function(event) {
             event.preventDefault();
             let target = event.target;

             let data = {
                 commentable_id : target.querySelector('input[name="commentable_id"]').value,
                 commentable_type: target.querySelector('input[name="commentable_type"]').value,
                 parent_id: target.querySelector('input[name="parent_id"]').value,
                 comment: target.querySelector('textarea[name="comment"]').value
             }

              if(data.comment.length < 2) {
                  swal("خطا", "متن نظر کمتر از حد مجاز است", "error");
                return;
              }


            $.ajaxSetup({
                 headers : {
                     'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content,
                     'Content-Type' : 'application/json'
                 }
             })


             $.ajax({
                 type : 'POST',
                 url : '/commentsajax',
                 data : JSON.stringify(data),
                 success : function(data) {
                     console.log(data);
                 }
             })
         })*/
    </script>
@endslot
@auth
    <div class="modal fade" id="sendComment">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ارسال نظر</h5>
                    <button type="button" class="close mr-auto ml-0" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('send.comment') }}" method="post" id="sendCommentForm">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="commentable_id" value="{{ $product->id }}" >
                        <input type="hidden" name="commentable_type" value="{{ get_class($product) }}">
                        <input type="hidden" name="parent_id" value="0">

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">پیام دیدگاه:</label>
                            <textarea name="comment" class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group col-md-8 offset-md-4">
                            <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                            @error('g-recaptcha-response')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">لغو</button>
                        <button type="submit" class="btn btn-primary mr-2">ارسال نظر</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endauth
    <div class="bg_gray">
        <div class="container">
            <div class="row d-flex align-content-between py-4 align-items-center">
                <div class="col-md-6 ">
                    <h4>محصولات</h4>
                </div>
                <div class="col-md-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item " ><a href="/"><i class="fa fa-home"> </i></a></li>
                            <li class="breadcrumb-item " ><a href="{{route('products')}}">محصولات</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_white">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('front/royal/images/T_1_front.jpeg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <div class="col-md-6">
                            <h4>{{$product->title}}</h4>
                            <hr>
                            <p>{{$product->description}}</p>
                            <hr>
                                <small>قمیت: {{$product->price}} تومان</small>
                                <small>موجودی: {{$product->inventory}}عدد</small>
                            @if(Cart::count($product) < $product->inventory)
                                <span class="btn  btn-warning btn-rounded text-white py-4" onclick="document.getElementById('add-to-cart').submit()">افزودن به سبد خرید</span>
                                <form  action="{{ route('cart.add' , $product->id) }}" method="post" id="add-to-cart">
                                    @csrf
                                </form>
                            @endif
                        </div>
                    </div>
                    <nav class="border-bottom">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active"  id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">توضیحات</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">نظرات</a>

                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h5 class="mt-4">توضیحات</h5>
                            <p class="text-justify">
                                {{$product->description}}
                            </p>
                        </div>
                        @include('layouts.errors')
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <h5 class="mt-4">بخش نظرات</h5>

                            @auth
                                <span class="btn btn-sm btn-primary" data-toggle="modal" data-target="#sendComment">ثبت نظر جدید</span>
                            @endauth
                            @guest
                                <div class="alert alert-warning">برای ثبت نظر لطفا وارد سایت شوید.</div>
                            @endguest

                            @include('layouts.comments' , ['comments' => $product->comments()->where('parent_id' , 0)->get()])
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endcomponent
