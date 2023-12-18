<div style="background-color: #222222">
    <div class="container position-relative  py-4 px-0 text-center">
        <div class="row  row-cols-md-6 row-cols-sm-3 ">
            @foreach ($comics as $item)
                <div class="card rounded-0 p-0 border-0 my-3  " style="max-width: 250px;">

                    <div class="myimgcard">
                        <img src="{{ $item['thumb'] }}" class="card-img-top w-100  " alt="series">
                    </div>

                    <div class="card-body px-0">
                        <h6 class="card-title text-uppercase text-light">{{ $item['series'] }}</h6>
                    </div>

                </div>
            @endforeach
        </div>
        <button class="btn btn-primary rounded-0   fw-bolder text-uppercase py-2  position-absolute  "
            style="bottom:97%; left:0; padding: 0 4em">Load
            More</button>

        <button class="btn btn-primary rounded-0   fw-bolder text-uppercase py-2 px-5 ">Load More</button>
    </div>
</div>
