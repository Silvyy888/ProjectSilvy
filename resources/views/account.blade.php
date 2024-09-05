<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Akun</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        .profile-header {
            background-color: #f8f9fa;
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-info {
            margin-left: 20px;
        }
        .profile-info h1 {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="profile-header text-center">
            <div class="d-flex justify-content-center">
                <img src="data:image/jpeg;base64,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" alt="Profile Picture" class="profile-picture">
            </div>
            <div class="d-flex justify-content-center profile-info">
                <div>
                    <h1>Piyy</h1>
                    <p>Email: pii@gmail.com</p>
                    <p>Phone: +123456789</p>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="text-center my-4">
            <a href="#" class="btn btn-primary">Edit Profile</a>
            <a href="/berjualan" class="btn btn-secondary">Mulai Berjualan</a>
            <a href="/dsbrdlogout" class="btn btn-danger">Logout</a>
        </div>

        <!-- Additional Content -->
        <div class="additional-info mt-4">
            <h3>Additional Information</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis vehicula neque, a imperdiet orci.</p>
        </div>
    </div>
</body>
</html>
