<?php
$title = "supplements";
include "../include/header.php";
include "../include/data-collector.php";
?>

<div class=".container p-5 my-0 border">
    <form action="question3.php" method="post">

        <!-- 2 - Do you take nutritional supplements? - Radio-->

        <div class="row col-6">
            <h4 class="fw-bold text-center mt-3"></h4>

            <form class=" bg-white px-4" action="">

                <p class="fw-bold">
                <h4>
                    <strong>Do you take nutritional supplements? </strong>
                </h4>
                </p>

                <!-- Chantal Suggestion-->
                <input type="hidden" name="pageID" value="question2">
                <!-- Chantal Suggestion // Ends-->

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="supplements" id="supplementsYesID" value="1" />
                    <label class="form-check-label" for="supplementsYesID">
                        <!--for= ativa o botaozinho do radio-->
                        Yes
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="supplements" id="supplementsNoID" value="0" />
                    <label class="form-check-label" for="supplementsNoID">
                        <!--for= ativa o botaozinho do radio-->
                        No
                    </label>
                </div><br>

                <div>
                    <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
                </div>

            </form>

        </div>


    </form>
</div>
<br>

<?php
include "../include/footer.php";
?>