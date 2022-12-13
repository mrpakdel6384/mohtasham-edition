@foreach($comments as $comment )
    <li class="comment">
        <article class="comment-body">
            <footer class="comment-meta">
                <div class="comment-author vcard">
                    {{--<img src="assets/img/author1.jpg" class="avatar" alt="image">--}}
                    <b class="fn">{{ $comment->user->name }}</b>
                    <span class="says">says:</span>
                </div>

                <div class="comment-metadata">
                    <a href="#">
                        <time>{{$comment->created_at->format('M, d Y H:i:s A')}}</time>
                    </a>
                </div>
            </footer>

            <div class="comment-content">
                <p>{{ $comment->comment }}</p>
            </div>
            @auth

            <button class="reply comment-reply-link" data-bs-toggle="modal" data-bs-target="#sendCommentModal" data-bs-whatever="@mdo" data-toggle="modal"  data-parent="{{ $comment->id }}">
                Reply
            </button>
            @endauth
        </article>

        <ol class="children">
            @include('layouts.comments' , [ 'comments' => $comment->child ])
        </ol>
    </li>
@endforeach
<!-- Modal with tabs and forms -->

<div class="modal fade " id="sendCommentModal">
    <div class="modal-dialog rounded" >
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light" id="exampleModalLabel">replay to Comments</h4>
                <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-ms text-muted">Write your answer, it will be displayed after the administrator's approval</p>
                <form class="needs-validation" action="{{route('send.comment')}}" method="post">
                    <input type="hidden" name="parent_id" value="0">
                    <input type="hidden" name="commentable_id" value="{{ $subject->id }}">
                    <input type="hidden" name="commentable_type" value="{{ get_class($subject) }}">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group">

                            <textarea name="comment" class="form-control comment" id="com-text" cols="30" rows="60"></textarea>
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

                    <button class="btn btn-warning d-block w-100" type="submit">Submit</button>

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
