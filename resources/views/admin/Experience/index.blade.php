@extends('admin.layout.adminlayout')

@section('content')

<a href="{{route('experience.create')}}" class="btn btn-primary">Yeni Ekle</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">BAŞLAMA TARİHİ</th>
            <th scope="col">AYRILIŞ TARİHİ</th>
            <th scope="col">ŞİRKET</th>
            <th scope="col">AÇIKLAMA</th>
       

        </tr>
    </thead>

    <tbody>
        @foreach ($experience as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->job_start}}</td>
            <td>{{$item->job_end}}</td>
            <td>{{$item->company_name}}</td>
            <td>{{$item->job_description}}</td>

            <td><a href="{{route('experience.edit',$item->id)}}" class="btn btn-info">GÜNCELLE</td>
            <td>
                <form
                    action="{{route('experience.destroy',$item->id)}}"
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