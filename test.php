


<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_wNMdT8Wr27usMV", // Enter the Key ID generated from the Dashboard
    "amount": "100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Pay Now",
    "description": "Money Transaction",
    "image": "https://media.istockphoto.com/vectors/vector-illustration-of-red-heart-3d-effect-thank-you-donor-lettering-vector-id1303075544?k=20&m=1303075544&s=612x612&w=0&h=xwyyYMAe34hPEPvWEkchnM8YWY_w_bmi4tCJx3aYjoI=",
    //"order_id": "order_9A33XWu170gUtm",
    //"acount_id": "acc_Ef7ArAsdU5t0xl", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response)
    {
        
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature);

    }
    };
    
var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e)
{
    rzp1.open();
    e.preventDefault();
}
</script>
