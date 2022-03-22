<?php
$title = "physical activity";
include "../include/header.php";
include "../include/data-collector.php";
?>


<div class=".container p-5 my-0 border">
    <form action="question4.php" method="post">

        <!-- 3 - How important is physical activity to you? - Range-->
        <br><!-- ajuste manual de linha-->
        <div class="text-right">
            <p><strong>
                    <h4>How important is physical activity to you? </h4>
                </strong>
            </p>
        </div>

        <!-- Chantal Suggestion-->
        <input type="hidden" name="pageID" value="question3">
        <!-- Chantal Suggestion // Ends-->


        <label for="question3" class="form-label">Not at all important</label>
        <label for="question3" class="form-label float-end">Very important</label>

        <div class="range">
            <input type="range" class="form-range" min="0" max="5" value="0" step="1" id="physicalActivityID" name="physicalactivity" />
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