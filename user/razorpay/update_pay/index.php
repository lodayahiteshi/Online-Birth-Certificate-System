<link rel="stylesheet" href="index.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<center>
    <h2>Payment for Updating Birth Certificate</h2><br><br>
    <form>
        <label for="name">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="textbox" name="name" id="name" placeholder="Enter your name" required="" /><br /><br><br>
        <label for="amt">Amount</label>&nbsp;&nbsp;&nbsp;
        <input type="textbox" name="amt" id="amt" placeholder="Enter amt" value="100" readonly /><br /><br /><br><br>
        <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()" />
    </form>
</center>

<script>
    function pay_now() {
        var name = jQuery('#name').val();
        var amt = jQuery('#amt').val();

        jQuery.ajax({
            type: 'post',
            url: 'payment_process.php',
            data: "amt=" + amt + "&name=" + name,
            success: function(result) {
                var options = {
                    "key": "rzp_test_F243nYvNgCmAZN",
                    "amount": amt * 100,
                    "currency": "INR",
                    "name": "Birth Certificate Corp",
                    "description": "Update Certificate Transaction",
                    "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ8Lfk8AcpPqkx-WliKjWcg-hACkOP9LN1qA&usqp=CAU",
                    "handler": function(response) {
                        jQuery.ajax({
                            type: 'post',
                            url: 'payment_process.php',
                            data: "payment_id=" + response.razorpay_payment_id,
                            success: function(result) {
                                window.location.href = "thank_you.php";
                            }
                        });
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            }
        });


    }
</script>