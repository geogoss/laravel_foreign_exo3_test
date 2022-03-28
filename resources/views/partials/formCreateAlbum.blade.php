@include('layouts.flash')

<div class="w-50 mx-auto mt-5">
    <form action="/album" method="POST">
        @csrf
        <h2>Album :</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Auteur</label>
            <input type="text" name="auteur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>