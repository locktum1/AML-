<button class="mt-[10rem] shadow-lg rounded-[15px] bg-white" onclick='DisplayPaymentInfo()'>
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-[30vw] h-[25vh] object-contain rounded-[15px]" draggable="false">
</button>

<script>
    function DisplayPaymentInfo(){
        console.log("hi");
        var paymentInfo = document.getElementById("payment-info");
        paymentInfo.classList.remove("hidden")
    }
</script>