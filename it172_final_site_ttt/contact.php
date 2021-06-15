<?php include 'includes/header_172.php'?>

    <form method="GET"  action="https//www.twentytwotoes.com/form.php" target "_blank" id="feedform">

    <h1>Feedback</h1>
        <div>
            <p>Feeback is a gift. Feel free to reach out with compliments, comments or ideas.</p>
        </div>
           
        <form id="flex">
               <!-- label ND UINPUT At 100% with margin -->
            <div class="fieldset"> 
                    <label for="name">*Name:</label>
                    <input type="text" id="name" required>
                    <span id="name-msg"> </span>
            </div>        

            <div class="fieldset"> 
                <label for="email">*Email:</label>
                <input type="text" id="email" name="email" required >
                <span id="email-msg"> </span>
            </div>  


            <div class="fieldset"> 

                <label for="feedback">Your Feedback:</label>
                <textarea id="feedback" name="feedback" rows="20" cols="50"></textarea>
                
            </div> 

            <div class="fieldset">
                <button type="submit">Submit</button>
            </div>

        </form>

</div>

   
    <script src="js/form.js"></script>


<?php include 'includes/footer_172.php'?>
