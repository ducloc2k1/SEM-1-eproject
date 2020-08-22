@foreach ($comments as $comment)
<div class="media">
    <div class="media-left">
        <img src="https://www.w3schools.com/bootstrap/img_avatar1.png" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
        <h4 class="media-heading">{{$comment->customer->display_name}}</h4>
        <small>
            <i>{{$comment->created_at}}</i>
            <i class="reply pull-right" onclick="reply(this)">Reply</i>
        </small>
        <p>{{$comment->content}}</p>
        <input class="comment_id" type="hidden" value="{{$comment->id}}"> 
        @include('partials.replies', ['comments' => $comment->replies])                   
    </div>      
</div>  
@endforeach
 