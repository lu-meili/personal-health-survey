<?php
$title = "vegetable snack";
include "../include/header.php";
include "../include/data-collector.php";
?>

<div class=".container p-5 my-0 border">
    <form action="question8.php" method="post">

        <!-- 8 -  On a typical day, how many of your meals or snacks contain vegetables?  - Number-->
        <br><!-- ajuste manual de linha-->
        <div class="text-right">
            <p>
            <h4><strong>On a typical day, how many of your meals or snacks contain vegetables? </strong>
            </h4>
            </p>
        </div>

        <!-- Chantal Suggestion-->
        <input type="hidden" name="pageID" value="question7">
        <!-- Chantal Suggestion // Ends-->


        <!--https://mdbootstrap.com/docs/standard/forms/input-fields/-->
        <div class="col-md-1">
            <div class="form-outline">
                <input type="number" id="snackvegetableID" name=snackvegetable min="1" class="form-control" />
                <label class="form-label" for="snackvegetableID"></label>
            </div>
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