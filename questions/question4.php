<?php
$title = "no additional activity";
include "../include/header.php";
include "../include/data-collector.php";
?>


<div class=".container p-5 my-0 border">
    <form action="question5.php" method="post">

        <!-- 4 - What additional physical activity do you do most? - Radio-->
        <div class="row col-6">
            <h4 class="fw-bold text-center mt-3"></h4>
            <form class=" bg-white px-4" action="">
                <p class="fw-bold">
                <h4><strong>What additional physical activity do you do most?</strong></h4>
                </p>

                <!-- Chantal Suggestion-->
                <input type="hidden" name="pageID" value="question4">
                <!-- Chantal Suggestion // Ends-->

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="noadditional" id="NoAdditionalID" value=" noAdditional" />
                    <label class="form-check-label" for="NoAdditionalID">
                        No additional physical activity
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="weightlifting" id="weightLiftingID" value="weightLiftinG" />
                    <label class="form-check-label" for="weightLiftingID">
                        Weights lifting
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="walking" id="walkingID" value="walkinG" />
                    <label class="form-check-label" for="walkingID">
                        Walking
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="joggingg" id="joggingID" value="jogginG" />
                    <label class="form-check-label" for="joggingID">
                        Jogging
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="running" id="runningID" value="runninG" />
                    <label class="form-check-label" for="runningID">
                        Running
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="swimming" id="swimmingID" value="swimminG" />
                    <label class="form-check-label" for="swimmingID">
                        Swimming
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="dancing" id="dancingID" value="dancinG" />
                    <label class="form-check-label" for="dancingID">
                        Dancing
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="aerobics" id="aerobicsID" value=aerobicS />
                    <label class="form-check-label" for="aerobicsID">
                        Aerobics
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="pilates" id="pilatesID" value=pilateS />
                    <label class="form-check-label" for="pilatesID">
                        Pilates
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="teamsports" id="teamSportsID" value=teamSports />
                    <label class="form-check-label" for="teamSportsID">
                        Team sports
                    </label>
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="other" id="otherID" value=otheR />
                    <label class="form-check-label" for="otherID">
                        Other
                    </label>
                </div>

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