<x-main>

<x-slot name="title">Custom Title</x-slot>

@foreach ($books as $book)

<li><a href="{{ route('books.show', $book) }}">{{$book->name}}</a></li>

@endforeach

</x-main>>
