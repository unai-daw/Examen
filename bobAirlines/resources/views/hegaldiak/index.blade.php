<body>
<form action=" {{ route('hegaldiak') }} " method="POST">
      @csrf
      <div class="mb-4">
        <label for="exampleInputEmail1" class="form-label">Hegaldi berria sartu</label>
        <input type="text" class="form-control" name="ireteeraAirport">
        <input type="text" class="form-control" name="helmugaAirport">
        <input type="date" class="form-control" name="ireteeraEguna">
        <input type="numbre" class="form-control" name="iraupena">
      </div>
      <button type="submit" class="btn btn-primary">Hegaldia Sartu</button>

    </form>

    <div>
      @foreach ($hegaldiak as $h)
      <div class="row py-1">
        <div class="col-md9 d-flex align-items-center">
          <h1>{{$h -> ireteeraAirport}}</h1>
          <h1>{{$h -> helmugaAirport}}</h1>
          <h1>{{$h -> ireteeraEguna}}</h1>
          <h1>{{$h -> iraupena}}</h1>
        </div>

        <div class="col-md-3 d-flex justify-content-end">
          <form action="{{ route('hegaldiak-update', [$h->id]) }}" method="POST">
            @method('PATCH')
            @csrf

            <label for="exampleInputEmail1" class="form-label">Hegaldia UPDATE</label>
        <input type="text" class="form-control" name="ireteeraAirport">
        <input type="text" class="form-control" name="helmugaAirport">
        <input type="date" class="form-control" name="ireteeraEguna">
        <input type="numbre" class="form-control" name="iraupena">
            <button class="btn btn-danger btn-sm" >ACTUALIZAR</button>
          </form>
        </div>
    @endforeach
</body>