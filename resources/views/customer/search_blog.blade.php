@extends('layouts.master')
@section('page_title',ucfirst('blog'))
@section('main')
<div class="banner-blog">
    <div class="container">
        <h1>Search Result For: </h1>
    </div>
</div>
<main>
    <div class="post-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="blog-content">
                    <div class="post-info search-name-blog">
                        <div class="cat-post"></div>
                        <h2 class="title-post"><a href="">Roselle Ebarle Hat</a></h2>
                        <div class="about-post">
                            <div class="date-post">
                                NOVEMBER 6, 2019
                                {{-- {{date_format($blog->created_at,"F d ,Y")}} --}}
                            </div>
                            <div class="authur-post">
                                <span>Posted by:</span> Admin Kazen                                
                            </div>
                            <div class="number-comment">
                                {{-- {{$countComment}} Comments --}}
                                <span>8 comments</span>
                            </div>
                        </div>                   
                    <div class="clearfix text-center">
                        {{-- {{$blogs->links('vendor.pagination.cus-pag')}} --}}
                    </div>

                </div>

            </div>
        </div>
    </div>
</main>
@endsection