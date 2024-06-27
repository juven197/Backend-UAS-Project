<div class="col-md-3">
    <div class="sidebar bg-dark text-white ">
        <h5>Filters</h5>
        <form>
            <div class="form-group mb-2">
                <label for="minPrice">Name:</label>
                <input name="title" type="text" id="minPrice" class="form-control" placeholder="Name" value="{{$data["title"]}}">
            </div>
            <div class="form-group mb-2">
                <label for="genre">Genre:</label>
                <select class="form-control" id="genre" name="genre_id">
                    <option value="0">Click here</option>
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->title}} {{ $data['genre_id'] == $genre->id ? 'selected' : '' }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="minPrice">Minimum Price:</label>
                <input type="text" id="minPrice" class="form-control" placeholder="0" name="min_price" value="{{ $data['min_price']}}" >
            </div>
            <div class="form-group mb-2">
                <label for="maxPrice">Maximum Price:</label>
                <input type="text" id="maxPrice" class="form-control" placeholder="100000" name="max_price" value="{{ $data['max_price']}}" >
            </div>
            <button type="submit" class="btn btn-primary">Apply</button>
        </form>
    </div>
</div>
