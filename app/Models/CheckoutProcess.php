<?php

namespace Midtrans;

require_once dirname(__FILE__) . '/../../Midtrans.php';
//Set Your server key
Config::$serverKey = "<SB-Mid-server-G4g6pVW90DSd7Bn9x9nwADvO>";
// Uncomment for production environment
// Config::$isProduction = true;
Config::$isSanitized = Config::$is3ds = true;

// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => 94000, // no decimal allowed for creditcard
);
// Optional
$item_details = array(
    array(
        'id' => '1202173222',
        'price' => 100000,
        'quantity' => 1,
        'name' => ""
    ),
);
// Optional
$customer_details = array(
    'first_name'    => "Dimas Aji",
    'last_name'     => "Wiratama",
    'email'         => "dimasjiwr@gmail.com",
    'phone'         => "217266423",
    'billing_address'  => $billing_address,
    'shipping_address' => $shipping_address
);
// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snapToken = Snap::getSnapToken($transaction);
echo "snapToken = " . $snapToken;
?>

<!DOCTYPE html>
<html>

<body>
    <button id="pay-button">Bayar</button>
    <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<Set your ClientKey here>"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('<?php echo $snapToken ?>');
        };
    </script>
</body>

</html>