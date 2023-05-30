<!-- //top up buttonm -->
<button onclick="topFunction()" id="topUpButton" title="Go to top">^</button>
<footer class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 mt-5 border-bottom" style="border-top: 3px solid !important;border-bottom: 3px solid !important;">
    <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg xmlns="images/house.svg" fill="currentColor" width="50" height="50" class="bi bi-house-heart" viewBox="0 0 16 16">
            <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z" />
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
        </svg>
    </a>

    <h6 id="ownerName" class="text-center"><a href="https://www.linkedin.com/in/adarsh-mishra-469811205/" style="text-decoration: none;color:black;" target="_blank"> All Rights Reserved At Adarsh Siddharthshankar Mishra</a></h6>

    <div class="col-md-3 text-end">
        <a href="index.php" class="btn btn-outline-primary me-2">Home</a>
    </div>
</footer>
</div>

<!-- Bootstrap Js -->
<script src="js/bootstrap.min.js?v<?php echo rand(); ?>"></script>
<script>
    //for top up option
    let topUpButton = document.getElementById("topUpButton");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            topUpButton.style.display = "block";
        } else {
            topUpButton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
</body>

</html>