<?php
$title = "how healthy";
include "../include/header.php";
?>

<div class=".container p-5 my-0 border">
    <form action="question2.php" method="post">

        <!-- 1 - How healthy are you physically? - Range-->
        <br><!-- ajuste manual de linha-->
        <div class="text-right">
            <p>
            <h4><strong>How healthy are you physically? </strong>
            </h4>
            </p>
        </div>

        <!-- Chantal Suggestion-->
        <input type="hidden" name="pageID" value="question1">
        <!--- name and value that appears in $_POST // Array-->
        <!-- Chantal Suggestion // Ends-->

        <label for="question1" class="form-label">Not at all healthy</label>
        <label for="question1" class="form-label float-end">Extremely healthy</label>

        <div class="range">
            <input type="range" class="form-range" min="0" max="5" value="0" step="1" id="howHealthyID" name="howhealthy" />
            <!--- change id and name (name attribute)-->
        </div>

        <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
    </form>
</div>

<br>

<?php
include "../include/footer.php";
?>