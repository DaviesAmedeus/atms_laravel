@props([
    'heading',
    'author',
    'desc' ,
    'imglink',
    'bloglink',
    'date',
])

<div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
    <div class="blog-item  bg-light rounded">
        <img src="{{ asset($imglink) }}" class="img-fluid w-80 rounded-top" alt="">

        <div class="blog-content text-center  px-3" style="margin-top: -25px;">
            <img src="img/admin.jpg" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">

            <h4 class="mt-2">{{ $heading }}</h4>
            <div class="d-flex justify-content-between">
                <p><b><i><em>{{ $author }}</em></i></b></p>
                <span class="text-secondary">{{ $date }}</span>
            </div>

            <p class="py-2">{{ $desc }}</p>
            <a href="{{ $bloglink }}" target="_blank" class="btn btn-secondary btn-sm text-white my-2">Read More</a>
        </div>
        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">

        </div>
    </div>
</div>
