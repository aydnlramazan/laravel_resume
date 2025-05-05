@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('contact.update',$contact->id)}}" method="POST">
    @csrf
    @method('PUT')

    <fieldset>
        <legend>İLETİŞİM GÜNCELLE </legend>
        <div class="mb-3">
            <label class="form-label">SOSYAL MEDYA ADI</label>
            <input type="text" class="form-control" name="social_media_name" value="{{$contact->social_media_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">SOSYAL MEDYA LİNK</label>
            <input type="text" class="form-control" name="social_media_link" value="{{$contact->social_media_link}}">
        </div>



        <button type="submit" class="btn btn-info">GÜNCELLE</button>
    </fieldset>
</form>




@endsection