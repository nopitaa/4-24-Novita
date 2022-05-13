@extends('layouts.main')

@section('container')

<<<<<<< HEAD
<div class="titile-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
<form method="POST" action="{{ route('contacts.store')}}">
{{csrf_field()}}
<div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
        <label for="inputname">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
        <label for="inputemail" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan pesan di sini!" id="floatingTextarea" style="height:100px" name="pesan"></textarea>
    <label for="floatingTextarea">Pesan</label>
</div>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
=======

</form>

    <section id="contact" class="contact">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Purwokerto, Banyumas, Jawa Tengah</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>novitasyahwahapsari@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+6281 229 555 381</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="POST" action="{{ route('contacts.store')}}">
                {{csrf_field()}}                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
            </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
            </div>
              <div class="form-group mt-3">
                <textarea class="form-control" placeholder="Tinggalkan pesan di sini!" id="floatingTextarea" 
                style="height:100px" name="pesan"></textarea>
            </div>
            <div class="mt-4">
                <div class="text"><button type="submit" class="btn btn-primary">Kirim</button></div>
            </div>
            </form>

          </div>

        </div>

    </section>
>>>>>>> e722aa0 (Porofolio Laravel)
@endsection
