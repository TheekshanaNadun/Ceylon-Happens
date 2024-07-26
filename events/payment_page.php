<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }
        .payment-form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="payment-form">
        <h2>Event Payment</h2>
        <form id="payment-form">
            <div class="form-group">
                <label for="card-element">Credit or debit card</label>
                <div id="card-element"></div>
                <div id="card-errors" role="alert"></div>
            </div>
            <div class="form-group">
                <button type="submit">Submit Payment</button>
            </div>
        </form>
    </div>

    <script>
        var stripe = Stripe('pk_test_51PgRrPHvzim763YPamkVSV2GTtgXZntbtguBznEQVMfWCy7heL6LkBCsStrQNZUH758PHdQsDRpMPr4IxfFRUlbV008l4L1kyh');
        var elements = stripe.elements();

        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        var card = elements.create('card', {style: style});
        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createPaymentMethod({
                type: 'card',
                card: card,
            }).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    handlePaymentMethod(result.paymentMethod.id);
                }
            });
        });

        function handlePaymentMethod(paymentMethodId) {
            fetch('create_payment_intent.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    payment_method: paymentMethodId,
                }),
            }).then(function(result) {
                return result.json();
            }).then(function(response) {
                if (response.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = response.error;
                } else {
                    window.location.href = 'success.php';
                }
            });
        }
    </script>
</body>
</html>
