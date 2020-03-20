<ul>
    @foreach($products as $p)
        <li>  {{ $p->title }} : {{ $p->price }} DH </li>
    @endforeach
</ul>


