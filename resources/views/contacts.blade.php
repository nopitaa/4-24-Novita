@extends('layouts.main')

@section('container')

<div class="titile-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
<form>
<div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Nama">
        <label for="inputname">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputemail" placeholder="Email">
        <label for="inputname" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan pesan di sini!" id="floatingTextarea" style="height:100px"></textarea>
    <label for="floatingTextarea">Pesan</label>
</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection