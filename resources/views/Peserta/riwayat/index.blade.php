@extends('peserta.layouts.master')

@section('content')
<ul class="nav nav-tabs d-flex gap-2 text-center" id="tabs-profil" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Penilaian</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Tim</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-2" aria-selected="false">Assesment</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="simple-tab-3" data-bs-toggle="tab" href="#simple-tabpanel-3" role="tab" aria-controls="simple-tabpanel-3" aria-selected="false">Dokumen</a>
  </li>
</ul>
<hr class="p-0">
<div class="tab-content" id="tab-content">
  <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
    <div class="content-profil py-5">
      <h3 class="text-center mb-0 pb-0" style="font-size: 150%; font-weight: bold;">Desk Evaluation</h3>
        <div class="container mt-4">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-12">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body">
                  <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar" class="d-flex justify-content-between">
                      <li class="active" id="account">
                        <strong>Evaluator</strong>
                      </li>
                      <li id="personal"><strong>Lead Evaluator</strong></li>
                      <li id="payment"><strong>Sekretariat</strong></li>
                    </ul>
                    <div class="progress">
                      <div
                        class="progress-bar progress-bar-striped progress-bar-animated"
                        role="progressbar"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <br />
                    
                    <!-- fieldsets -->
                    <fieldset>
                      <div class="card-body pt-0 mt-0">
                        <div class="row align-items-center pt-4 pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0">Nama Evaluator</h6>
                          </div>
                          <div class="col-md-8 pe-5">
                            <input type="text" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="row align-items-center pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0">Nilai</h6>
                          </div>
                          <div class="col-md-3 pe-5">
                            <div class="input-group">
                              <input type="text" class="form-control form-control-lg" />
                              <label class="input-group-text" style="background-color: #D7DAE3; border-radius: 0 15px 15px 0; border-right: 1px solid #9fafbf; border-top: 1px solid #9fafbf; border-bottom: 1px solid #9fafbf; color: #595959;"><i class="fa fa-download"></i></label>
                            </div>
                          </div>
                        </div>

                        <div class="row pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0 mt-2">Komentar</h6>
                          </div>
                          <div class="col-md-8 pe-5">
                            <textarea class="form-control" rows="4"></textarea>
                          </div>
                        </div>        
                      </div>
                    
                        <input
                          type="button"
                          name="next"
                          class="btn next action-button float-end"
                          value="Next"
                          style="width: 13%;"
                        />
                      
                    </fieldset>
                    
                    <fieldset>
                    <div class="card-body pt-0 mt-0">
                        <div class="row align-items-center pt-4 pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0">Nama Lead Evaluator</h6>
                          </div>
                          <div class="col-md-8 pe-5">
                            <input type="text" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="row align-items-center pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0">Nilai</h6>
                          </div>
                          <div class="col-md-3 pe-5">
                            <div class="input-group">
                              <input type="text" class="form-control form-control-lg" />
                              <label class="input-group-text" style="background-color: #D7DAE3; border-radius: 0 15px 15px 0; border-right: 1px solid #9fafbf; border-top: 1px solid #9fafbf; border-bottom: 1px solid #9fafbf; color: #595959;"><i class="fa fa-download"></i></label>
                            </div>
                          </div>
                        </div>

                        <div class="row pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0 mt-2">Komentar</h6>
                          </div>
                          <div class="col-md-8 pe-5">
                            <textarea class="form-control" rows="4"></textarea>
                          </div>
                        </div>        
                      </div>

                      <input
                        type="button"
                        name="next"
                        class="btn next action-button float-end"
                        value="Next"
                        style="width: 13%;"
                      />
                      <input
                        type="button"
                        name="previous"
                        class="btn previous action-button-previous float-end me-3"
                        value="Previous"
                        style="width: 13%;"
                      />
                    </fieldset>

                    <fieldset>
                    <div class="card-body pt-0 mt-0">
                        <div class="row align-items-center pt-4 pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0">Nama Sekretariat</h6>
                          </div>
                          <div class="col-md-8 pe-5">
                            <input type="text" class="form-control form-control-lg" />
                          </div>
                        </div>

                        <div class="row align-items-center pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0">Nilai</h6>
                          </div>
                          <div class="col-md-3 pe-5">
                            <div class="input-group">
                              <input type="text" class="form-control form-control-lg" />
                              <label class="input-group-text" style="background-color: #D7DAE3; border-radius: 0 15px 15px 0; border-right: 1px solid #9fafbf; border-top: 1px solid #9fafbf; border-bottom: 1px solid #9fafbf; color: #595959;"><i class="fa fa-download"></i></label>
                            </div>
                          </div>
                        </div>

                        <div class="row pb-3">
                          <div class="col-md-4 ps-5">
                            <h6 class="mb-0 mt-2">Komentar</h6>
                          </div>
                          <div class="col-md-8 pe-5">
                            <textarea class="form-control" rows="4"></textarea>
                          </div>
                        </div>        
                      </div>
                      <input
                        type="button"
                        name="previous"
                        class="btn previous action-button-previous float-end me-3"
                        value="Previous"
                        style="width: 13%;"
                      />
                    </fieldset>
                  </form>
                </div>  
              </div>
            </div>
          </div>
        </div>
    </div>

    
    <div class="content-site-evaluation mt-4 py-5 gap-2 d-flex justify-content-center flex-column text-center">
      <h3 class="mb-0 pb-0" style="font-size: 150%; font-weight: bold;">Site Evaluation</h3>
      <span>Sedang Tahap penilaian Desk Evaluation. Harap Ditunggu!</span>
    </div>
    <hr class="p-0">
  </div>
    

<div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
  <div class="content-kontak py-4 mb-4">
    <div class="d-flex align-items-center justify-content-between text-center mt-2">
      <h3 class="m-0" style="font-size: 150%; font-weight: bold;">Tambahkan Kontak Penghubung</h3>
      <i class="fa fa-plus-square fa-3x" style="color: #552525;"></i>
    </div>
  </div>

  <div class="content-kontak-form mb-5">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-xl-12">
          <div class="card my-5" style="border-radius: 15px;">
            <div class="card-body">
              <div class="row align-items-center pt-4 pb-3">
                  <div class="col-md-4 ps-5">
                    <h6 class="mb-0">Nama Organisasi</h6>
                  </div>
                  <div class="col-md-8 pe-5">
                    <input type="text" class="form-control form-control-lg" />
                  </div>
              </div>
              <div class="row align-items-center pb-3">
                  <div class="col-md-4 ps-5">
                    <h6 class="mb-0">Nomor Telepon</h6>
                  </div>
                  <div class="col-md-8 pe-5">
                    <input type="text" class="form-control form-control-lg" />
                  </div>
              </div>
              <div class="row align-items-center pb-3">
                  <div class="col-md-4 ps-5">
                    <h6 class="mb-0">Jabatan</h6>
                  </div>
                  <div class="col-md-8 pe-5">
                    <input type="text" class="form-control form-control-lg" />
                  </div>
              </div>
              <div class="px-5 py-4 d-flex justify-content-end gap-3">
                <button type="submit" class="btn nonactive" style="width: 13%;">Batal</button>
                <button type="submit" class="btn" style="width: 13%;">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
    <div class="content-ubah-password py-5">
      <h3 style="font-size: 150%; font-weight: bold;">Ubah Kata Sandi Anda</h3>
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-xl-12">
            <div class="card my-5" style="border-radius: 15px;">
              <div class="card-body">
                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-4 ps-5">
                      <h6 class="mb-0">Kata Sandi Lama</h6>
                    </div>
                    <div class="col-md-8 pe-5">
                      <input type="password" class="form-control form-control-lg" />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-md-4 ps-5">
                      <h6 class="mb-0">Kata Sandi Baru</h6>
                    </div>
                    <div class="col-md-8 pe-5">
                      <input type="password" class="form-control form-control-lg" />
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-md-4 ps-5">
                      <h6 class="mb-0">Konfirmasi Kata Sandi</h6>
                    </div>
                    <div class="col-md-8 pe-5">
                      <input type="password" class="form-control form-control-lg" />
                    </div>
                </div>
                <div class="px-5 py-4 d-flex justify-content-end gap-3">
                  <button type="submit" class="btn nonactive" style="width: 13%;">Batal</button>
                  <button type="submit" class="btn" style="width: 13%;">Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection('content')
