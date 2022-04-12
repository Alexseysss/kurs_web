@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">• {{ $date->translatedFormat('d F Y') }} • {{$date->format('H:i')}} • </p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('storage/'. $post->post_image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        {!! $post->content !!}

                    </div>
                </div>
            </section>
         <!--
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Оставить комментарий</h2>
                        <form action="/" method="post">
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="message" id="comment" class="form-control" placeholder="Напишите комментарий!" rows="10"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Send Message" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            -->
        </div>
    </main>
@endsection
