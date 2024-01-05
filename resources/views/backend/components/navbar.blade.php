<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav h4">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item h4">
            <a class="nav-link" data-toggle="modal" data-target="#user-setting-modal" href="#" role="button">
                <i class="fas fa-users-cog"></i>
            </a>
        </li>
    </ul>
</nav>

<div class="modal fade" id="user-setting-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pengaturan Pengguna</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="row gap-3">
                        <div class="col-12 d-flex">
                            <a href="/admin/user/author/edit/{{encrypt(auth()->user()->id)}}" class="btn btn-outline-secondary">
                                <span class="fas fa-pen"></span><br>
                                Edit Data Akun
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="logoutBtn">Logout</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@push('scripts')
    <script>
        const token = $('meta[name="csrf-token"]').attr('content');
        $('#logoutBtn').on('click', function(){
            if(confirm('Apakah anda yakin akan mengakhiri sesi ?') ? endSession() : $('#user-setting-modal').modal('hide'));
        });
        function endSession(){
            $.ajax({
                url: '/admin/logout',
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN' : token
                },
                success: function(response){
                    window.location.href = '/admin';
                },
                error: function(error){
                    console.log(error.message);
                }
            });
        }
    </script>
@endpush
