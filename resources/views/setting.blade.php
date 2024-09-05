<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Page</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        .settings-header {
            background-color: #343a40;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 0.25rem 0.25rem 0 0;
        }
        .settings-section {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            background-color: #f8f9fa;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #495057;
            color: white;
        }
        .btn-custom:hover {
            background-color: #343a40;
            color: white;
        }
        .form-group label {
            font-weight: bold;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgb(255, 1, 86);
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: rgb(255, 62, 94);
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">NAMA TOKO</h4>
        <a href="/dsbrberanda">Beranda</a>
        <a href="/produk">Produk</a>
        <a href="/pesanan">Pesanan</a>
        {{-- <a href="#">Pengguna</a> --}}
        {{-- <a href="#">Laporan</a> --}}
        <a href="/dsbrdset">Pengaturan</a>
        <a href="/dsbrdlogout">LogOut</a>
    </div>

<div class="container mt-5" style="margin-right: 50px; width: 70%">
    <div class="settings-header">
        <h1>Settings</h1>
    </div>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#profile" class="list-group-item list-group-item-action active" data-toggle="list">Profile</a>
                <a href="#account" class="list-group-item list-group-item-action" data-toggle="list">Account</a>
                <a href="#privacy" class="list-group-item list-group-item-action" data-toggle="list">Privacy</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <!-- Profile Section -->
                <div class="tab-pane fade show active" id="profile">
                    <div class="settings-section">
                        <h4>Profile Settings</h4>
                        <form>
                            <div class="form-group">
                                <label for="username">Nama Toko</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="profile-pic">Profile Picture</label>
                                <input type="file" class="form-control-file" id="profile-pic">
                            </div>
                            <button type="submit" class="btn btn-custom">Save Changes</button>
                        </form>
                    </div>
                </div>
                <!-- Account Section -->
                <div class="tab-pane fade" id="account">
                    <div class="settings-section">
                        <h4>Account Settings</h4>
                        <form>
                            <div class="form-group">
                                <label for="password">Change Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter new password">
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm new password">
                            </div>
                            <button type="submit" class="btn btn-custom">Update Password</button>
                        </form>
                    </div>
                </div>
                <!-- Privacy Section -->
                <div class="tab-pane fade" id="privacy">
                    <div class="settings-section">
                        <h4>Privacy Settings</h4>
                        <form>
                            <div class="form-group">
                                <label for="data-sharing">Data Sharing</label>
                                <select class="form-control" id="data-sharing">
                                    <option>Public</option>
                                    <option>Friends Only</option>
                                    <option>Private</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="two-factor">Two-Factor Authentication</label>
                                <select class="form-control" id="two-factor">
                                    <option>Enabled</option>
                                    <option>Disabled</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-custom">Save Privacy Settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
