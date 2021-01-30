@extends('layout.app')

@section('title', 'mahasiswa')

@section('content')

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  SILAHKAN ABSENSI
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Waktu_Absen</th>
      <th scope="col">Mahasiswa_ID</th>
      <th scope="col">Matakuliah_ID</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>09.00</td>
      <td>20181140108</td>
      <td>56743</td>
      <td>Hadir</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>09.05</td>
      <td>2018114008</td>
      <td>43267</td>
      <td>Hadir</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>09.10</td>
      <td>2018114014</td>
      <td>57896</td>
      <td>Hadir</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>09.15</td>
      <td>2018114021</td>
      <td>48899</td>
      <td>Hadir</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>09.20</td>
      <td>2018114037</td>
      <td>56439</td>
      <td>Hadir</td>
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
        <h5 class="modal-title" id="exampleModalLabel"> Masukan Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <fieldset disabled>
    <legend></legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Waktu Absen</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Mahasiswa ID</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Keterangan</label>
      <select id="disabledSelect" class="form-select">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label"></label>
      <select id="disabledSelect" class="form-select">
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

