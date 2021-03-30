<div class="container tour-images mb-5">
    <h1 class="text-center">Tours</h1>
    <hr class="bg-info mb-4">
    <div class="row justify-content-center">
        @foreach ($tours as $tour)
            <div class="col-md-4">
                <div class="card shadow h-100" style="width: 20rem;">
                    <div class="inner">
                        <img src="images/tour-package-images/{{ $tour->image }}" class="card-img-top"
                            alt="{{ $tour->name }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $tour->name }}</h5>
                        <p class="card-text">{{ $tour->description }}</p>
                        <a href="#" class="btn btn-info">View More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
