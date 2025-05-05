@extends('admin.layout.adminlayout')

@section('content')

<form action="{{route('experience.update',$experience->id)}}" method="POST">
    @csrf
    @method('PUT')

    <fieldset>
        <legend>Deneyim GÜNCELLE </legend>
        <div class="mb-3">
            <label class="form-label">BAŞLAMA TARİHİ</label>
            <input type="text" class="form-control" name="job_start" value="{{$experience->job_start}}">
        </div>
        <div class="mb-3">
            <label class="form-label">AYRILIŞ TARİHİ</label>
            <input type="text" class="form-control" name="job_end" value="{{$experience->job_end}}">
        </div>
        <div class="mb-3">
            <label class="form-label">ŞİRKET</label>
            <input type="text" class="form-control" name="company_name" value="{{$experience->company_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">AÇIKLAMA</label>
            <input type="text" class="form-control" name="job_description" value="{{$experience->job_description}}">
        </div>


        <button type="submit" class="btn btn-info">GÜNCELLE</button>
    </fieldset>
</form>




@endsection