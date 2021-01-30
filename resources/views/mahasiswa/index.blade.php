@extends('layout.app')

@section('title', 'mahasiswa')

@section('content')

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  TAMBAHKAN DATA MAHASISWA
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">N0TLP</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2018114008</th>
      <td>Lala Nurjanah</td>
      <td>Cirebon</td>
      <td>082667854321</td>
      <td>Lala@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2018114009</th>
      <td>Selvi Feliyanti</td>
      <td>Cirebon</td>
      <td>083675894123</td>
      <td>mpi@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2018114014</th>
      <td>Erika Anjani</td>
      <td>Cirebon</td>
      <td>082889776543</td>
      <td>erikaanjani64@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2018114021</th>
      <td>Diana Kusuma Dewi</td>
      <td>Cirebon</td>
      <td>087993445210</td>
      <td>Diana@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2018114037</th>
      <td>Ashri Azizah Yolandita</td>
      <td>Cirebon</td>
      <td>087993445210</td>
      <td>yolandita64@gmail.com</td>
    </tr>
    
  </tbody>
</table>
<!-- Scrollable modal -->
<div class="modal-dialog modal-dialog-scrollable">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MASUKAN DATA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <fieldset disabled>
    <legend></legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama Mahasiswa</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Alamat</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Nomor Telepon</label>
      <select id="disabledSelect" class="form-select">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        <option></option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary"></button>
  </fieldset>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

