<x-app-layout>

    @foreach($posts as $post)
      <p>{{$post->title}}</p>
    @endforeach

</x-app-layout>
