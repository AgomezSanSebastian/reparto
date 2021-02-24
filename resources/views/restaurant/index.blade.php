

@section('title','Restaurante')

@section('content')
    <h1>Restaurantes</h1>
    <ul>
        @foreach ($restaurantes as $restaurante)
            <li>{{$restaurante}}</li>
        @endforeach
    </ul>
@endsection

