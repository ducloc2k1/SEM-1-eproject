@extends('layouts.master')
@section('page_title',ucfirst('blog detail'))
@section('main')
<main>
    <div class="post-inner">
        <div class="blog-content col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="header-post">
                <img class="header-img" src="{{url("uploads/$blog->image")}}" alt="">
                <div class="post-info">
                    <div class="cat-post">{{$catBlog->name}}</div>
                    <h2 class="title-post">{{$blog->title}}</h2>
                    <div class="about-post">
                        <div class="authur-post">
                            <span class="kz-user"></span>
                            Admin Kazen
                        </div>
                        <div class="date-post">
                            <span class="kz-calendar"></span>
                            {{date_format($blog->created_at,"F d ,Y")}}
                        </div>
                        <div class="number-comment">
                            <span class="kz-chat"></span>
                            {{$countComment}} Comments
                        </div>
                    </div>
                </div>
            </div>
            <!--end header post-->
            <div class="wrap-post-side">
                <div>
                    <div class="side-left">
                        <div class="social-share">
                            Share
                            <section>
                                <span class="kz-twitter"></span>
                                <span class="kz-facebook"></span>
                                <span class="kz-instagram"></span>
                                <span class="kz-pinterest"></span>
                            </section>
                        </div>
                        <div class="tag-cat">
                            Tag
                            <section>
                                @foreach ($blog->tags as $item)
                                <span><a href="blog.html">{{$item->name}}</a></span>   
                                @endforeach
                            </section>
                        </div>
                        @if ($preBlog)
                        <div class="adjacent-post">
                            Previous Post
                            <div class="block-adj-post">
                                <div class="img-adj-post">
                                <a href="{{route('user.blog',$preBlog->slug)}}">
                                    <img src="{{url("uploads/$preBlog->thumbnail_image")}}" alt="">
                                </a>
                                </div>
                                <h3 class="title-post">{{$preBlog->title}}</h3></a>
                            </div>
                        </div> 
                        @else
                            <div></div>
                        @endif
                        @if ($nextBlog)
                        <div class="adjacent-post">
                            Next Post
                            <div class="block-adj-post">
                                <div class="img-adj-post">
                                    <a href="{{route('user.blog',$nextBlog->slug)}}">
                                    <img src="{{url("uploads/$nextBlog->thumbnail_image")}}" alt="">
                                    </a>
                                </div>
                                <h3 class="title-post">{{$nextBlog->title}}</h3></a>
                            </div>
                        </div>
                        @else
                            <div></div>
                        @endif
                    </div>

                    <div class="wrap-post-content">
                        <!--end header post-->
                        <div class="post-detail">                           
                        {!!$blog->content!!}
                        </div>
                    <div class="recommend-post">
                        <h2>You might also like </h2>
                        <div id="owl-recommend" class="owl-carousel">
                            <div class="block-recommend-post">
                                <img src="https://zonex.famithemes.com/wp-content/uploads/2019/06/bl9-425x255.jpg"
                                    alt="" class="img-post">
                                <h3 class="title-recommend-post"><a href="">Weekender Bags</a></h3>
                            </div>
                            <div class="block-recommend-post">
                                <img src="https://zonex.famithemes.com/wp-content/uploads/2019/06/bl3-425x255.jpg"
                                    alt="" class="img-post">
                                <h3 class="title-recommend-post"><a href="">Big Top Barware</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="wrap-post-side">
            <div class="comment-section">
                <h2>{{$countComment}}  Comments</h2>
                @include('partials.replies', ['comments' => $blog->commentNull])
                <div class="add-new-comment" id="new_comment">
                    <form action="{{route('blog_comment.add')}}" method="POST" role="form">
                        @csrf
                        <legend>Add a comment</legend>
                        <div class="form-group">

                            @if (Auth::guard('cus')->user())
                                <div class="logged">Logged as {{Auth::guard('cus')->user()->display_name}}. <a href="{{route('customer.logout')}}">Log out ?</a></div>
                            @endif

                            <textarea name="content"  placeholder="Your Comments"></textarea>
                            @if ($errors->has('content'))
                            <small style="color:red">{{$errors->first('content')}}</small>
                            @endif
                            <input type="hidden" name="parent_id" value="">
                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <input type="hidden" name="customer_id" value="{{!is_null(auth()->user()) ? auth()->user()->id : ''}}">
                        </div>
                        <button type="submit" class="">Post comment</button>
                    </form>
                </div>
                <div class="add-new-comment" id="reply_comment">
                    <form action="{{route('blog_comment.reply')}}" method="POST" role="form">
                        @csrf
                        <legend>Add a comment</legend>
                        <a class="cancer_reply" href="javascript:void(0)">Cancer reply</a>
                        <div class="form-group replyComment ">
                            @if (Auth::guard('cus')->user())
                                <div class="logged">Logged as {{Auth::guard('cus')->user()->display_name}}. <a href="{{route('customer.logout')}}">Log out ?</a></div>
                            @endif
                            <textarea name="content_reply"  placeholder="Your Comments"></textarea>
                            @if ($errors->has('content_reply'))
                            <small style="color:red" >{{$errors->first('content_reply')}}</small>
                            @endif
                            <input type="hidden" class="parent_id" name="parent_id" value="">
                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <input type="hidden" name="customer_id" value="{{!is_null(auth()->user()) ? auth()->user()->id : ''}}">
                        </div>
                        <button type="submit" class="">Post comment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection
@section('script')
    <script>
       function notError(){
        $('.replyComment > small').css('display','none');
       }
        //show and hidden reply form
        function reply(caller) {
            $('#reply_comment').insertAfter($(caller).parent().next());
            $('#reply_comment .parent_id').val($('#reply_comment~input').val());
            console.log($('#reply_comment .parent_id').val($('#reply_comment~input').val()));
            $('#reply_comment').show();
            $('#new_comment').hide();
        };

        $('.cancer_reply').click(function(){
            $('#reply_comment').hide();
            $('#new_comment').show();
        notError();
        });

        $(document).ready(function(){
            $("#owl-recommend").owlCarousel({
                loop: true,
                margin: 30,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        loop: false
                    }
                }
            });
        });
    </script>
@endsection

