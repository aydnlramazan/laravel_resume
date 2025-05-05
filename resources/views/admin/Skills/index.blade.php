@extends('admin.layout.adminlayout')

@section('content')

<a href="{{route('skills.create')}}" class="btn btn-primary">Yeni Ekle</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">BAŞLAMA TARİHİ</th>
            <th scope="col">AYRILIŞ TARİHİ</th>
            <th scope="col">OKUL</th>
            <th scope="col">AÇIKLAMA</th>


        </tr>
    </thead>

    <tbody>
        @foreach ($skills as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->skill_name}}</td>
            <td>{{$item->skill_percentage}}</td>

            <td><a href="{{route('skills.edit',$item->id)}}" class="btn btn-info">GÜNCELLE</td>
            <td>
                <form
                    action="{{route('skills.destroy',$item->id)}}"
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