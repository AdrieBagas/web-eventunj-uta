@extends('layoutslanding.main')

<article class="mb-4">
<h2>Register in the <i>EventUNJ</i></h2>
</article>

<form class="row gy-2 gx-3 align-items-center">
<div class="mb-3">
  <label for="Inputemail" class="form-label">Email</label>
  <input type="text" class="form-control" id="Inputemail">
</div>

<div class="mb-3">
  <label for="Inputnama" class="form-label">Nama Lengkap</label>
  <input type="text" class="form-control" id="Inputnama">
</div>

<div class="mb-3">
  <label for="Inputnomer" class="form-label">Nomer Telepon</label>
  <input type="varchar" class="form-control" id="Inputnomer" placeholder="+62">
</div>

<div class="mb-3">
  <label for="Inputkode" class="form-label">Kode Event</label>
  <select id="inputkode" class="form-select">
    <option selected>1001= Webinar</option>
    <option selected>1020 = Workshop</option>
    <option selected>1030 = Lomba</option>
    <option selected>1040 = Pelatihan</option>
    <option selected>- 1050 = Seminar</option>
    <option selected>Choose...</option>
    <option>...</option>
  </select>
</div>

<div class="mb-3">
  <label for="Inputevent" class="form-label">Jenis Event</label>
  <input type="text" class="form-control" id="Inputnomer">
</div>

<div class="col-auto">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
    <label class="form-check-label" for="autoSizingCheck">
      Remember me
    </label>
  </div>
</div>
<div class="col-auto">
  <button type="submit" class="btn btn-primary" onClick="f1()">Submit</button>
</div>
</form>
    
<script type="text/javascript">
flag=1
function f1()
{
  alert("Anda berhasil melakukan registrasi!")
}
</script>