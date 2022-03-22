<?php
$title = "additional activity";
include "../include/header.php";
include "../include/data-collector.php";
?>

<div class=".container p-5 my-0 border">
    <form action="question6.php" method="post">

        <!-- 5 - Do you feel you do too little, just enough or way too much additional physical activity? - Range-->
        <br><!-- ajuste manual de linha-->
        <div class="text-right">
            <p>
            <h4><strong>Do you feel you do too little, just enough or way too much additional physical activity? </strong>
            </h4>
            </p>
        </div>


        <!-- Chantal Suggestion-->
        <input type="hidden" name="pageID" value="question5">
        <!-- Chantal Suggestion // Ends-->

        <!-- <label for="customRange3" class="form-label">Far too little</label>
                 <label for="customRange3" class="form-label middle">Just right</label>
                 <label for="customRange3" class="form-label float-end">Far too much</label>-->


        <div class="row align-items-start">

            <div class="col" style="text-align:left">
                Far too little
            </div>

            <div class="col" style="text-align:center">
                Just right
            </div>

            <div class="col" style="text-align:right">
                Far too much
            </div>

        </div>

        <div class="range">
            <input type="range" class="form-range" min="0" max="5" value="0" step="1" id="additionalactivityID" name="additionalactivity" />
        </div>

        <div>
            <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
        </div>

    </form>

</div>
<br>

<?php
include "../include/footer.php";
?>