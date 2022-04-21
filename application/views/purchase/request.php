<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="git-pull-request"></i></div>
                            Purchase Requisition
                        </h1>
                        <div class="page-header-subtitle">PR (Purchase Requisition) adalah pengajuan pembelian untuk pengadaan barang.</div>
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
            <div class="card-header">List</div>
            <div class="card-body">
                <div class="table-responsive-md">
                    <table id="datatables" class="table table-striped table-bordered table-sm text-sm text-center">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>No</th>
                                <th>Kode</th>
                                <th>Tanggal</th>
                                <th>Dari</th>
                                <th>Pemohon</th>
                                <th>Cost Center</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PR-202204-066</td>
                                <td>2022/04/05</td>
                                <td>IT</td>
                                <td>1910259503 - Adam Rachman</td>
                                <td>301203 - Information System</td>
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