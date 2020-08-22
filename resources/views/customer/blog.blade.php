@extends('layouts.master')
@section('page_title',ucfirst('blog'))
@section('main')
    <div class="banner-blog">
        <div class="container">
            @if (isset($cat->name))
            <h1>{{$cat->name}}</h1>
            @else
            <h1>Blog</h1>
            @endif
        </div>
    </div>
    <main>
        <div class="post-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="blog-content col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="menu-cat">
                            <ul class="list-cat">
                                <li class="cat-blog"><a href="{{route('blog')}}">All</a></li>
                                @foreach ($listCat as $cat)
                                <li class="cat-blog {{($cat->slug == $slug)?" menu-cat-active" : " "}}"><a href="{{route('blog.category',$cat->slug)}}">{{$cat->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="list-blog">
                            <div class="row">
                                @foreach ($blogs as $blog)
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <div class="blog-thumb">
                                        <a href="{{route('user.blog',$blog->slug)}}" class="link-img-blog">
                                        <img class="img-blog-thumb" src="{{url("/uploads/$blog->thumbnail_image")}}" alt="">
                                        </a>
                                        <div class="cat-thumb">
                                            <a href="{{route('blog.category',$blog->catBlog->slug)}}">{{$blog->catBlog->name}}</a>
                                        </div>
                                        <h2 class="title-thumb"><a href="{{route('user.blog',$blog->slug)}}/">{{$blog->title}}</a></h2>
                                        <div class="summary-content">{{$blog->summary}}</div>
                                        <div class="date-thumb"><a href="">{{date_format($blog->created_at,"F d ,Y")}}</a></div>
                                    </div>
                                </div>    
                                @endforeach
                            </div>
                        </div>
                        <div class="clearfix text-center">
                            {{$blogs->links('vendor.pagination.cus-pag')}}
                        </div>

                    </div>
                    <div class="side-right-blog col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="side-right">
                            <div class="search-blog">
                                <form action="{{route('blog.search')}}" method="GET" role="form">
                                    <h2>Search</h2>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="s"  id="" placeholder="Search the blog">
                                        <button type="submit" class="search-btn-blog">
                                            <span class="kz kz-search-space"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="popular-post">
                                <h2 class="pop-content">Popular Post</h2>
                                @php
                                    $index = 1;
                                @endphp
                                @foreach ($popularBlog as $item)
                                <div class="pop-block">
                                    <div class="img-index">
                                        <a href="{{route('user.blog',$item->slug)}}">
                                        <img style="width: auto; height: 80px;" src="{{url("uploads/$item->thumbnail_image")}}" alt="">
                                        </a>
                                        <div class="index">{{$index}}</div>
                                    </div>
                                    <div class="summary-post-pop">
                                        <h3 class="cat-post-pop"><a href="">{{$item->catBlog->name}}</a></h3>
                                        <h4 class="title-post-pop"><a href="{{route('user.blog',$item->slug)}}">{{$item->title}}</a></h4>
                                        <p class="date-post-pop"><a href="">{{date_format($item->created_at,"F d ,Y")}}</a></p>
                                    </div>
                                </div>   
                                @php
                                    $index ++;
                                @endphp
                                @endforeach

                            </div>
                            <div class="list-cat-blog">
                                <h2 class="pop-content">Categories</h2>
                                <ul class="list-cat-block">
                                    @foreach ($listCat as $cat)
                                    <li class="cat-blog">
                                        <a href="{{route('blog.category',$cat->slug)}}">{{$cat->name}}</a><span> ({{$cat->blog->count()}})</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="form-join-us">
                                <h2 class="pop-content">Join Our List</h2>
                                <h3 class="recommend">Signup to be the first to hear about exclusive deals, special offers and upcoming collections</h3>
                                <form action="" method="POST" role="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Your email address">
                                    </div>
                                    <button type="submit" class="btn">SUBMIT</button>
                                </form>
                            </div>
                            <div class="instagram-box">
                                <h2 class="pop-content">Instagram</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
