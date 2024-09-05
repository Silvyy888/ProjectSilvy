<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <style>
        .checkout-header {
            background-color: pink;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 0.25rem 0.25rem 0 0;
        }
        .checkout-section {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            background-color: #f8f9fa;
        }
        .btn-custom {
            background-color: pink;
            color: white;
        }
        .btn-custom:hover {
            background-color: palevioletred;
            color: white;
        }
        .summary-section {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            background-color: #ffffff;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="checkout-header">
        <h1>Checkout</h1>
    </div>

    <div class="row mt-4">
        <div class="col-md-8">
            <div class="checkout-section">
                <h4>Billing Information</h4>
                <form>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="address">Shipping Address</label>
                        <textarea class="form-control" id="address" rows="3" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="card">Credit Card Number</label>
                        <input type="text" class="form-control" id="card" placeholder="Enter your card number">
                    </div>
                    <button type="submit" class="btn btn-custom">Proceed to Payment</button>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="summary-section p-3">
                <h4>Order Summary</h4>
                <ul class="list-unstyled">
                    <li><strong>Product 1:</strong> $50.00</li>
                    <li><strong>Product 2:</strong> $30.00</li>
                    <li><strong>Shipping:</strong> $5.00</li>
                    <li><strong>Total:</strong> $85.00</li>
                </ul>
                <button type="button" class="btn btn-custom btn-block">Confirm Order</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
