
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Survey/survey.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/Survey/survey.js"></script>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            <h2>BII survey</h2>
            <p class="survey-description">
                Implant illness doesnʼt end after explant. While many women feel instant relief some others still
                have lingering symptoms. The body still has years of toxic exposure to undo, along with other toxic environmental
                exposure. Left untouched heavy metals can replace minerals in the bones. Chemicals and parasites can
                burrow deep into tissue and lymphatic movement can slow or almost halt. And estrogen dominance can stop weight loss
                and attribute to cancer growths.<br><br> Find out what your dominate toxic issues are.
            </p>
    <form action="survey_submit.php" method="post">
        <input type="hidden" class="form-control" id="email" name="email">
        <div class="form-group">
            <label for="email">What type of implants did you have?:</label>
            <input type="text" class="form-control" id="implants" name="implants">
        </div>
        <div class="form-group">
            <label for="pwd">Main symptoms?:</label><br>
             <input type="checkbox" name="symptoms[]" value="trouble breathing"> trouble breathing<br>
            <input type="checkbox" name="symptoms[]" value="wheezing"> wheezing<br>
            <input type="checkbox" name="symptoms[]" value="a stuffy nose"> a stuffy nose<br>
            <input type="checkbox" name="symptoms[]" value="a runny nose"> a runny nose<br>
            <input type="checkbox" name="symptoms[]" value="red eyes"> red eyes<br>
            <input type="checkbox" name="symptoms[]" value="itchy skin or eyes"> itchy skin or eyes<br>
            <input type="checkbox" name="symptoms[]" value="a sore or itchy throat"> a sore or itchy throat<br>
            <input type="checkbox" name="symptoms[]" value="nosebleeds"> nosebleeds<br>
        </div>
        <button type="submit" class="btn btn-default" id="btn-submit-form">Submit</button>
    </form>
            <button type="submit" class="btn btn-default" onclick="submitForm();">Submit</button>
</div>
</div>
</div>



    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h2 class="modal-title" id="myModalLabel">Subscribe to our Newsletter.</h2>
                    <p>We promise we will not spam you.</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="#">
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="email" class="form-control input-lg"  placeholder="Your email here" id="modal-email">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="button" class="btn btn-primary btn-lg btn-block" value="Subscribe" onclick="submitData();">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
