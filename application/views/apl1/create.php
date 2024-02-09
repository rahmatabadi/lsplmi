<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">
                            <?= $title ?>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    Bagian 1 Rincian Data Pemohon Sertifikasi
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">Pada bagian ini, cantumkan data pribadi, data
                                    pendidikan formal serta data pekerjaan anda pada saat ini.
                                    <h5 class="mt-3"> A. Data Pribadi </h5>
                                    <form>
                                        <div data-repeater-list="outer-group" class="outer">
                                            <div data-repeater-item class="outer">
                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Nama Lengkap</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="namaLengkap"
                                                            placeholder="Tuliskan Nama Lengkap">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">No KTP/NIK/Paspor</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="noIdentitas"
                                                            placeholder="Tuliskan No KTP/NIK/Paspor">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Tempat Lahir</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="tempatLahir"
                                                                    placeholder="Tuliskan Tempat Lahir">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Tanggal Lahir</label>
                                                            <div class="col-lg-10">
                                                                <input class="form-control" type="date" value=""
                                                                    id="tanggalLahir">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="col-lg-10">
                                                                <input class="form-check-input" type="radio"
                                                                    name="formRadios" id="formRadios1" checked>
                                                                <label class="form-check-label" for="formRadios1">
                                                                    Laki Laki
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="col-lg-10">
                                                                <input class="form-check-input" type="radio"
                                                                    name="formRadios" id="formRadios2">
                                                                <label class="form-check-label" for="formRadios2">
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Kebangsaan</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="kebangsaan"
                                                            placeholder="Tuliskan Kebangsaan">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Alamat Rumah</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="alamatRumah"
                                                            placeholder="Tuliskan Alamat Rumah">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Kode Pos</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="kodePos"
                                                            placeholder="Tuliskan Kode Pos">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">No Telepon Rumah</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="noRumah"
                                                                    placeholder="No Telepon Rumah">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">No Telepon Kantor</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="noKantor"
                                                                    placeholder="Tuliskan No Kantor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">No HP</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="noHP"
                                                                    placeholder="No HP">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email</label>
                                                            <div class="col-lg-10">
                                                                <input type="email" class="form-control" id="Email"
                                                                    placeholder="Tuliskan Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Kualifikasi
                                                        Pendidikan</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="pendidikan"
                                                            placeholder="Tuliskan Kualifikasi Pendidikan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <h5 class="mt-3"> B. Data Pekerjaan Sekarang </h5>
                                    <form>
                                        <div data-repeater-list="outer-group" class="outer">
                                            <div data-repeater-item class="outer">
                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Nama Institusi /
                                                        Perusahaan</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="namaIns"
                                                            placeholder="Tuliskan Nama Institusi / Perusahaan">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Jabatan</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="jabatan"
                                                            placeholder="Tuliskan Jabatan">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Alamat Kantor</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="alamatKantor"
                                                            placeholder="Tuliskan Alamat Kantor">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Kode Pos</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="kodePosKantor"
                                                            placeholder="Tuliskan Kode Pos">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">No Telepon</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control"
                                                                    id="noTelpKantor" placeholder="No Telepon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Fax</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="fax"
                                                                    placeholder="Tuliskan Fax">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Email</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="emailB"
                                                            placeholder="Tuliskan Email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>



                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button fw-medium collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Bagian 2 : Data Sertifikasi
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">Tuliskan Judul dan Nomor Skema Sertifikasi yang
                                    anda ajukan berikut Daftar Unit Kompetensi sesuai kemasan pada skema sertifikasi
                                    untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikan, pelatihan serta
                                    pengalaman kerja yang anda miliki.
                                    <form>
                                        <div data-repeater-list="outer-group" class="outer">
                                            <div data-repeater-item class="outer">
                                                <div class="form-group row mt-4">
                                                    <label class="form-label">Skema Sertifikasi </label>
                                                    <fieldset id="groupBagian2">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadiosBagian2" id="kkni">
                                                                    <label class="form-check-label"
                                                                        for="formRadiosBagian2">
                                                                        KKNI
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadiosBagian2" id="okupansi">
                                                                    <label class="form-check-label"
                                                                        for="formRadiosBagian2">
                                                                        Okupansi </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadiosBagian2" id="klaster">
                                                                    <label class="form-check-label"
                                                                        for="formRadiosBagian2">
                                                                        Klaster
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="form-group row mt-4">
                                                    <label class="col-form-label col-lg-2">Judul</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="judul"
                                                            placeholder="Tuliskan Judul">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Nomor</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="nomor"
                                                            placeholder="Tuliskan Nomor">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Tujuan Asesmen</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="asesmen"
                                                            placeholder="Tuliskan Tujuan Asesmen">
                                                    </div>
                                                </div>
                                                <h5 class="mt-3"> Daftar Unit Kompetensi sesuai kemasan: </h5>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row mb-2">
                                                                    <div class="col-sm-4">
                                                                        <!-- <div
                                                                            class="search-box me-2 mb-2 d-inline-block">
                                                                            <div class="position-relative">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Search...">
                                                                                <i
                                                                                    class="bx bx-search-alt search-icon"></i>
                                                                            </div>
                                                                        </div> -->
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="text-sm-end">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i
                                                                                    class="mdi mdi-plus me-1"></i>
                                                                                Tambah Unit Kompetensi</button>
                                                                        </div>
                                                                    </div><!-- end col-->
                                                                </div>

                                                                <div class="table-responsive">
                                                                    <table
                                                                        class="table align-middle table-nowrap table-check">
                                                                        <thead class="table-light">
                                                                            <tr>
                                                                                <th class="align-middle">No</th>
                                                                                <th class="align-middle">Kode Unit
                                                                                </th>
                                                                                <th class="align-middle">Judul Unit</th>
                                                                                <th class="align-middle">Jenis Standar
                                                                                </th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    1
                                                                                </td>
                                                                                <td><a href="javascript: void(0);"
                                                                                        class="text-body fw-bold">C.28LOG20.003.2</a>
                                                                                </td>
                                                                                <td>Menerapkan Prinsip-prinsip K3 di
                                                                                    Tempat Kerja</td>
                                                                                <td>
                                                                                    <select name="color" id="color">
                                                                                        <option value="1">Standar Khusus
                                                                                        </option>
                                                                                        <option value="2">Standar
                                                                                            International
                                                                                        </option>
                                                                                        <option value="3">SKKNI
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <ul
                                                                    class="pagination pagination-rounded justify-content-end mb-2">
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="javascript: void(0);"
                                                                            aria-label="Previous">
                                                                            <i class="mdi mdi-chevron-left"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="javascript: void(0);">1</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="javascript: void(0);">2</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="javascript: void(0);">3</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="javascript: void(0);">4</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="javascript: void(0);">5</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="javascript: void(0);"
                                                                            aria-label="Next">
                                                                            <i class="mdi mdi-chevron-right"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button fw-medium collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    Bagian 3 : Bukti Kelengkapan Pemohon
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-muted">
                                    <h5 class="mt-3"> Bukti Persyaratan Pemohon </h5>
                                    <form>
                                        <div data-repeater-list="outer-group" class="outer">
                                            <div data-repeater-item class="outer">
                                                <div class="form-group row mb-4">
                                                    <label class="form-label">1. Fotokopi ijazah terakhir </label>
                                                    <fieldset id="group1">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios" id="memenuhi1">
                                                                    <label class="form-check-label" for="formRadios1">
                                                                        Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios" id="tidakmemenuhi1">
                                                                    <label class="form-check-label" for="formRadios2">
                                                                        Ada Tidak Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios" id="tidakada1">
                                                                    <label class="form-check-label" for="formRadios2">
                                                                        Tidak Ada
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="form-label">2. Fotokopi sertifikat pelatihan berbasis
                                                        kompetensi mengenai pengoperasian mesin bubut dasar </label>
                                                    <fieldset id="group2">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios2" id="memenuhi2">
                                                                    <label class="form-check-label" for="formRadios2">
                                                                        Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios2" id="tidakmemenuhi2">
                                                                    <label class="form-check-label" for="formRadios2">
                                                                        Ada Tidak Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios2" id="tidakada2">
                                                                    <label class="form-check-label" for="formRadios2">
                                                                        Tidak Ada
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="form-label">3. Surat keterangan pengalaman kerja
                                                        mengoperasikan mesin bubut dasar minimal 1 (satu) tahun.
                                                    </label>
                                                    <fieldset id="group3">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios3" id="memenuhi3">
                                                                    <label class="form-check-label" for="formRadios3">
                                                                        Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios3" id="tidakmemenuhi3">
                                                                    <label class="form-check-label" for="formRadios3">
                                                                        Ada Tidak Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios3" id="tidakada3">
                                                                    <label class="form-check-label" for="formRadios3">
                                                                        Tidak Ada
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="form-label">4. Pas poto ukuran 4x3 sebanyak 2 buah
                                                    </label>
                                                    <fieldset id="group4">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios4" id="memenuhi4">
                                                                    <label class="form-check-label" for="formRadios4">
                                                                        Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios4" id="tidakmemenuhi4">
                                                                    <label class="form-check-label" for="formRadios4">
                                                                        Ada Tidak Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios4" id="tidakada4">
                                                                    <label class="form-check-label" for="formRadios4">
                                                                        Tidak Ada
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="form-label">5. Fotokopi identitas diri</label>
                                                    <fieldset id="group5">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios5" id="memenuhi5">
                                                                    <label class="form-check-label" for="formRadios5">
                                                                        Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios5" id="tidakmemenuhi5">
                                                                    <label class="form-check-label" for="formRadios5">
                                                                        Ada Tidak Memenuhi Syarat
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios5" id="tidakada5">
                                                                    <label class="form-check-label" for="formRadios5">
                                                                        Tidak Ada
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Nama Pemohon /
                                                        Kandidat</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="namaPemohon"
                                                            placeholder="Tuliskan Nama Pemohon">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Nama Admin LSP</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="namaAdminLSP"
                                                            placeholder="Tuliskan Nama Admin">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">No. Registrasi</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="noReg"
                                                            placeholder="Tuliskan No Registrasi">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="form-label">Berdasarkan ketentuan persyaratan dasar,
                                                        maka pemohon: _______________ sebagai peserta
                                                        sertifikasi</label>
                                                    <fieldset id="group6">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios6" id="diterima">
                                                                    <label class="form-check-label" for="formRadios6">
                                                                        Diterima
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <div class="col-lg-10">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="formRadios6" id="tidakDiterima">
                                                                    <label class="form-check-label" for="formRadios6">
                                                                        Tidak Diterima
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label col-lg-2">Catatan</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" id="catatan"
                                                            placeholder="Tuliskan Catatan">
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end accordion -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="page-title-right">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!-- end row -->




        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


</div>
<!-- end main content-->

<script>
$(document).ready(function($) {
    $(document).on('click', '#process', function() {
        var name = $("#accountNameM").val();
        var dueDate = $("#dueDateM").val();

        if (name != null && name !== "") {
            if (dueDate != null && dueDate !== "") {
                $.ajax({
                    url: "masterAccount/createAccount",
                    type: 'post',
                    dataType: 'json',
                    data: {
                        "name": name,
                        "duedate": dueDate,
                        "_token": "{{ csrf_token() }}"
                    },

                    success: function(result) {
                        console.log(result);
                        if (result.success) {
                            location.reload();
                        } else {
                            alert(result.error);
                            //location.reload();
                        }
                    }
                });
            } else {
                alert('Your due date is empty, please fill it in first');
            }
        } else {
            alert('Your account name is empty, please fill it in first');
        }
    });

    $(document).on('click', '#detailCategory', function() {
        name = $(this).attr('data-nameMV');
        desc = $(this).attr('data-descMV');
        tname = $(this).attr('data-tnameMV');

        $('#categoryNameMV').val(name);
        $('#categoryDescMV').val(desc);
        $('#departementNameMV').val(tname);
    });

    $(document).on('click', '#updateCategory', function() {
        id = $(this).attr('data-idMU');
        name = $(this).attr('data-nameMU');
        desc = $(this).attr('data-descMU');
        departementId = $(this).attr('data-didMU');

        $('#categoryIdMU').val(id);
        $('#categoryNameMU').val(name);
        $('#categoryDescMU').val(desc);
        document.getElementById('departementSelectMU').value = departementId;
    });

    $(document).on('click', '#updateProcess', function() {
        var id = $('#categoryIdMU').val();
        var name = $("#categoryNameMU").val();
        var desc = $("#categoryDescMU").val();
        var departementId = $("#departementSelectMU").val();

        if (name != null && name !== "") {
            if (desc != null && desc !== "") {
                if (departementId != null && departementId !== "") {
                    $.ajax({
                        url: "masterComplaint/updateComplaint",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "name": name,
                            "desc": desc,
                            "departementId": departementId,
                            "_token": "{{ csrf_token() }}"
                        },

                        success: function(result) {
                            console.log(result);
                            if (result.success) {
                                location.reload();
                            } else {
                                alert(result.error);
                                //location.reload();
                            }
                        }
                    });
                } else {
                    alert('Your departement is empty, please fill it in first');
                }
            } else {
                alert('Your category desc is empty, please fill it in first');
            }
        } else {
            alert('Your category name is empty, please fill it in first');
        }
    });

    $(document).on('click', '#deleteEmployee', function() {
        id = $(this).attr('data-idMD');

        $('#idMD').val(id);
    });

    $(document).on('click', '#deleteMD', function() {
        var id = $("#idMD").val();

        if (id != null && id !== "") {
            $.ajax({
                url: "masterComplaint/deleteComplaint",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}"
                },

                success: function(result) {
                    console.log(result);
                    if (result.success) {
                        location.reload();
                    } else {
                        alert(result.error);
                        //location.reload();
                    }
                }
            });
        } else {
            alert('Your id is empty');
        }
    });
});
</script>