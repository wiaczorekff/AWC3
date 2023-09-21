<ul>
@foreach($tags as $tag)

<li><a href="{{route('tags.show', $tag->id)}}">{{$tag->title}}</a></li>

@endforeach
</ul>