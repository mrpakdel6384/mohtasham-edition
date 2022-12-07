@foreach($comments as $comment )
    <div class="comment">
        <p>{{ $comment->comment }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img class="rounded-circle" src="/front/aron/images/user07.jpeg" alt="{{ $comment->user->name }}" width="42">
                <div class="ps-2 ms-1">
                    <h4 class="fs-sm mb-0">{{ $comment->user->name }}</h4>
                    <span class="fs-xs text-muted">{{ jdate($comment->created_at)->ago() }}</span>
                </div>
            </div>
            @auth
                <button class=" btn btn-outline-primary btn-sm replay" data-bs-toggle="modal" data-bs-target="#sendCommentModal" data-bs-whatever="@mdo" data-toggle="modal"  data-parent="{{ $comment->id }}">
                    پاسخ
                    <i class="ai-corner-up-left fs-base me-2 ms-n1"></i>
                </button>
            @endauth

        </div>
        @include('layouts.comments' , [ 'comments' => $comment->child ])
    </div>
@endforeach
<!-- Modal with tabs and forms -->

<div class="modal fade " >
    <div class="modal-dialog rounded">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light" id="exampleModalLabel">پاسخ به نظرات</h4>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-ms text-muted"> پس خود را بنویسید بعد از تایید مدیر نمایش داده خواهد شد</p>
                <form class="needs-validation" action="{{route('send.comment')}}" method="post">
                    <input type="hidden" name="parent_id" value="0">
                    <input type="hidden" name="commentable_id" value="{{ $subject->id }}">
                    <input type="hidden" name="commentable_type" value="{{ get_class($subject) }}">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group">
                            <i class="far fa-mail position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <textarea name="comment" class="form-control" id="com-text" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group col-md-8 offset-md-1">
                            <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                            @error('g-recaptcha-response')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary d-block w-100" type="submit">ارسال نظر</button>

                </form>
            </div>
        </div>
    </div>
</div>


@section('masterscript')
    <script type='text/javascript'>
        $(document).ready(function(){

            $('#sendCommentModal').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget) // Button that triggered the modal
                console.log(button);
                let parentId = button.data('parent') // Extract info from data-* attributes

                var modal = $(this)
                modal.find("[name='parent_id']").val(parentId)
            })
        });
    </script>
@endsection
