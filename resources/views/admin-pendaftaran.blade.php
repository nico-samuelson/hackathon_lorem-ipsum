@extends("layouts.admin")

@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<style>
    #tabel-pendaftar_wrapper {
        width: calc(100% - 80px);
        float: right;
    }

    #tabel-pendaftar_length select {
        width: 50px;
    }

    @media (max-width: 768px) {
        #tabel-pendaftar_wrapper {
            width: 100%;
            float: none;
        }
    }
</style>
@endsection

@section("content")
<section>
    <div class="overflow-x-auto">
        <table id="tabel-pendaftar" class="table-auto overflow-scroll w-full min-w-[800px]">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Foto KTP</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($members as $member): ?>
                    <tr>
                        <td><?= $member['nama'] ?></td>
                        <td><?= $member['alamat'] ?></td>
                        <td><?= $member['no_hp'] ?></td>
                        <td><?= $member['email'] ?></td>
                        <td><?= $member['username'] ?></td>
                        <td><a href="http://" target="_blank" rel="noopener noreferrer"></a></td>
                        <td><?= $member['status'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel-pendaftar').DataTable();
    });
</script>
@endsection