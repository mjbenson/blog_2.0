<div class ="comments">

    <ul class ="list-group">

        <br>

        @foreach ($post->comments as $comment)

            <article>

                <li class="list-group-item">
                    {{ $comment->body }}

                    <div class ="comment-time">

                        <strong>{{ $comment->created_at->diffForHumans() }}</strong>
                        <br>
                        {{ $comment->created_at->toDayDateTimeString() }}

                    </div>
                </li>
            </article>

        @endforeach

        <hr>
    </ul>
</div>