<?php
$title = "meals";
include "../include/header.php";
include "../include/data-collector.php";
?>

<div class=".container p-5 my-0 border">
    <form action="../result.php" method="post">

        <!-- 9 -  On a typical day, how many of your meals are microwaved or prepared? - Number-->
        <br><!-- ajuste manual de linha-->
        <div class="text-right">
            <p>
            <h4><strong>On a typical day, how many of your meals are microwaved or prepared? </strong>
            </h4>
            </p>
        </div>

        <!-- Chantal Suggestion-->
        <input type="hidden" name="pageID" value="question9">
        <!-- Chantal Suggestion // Ends-->


        <!--https://mdbootstrap.com/docs/standard/forms/input-fields/-->
        <div class="col-md-1">
            <div class="form-outline">
                <input type="number" id="mealsID" name="meals" min="1" class="form-control" />
                <label class="form-label" for="mealsID"></label>
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