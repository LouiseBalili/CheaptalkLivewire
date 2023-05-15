<div>
    <div class="container">
        <h2 class="float-start text-center text-dark text-uppercase p-3 w-100" style="margin-top:30px; background-color: #e3f2fd;">Categories</h2>
            <div class="row p-2 mb-2">
            <div class="container">
                @if($categories->count() > 0)
                    @foreach($categories as $category)
                        <div class="col p-3 border shadow-sm rounded" style="background-color: #e3f2fd; margin-bottom: 2px;">
                            <h4>{{ $category->category }}</h4>
                            <p>{{ $category->remarks }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="container">
                        <p>No categories found.</p>
                    </div>
                @endif
            </div>
            </div>

        </div>
    </div>
