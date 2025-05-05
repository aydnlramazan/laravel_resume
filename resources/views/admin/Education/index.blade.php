@extends('admin.layout.adminlayout')

@section('content')

<a href="{{route('education.create')}}" class="btn btn-primary">Yeni Ekle</a>
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
        @foreach ($education as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->education_start}}</td>
            <td>{{$item->education_end}}</td>
            <td>{{$item->school_name}}</td>
            <td>{{$item->school_description}}</td>

            <td><a href="{{route('education.edit',$item->id)}}" class="btn btn-info">GÜNCELLE</td>
            <td>
                <form
                    action="{{route('education.destroy',$item->id)}}"
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