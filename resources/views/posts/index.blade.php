@foreach($posts as $post)
    <div>
        <h4>{{ $post->name }}</h4>

        <img src="{{$post->poster}}" alt="">

        <p>{{$post->description }}</p>
        <p>{{ $post->content }}</p>
        @foreach($post->categories as $category)
            <span>{{ $category->name }}</span>
        @endforeach
    </div>
@endforeach
