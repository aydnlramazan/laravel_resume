@extends('admin.layout.adminlayout')

@section('content')

<a href="{{route('about.create')}}" class="btn btn-primary">Yeni Ekle</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">İSİM</th>
            <th scope="col">DOĞUM TARİHİ</th>
            <th scope="col">TELEFON</th>
            <th scope="col">EMAİL</th>
            <th scope="col">WEBSİTE</th>
            <th scope="col">ADRES</th>

        </tr>
    </thead>

    <tbody>
        @foreach ($about as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->birthday}}</td>
            <td>{{$item->phone_number}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->website}}</td>
            <td>{{$item->address}}</td>
            <td><a href="{{route('about.edit',$item->id)}}" class="btn btn-info">GÜNCELLE</td>
            <td>
                <form
                    action="{{route('about.destroy',$item->id)}}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">SİL</button>
                </form>
            </td>



        </tr>
        @endforeach
    </tbody>
</table>



@endsection