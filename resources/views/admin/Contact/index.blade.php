@extends('admin.layout.adminlayout')

@section('content')

<a href="{{route('contact.create')}}" class="btn btn-primary">Yeni Ekle</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">SOSYAL MEDYA ADI</th>
            <th scope="col">SOSYAL MEDYA LİNKİ</th>



        </tr>
    </thead>

    <tbody>
        @foreach ($contact as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->social_media_name}}</td>
            <td>{{$item->social_media_link}}</td>

            <td><a href="{{route('contact.edit',$item->id)}}" class="btn btn-info">GÜNCELLE</td>
            <td>
                <form
                    action="{{route('contact.destroy',$item->id)}}"
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