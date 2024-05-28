<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('user') ?>">User</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>

        <form action="<?php echo site_url("user/save") ?>" method="post">
            <div class="mb-3">
                <label for="" class="form-label">NIK <code>*</code></label>
                <input name="nik" type="text" class="form-control" id="" placeholder="NIK" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Username <code>*</code></label>
                <input name="username" type="text" class="form-control" id="" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Full Name <code>*</code></label>
                <input name="full_name" type="text" class="form-control" id="" placeholder="Full Name" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone <code>*</code></label>
                <input name="phone" type="text" class="form-control" id="" placeholder="Phone" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email <code>*</code></label>
                <input name="email" type="email" class="form-control" id="" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat <code>*</code></label>
                <input name="address" type="text" class="form-control" id="" placeholder="Alamat" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password <code>*</code></label>
                <input name="password" type="password" class="form-control" id="" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Role <code>*</code></label>
                <input name="role" class="form-control" list="datalistOptions" id="role" placeholder="Tekan Untuk Memilih Role..." required>
                <datalist id="datalistOptions">
                    <option value="Pemilik">
                    <option value="Admin">
                    <option value="Kasir">
                </datalist>
            </div>
            <div class="d-flex justify-content-end">

                <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Add</button>
            </div>
        </form>


    </div>
</main>