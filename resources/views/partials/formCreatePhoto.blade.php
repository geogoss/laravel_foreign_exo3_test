@include('layouts.flash')

<div class="w-50 mx-auto mt-5">
    <form action="/photo" method="POST">
        @csrf
        <h2>Photo : </h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">URL</label>
            <input type="file" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <select name="color_id" class="form-select" aria-label="Default select example">
            <option selected>Select album</option>
            @foreach ($albums as $album)
                <option value={{ $album->id }}>{{ $album->nom }}</option>
                <option value={{ $album->id }}>{{ $album->auteur }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @foreach ($photos as $photo)
    <img style="width: 150px;" src="{{asset('/storage/'.$photo->url)}} " alt="">   
    @endforeach
</div>
