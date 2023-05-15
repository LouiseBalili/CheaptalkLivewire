<div>
    <h2 class="float-start text-center text-dark text-uppercase p-3 w-100" style="margin-top:30px; background-color: #e0f0fc;">Posts</h2>
    <div class="container">
        <div class="container d-flex justify-content-between align-items-center" style="margin-top: 75px;">

                <div class="d-flex justify-content-between align-items-center w-100">
                    <input wire:model="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                    <select wire:model="category" class="form-select me-2" aria-label="Default select example">
                        <option value="all">All</option>
                        <option value="1">Comedy</option>
                        <option value="2">Romance</option>
                        <option value="3">Religion</option>
                        <option value="4">Politics</option>
                        <option value="5">Education</option>
                        <option value="6">Business</option>
                    </select>

                    <a href="{{ url('/create-post') }}" class="btn btn-primary w-50">Create post</a>
                </div><br><br><br>
        </div>


        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif

        @if($posts->count() > 0)
            @foreach($posts as $post)

            <div class="row shadow-sm rounded border p-2 mb-2" style="background-color: #e0f0fc;">
                <div class="container">
                    <p class="mb-2 fw-light fs-6">Posted by {{ $post->author }} &#8226; {{ $post->category->category }}</p>
                    <p class="mb-0 h4 text-uppercase"> {{ $post->title }} </p>
                    <p>{{ $post->content }}</p>

                    <p class="mb-0 fw-light fs-6">Posted on {{ $post->created_at }}</p>
                </div>
            </div>

            @endforeach
        @else
            <div class="container">
                <p>No post found.</p>
            </div>
        @endif
    </div>
</div>
