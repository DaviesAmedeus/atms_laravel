@props(['imglink', 'deschead', 'descbody'])

<div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
    <div class="project-item">
        <div class="project-img">
            <img src="{{ asset($imglink) }}" class="img-fluid w-100 rounded" alt="">
            <div class="project-content">
                <div href="#" class="text-center px-3 py-2 rounded-2 m-3" style="background: rgba(9, 9, 32, 0.671);">
                    <p class="m-0 text-white">{{ $descbody }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
