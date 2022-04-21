<style>
    #foto-pegawai {
        width: 150px !important;
        height: 200px !important;
    }

    #img-foto-pegawai {
        width: 190px !important;
        height: 200px !important;
    }

    thead input {
        width: 100%;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="server"></i></div>
                            Pegawai
                        </h1>
                        <div class="page-header-subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
                <nav class="mt-4 rounded" aria-label="breadcrumb">
                    <ol class="breadcrumb px-3 py-2 rounded mb-0">
                        <li class="breadcrumb-item"><a href="#">...</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="card card-header-actions">
            <div class="card-header">Pegawai <button class="btn btn-primary btn-sm" id="btn-add"><i data-feather="plus"></i>Add New</button></div>
            <div class="card-body">
                <div class="table-responsive-md">
                    <table id="datatables" class="table table-striped table-bordered table-sm text-sm text-center">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>No</th>
                                <th>Foto</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td class="text-center">1</td>
                                <td class="text-center">
                                    <div class="avatar avatar-xxl"><img src="https://i.pravatar.cc/300" class="avatar-img border border-success img-fluid mx-auto d-block" alt="foto-pegawai"></div>
                                </td>
                                <td>1910259503</td>
                                <td>Adam Rachman</td>
                                <td>Malang, 30 Maret 1995</td>
                                <td>L</td>
                                <td>Arga Park Residence Kav 2 Malang</td>
                                <td>082264361579</td>
                                <td class="text-nowrap text-center">
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" onclick="updateEmployeeDialog()"><i data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" onclick="deleteEmployee()"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>

                            <tr class="align-middle">
                                <td class="text-center">1</td>
                                <td class="text-center">
                                    <div class="avatar avatar-xxl"><img src="https://i.pravatar.cc/300" class="avatar-img border border-success img-fluid mx-auto d-block" alt="foto-pegawai"></div>
                                </td>
                                <td>1910259503</td>
                                <td>Moh Sochron</td>
                                <td>Tuban, 25 Februari 1995</td>
                                <td>L</td>
                                <td>Jl Raya Bandulan Gang 1 A</td>
                                <td>082264361579</td>
                                <td class="text-nowrap text-center">
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" onclick="updateEmployeeDialog()"><i data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" onclick="deleteEmployee()"><i data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('components/modal_static') ?>

<script>
    var modal = new bootstrap.Modal(document.getElementById('modal'));

    const btnAdd = document.getElementById('btn-add');
    btnAdd.addEventListener('click', event => {
        addEmployeeDialog();
    })
</script>

<script>
    function addEmployeeDialog() {
        var dialog = $('.modal-dialog');

        // large modal
        dialog.addClass("modal-xl");

        var title = '';
        title += 'Tambah Pegawai';
        document.getElementById("modal-title").innerHTML = title;

        var body = '';
        body += '<form id="form-add-employee">';
        body += '<div class="mb-3">';

        body += '<div class="row">';

        body += '<div class="col-lg-8">';
        body += '<div class="row">';

        // nip
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">NIP</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" required>';
        body += '</div>';
        body += '</div>';

        // nama pegawai
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Nama Pegawai</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" required>';
        body += '</div>';
        body += '</div>';

        // tempat lahir
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="tempat-lahir">Tempat Lahir</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" required>';
        body += '</div>';
        body += '</div>';

        // tanggal lahir
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Tanggal Lahir</label>';
        body += '<input class="form-control form-control-solid form-control-sm" id="birth-date" type="text" required>';
        body += '</div>';
        body += '</div>';

        // jenis kelamin
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Tanggal Lahir</label>';
        body += '<div class="form-check">';
        body += '<input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" checked>';
        body += '<label for="date">Laki-Laki</label>';
        body += '</div>';
        body += '<div class="form-check">';
        body += '<input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">';
        body += '<label for="date">Perempuan</label>';
        body += '</div>';
        body += '</div>';
        body += '</div>';

        // alamat
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="alamat">Alamat</label>';
        body += '<textarea class="form-control form-control-solid form-control-sm" id="alamat" required></textarea>';
        body += '</div>';
        body += '</div>';

        // Agama
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Agama</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" required>';
        body += '</div>';
        body += '</div>';

        // No HP
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">No. HP</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="number" required>';
        body += '</div>';
        body += '</div>';

        // Separator
        body += '<div class="col-12 my-2">';
        body += '<hr>';
        body += '</div>';

        // Username
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Username</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" required>';
        body += '</div>';
        body += '</div>';

        // Email
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Email</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="email" required>';
        body += '</div>';
        body += '</div>';

        // Password
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Password</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="password" required>';
        body += '</div>';
        body += '</div>';

        // Password Confirm
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Confirm Password</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="password" required>';
        body += '</div>';
        body += '</div>';

        body += '</div>';
        body += '</div>';

        // foto pegawai
        body += '<div class="col-lg-4">';

        body += '<div class="form-group">';
        body += '<label for="date">Status Pegawai</label>';
        body += '<select class="form-select form-control-solid form-select-sm" required>';
        body += '<option value="Aktif">Aktif</option>';
        body += '<option value="Non Aktif">Non Aktif</option>';
        body += '<option value="Pending">Pending</option>';
        body += '</select>';
        body += '</div>';

        body += '<div class="form-group">';
        body += '<label for="date">Foto Pegawai</label>';
        body += '<input class="form-control form-control form-control-sm" type="file">';
        body += '</div>';

        body += '<img src="https://dummyimage.com/300x300/fff/aaa" id="img-foto-pegawai" class="img-thumbnail rounded mx-auto d-block mt-3" alt="foto-pegawai">';

        body += '</div>';

        body += '</div>';

        body += '</div>';
        body += '</form>';
        document.getElementById("modal-body").innerHTML = body;

        litepickerRange($('#birth-date'));

        var footer = '';
        footer += '<button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button><button class="btn btn-primary btn-sm" type="button" onclick="btnAddEmployee()">Simpan</button>';
        document.getElementById("modal-footer").innerHTML = footer;

        modal.toggle();
    }

    function btnAddEmployee() {
        var forms = $('#form-add-employee');
        var validated = bsValidation(forms);
        var btn = $(this);

        if (validated) {

        }
    }

    function updateEmployeeDialog() {
        var modal = new bootstrap.Modal(document.getElementById('modal'));
        var dialog = $('.modal-dialog');

        // large modal
        dialog.addClass("modal-xl");

        var title = '';
        title += 'Tambah Pegawai';
        document.getElementById("modal-title").innerHTML = title;

        var body = '';
        body += '<form id="form-edit-employee">';
        body += '<div class="mb-3">';

        body += '<div class="row">';

        body += '<div class="col-lg-8">';
        body += '<div class="row">';

        // nip
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">NIP</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" value="1910259503">';
        body += '</div>';
        body += '</div>';

        // nama pegawai
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Nama Pegawai</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" value="Adam Rachman">';
        body += '</div>';
        body += '</div>';

        // tempat lahir
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="tempat-lahir">Tempat Lahir</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" value="Malang">';
        body += '</div>';
        body += '</div>';

        // tanggal lahir
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Tanggal Lahir</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" value="1995/03/30">';
        body += '</div>';
        body += '</div>';

        // jenis kelamin
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Tanggal Lahir</label>';
        body += '<div class="form-check mt-1">';
        body += '<input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" checked>';
        body += '<label for="date">Laki-Laki</label>';
        body += '</div>';
        body += '<div class="form-check">';
        body += '<input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan">';
        body += '<label for="date">Perempuan</label>';
        body += '</div>';
        body += '</div>';
        body += '</div>';

        // alamat
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="alamat">Alamat</label>';
        body += '<textarea class="form-control form-control-solid form-control-sm" id="alamat">Arga Park Residence Kav 2 Malang</textarea>';
        body += '</div>';
        body += '</div>';

        // Agama
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Agama</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" value="Islam">';
        body += '</div>';
        body += '</div>';

        // No HP
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">No. HP</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="tel" value="082264361579">';
        body += '</div>';
        body += '</div>';

        // Separator
        body += '<div class="col-12 my-2">';
        body += '<hr>';
        body += '</div>';

        // Username
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Username</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="text" value="adamprimera">';
        body += '</div>';
        body += '</div>';

        // Email
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Email</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="email" value="adam@pt-bks.com">';
        body += '</div>';
        body += '</div>';

        // Password
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Password</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="password" value="12345678">';
        body += '</div>';
        body += '</div>';

        // Password Confirm
        body += '<div class="col-md-6">';
        body += '<div class="form-group">';
        body += '<label for="date">Confirm Password</label>';
        body += '<input class="form-control form-control-solid form-control-sm" type="password" value="12345678">';
        body += '</div>';
        body += '</div>';

        body += '</div>';
        body += '</div>';

        // foto pegawai
        body += '<div class="col-lg-4">';

        body += '<div class="form-group">';
        body += '<label for="date">Status Pegawai</label>';
        body += '<select class="form-select form-control-solid form-select-sm">';
        body += '<option value="Aktif">Aktif</option>';
        body += '<option value="Non Aktif">Non Aktif</option>';
        body += '<option value="Pending">Pending</option>';
        body += '</select>';
        body += '</div>';

        body += '<div class="form-group">';
        body += '<label for="date">Foto Pegawai</label>';
        body += '<input class="form-control form-control form-control-sm" type="file">';
        body += '</div>';

        body += '<img src="https://i.pravatar.cc/300" id="img-foto-pegawai" class="img-thumbnail rounded mx-auto d-block mt-3" alt="foto-pegawai">';

        body += '</div>';

        body += '</div>';

        body += '</div>';
        body += '</form>';
        document.getElementById("modal-body").innerHTML = body;

        var footer = '';
        footer += '<button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button><button class="btn btn-primary btn-sm" type="button" onclick="btnEditEmployee()">Simpan</button>';
        document.getElementById("modal-footer").innerHTML = footer;

        modal.toggle();
    }

    function btnEditEmployee() {
        var forms = $('#form-edit-employee');
        var validated = bsValidation(forms);
        var btn = $(this);

        if (validated) {

        }
    }

    function deleteEmployee() {
        confirmDialog({
            title: "Hapus Data",
            html: "Apakah anda yakin ingin menghapus pegawai dengan <strong>NIP: 1910259503</strong> ?",
            confirmColor: "#d73f30",
            cancelColor: "#c5ccd6",
            confirmText: "Hapus Pegawai",
            cancelText: "Batal"
        }).then((result) => {
            console.log(result);
        })
    }
</script>

<script>
    function loadTable() {
        $('#datatables').DataTable({
            orderCellsTop: true,
        });
    }
    $(document).ready(function() {
        loadTable();
    });
</script>