<div>
    <form action="{{$url}}" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="{{$name}}" value="{{old($name)}}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>
