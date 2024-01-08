    <form action="{{ route('comics.store') }}" method="POST">

        @csrf
        <input type="text" name="title" id="title" placeholder="inserisci titolo" class="form-control text-center ">
        <input type="text" name="price" id="price" placeholder="price" class="form-control text-center">
        <input type="text" name="description" id="description" placeholder="description"
            class="form-control text-center">
        <input type="text" name="type" id="type" placeholder="type" class="form-control text-center">
        <input type="text" name="sale_date" id="sale_date" placeholder="sale_date" class="form-control text-center">
        <input type="text" name="series" id="series" placeholder="series" class="form-control text-center">

        <button type="submit" class="btn btn-primary">invia</button>

    </form>
