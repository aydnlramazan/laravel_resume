@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('contact.store')}}" method="POST">
    @csrf

    <fieldset>
        <legend>Yeni İLETİŞİM Ekle </legend>
        <div class="mb-3">
            <label class="form-label">SOSYAL MEDYA ADI</label>
            <input type="text" class="form-control" name="social_media_name">
        </div>
        <div class="mb-3">
            <label class="form-label">SOSYAL MEDYA LİNKİ</label>
            <input type="text" class="form-control" name="social_media_link">
        </div>
        
       

        <button type="submit" class="btn btn-primary">EKLE</button>
    </fieldset>
</form>




@endsection