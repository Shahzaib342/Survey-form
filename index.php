<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Survey/survey.css" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/Survey/survey.js"></script>
<div class="container">
    <div class="row">
        <div class="alert alert-success">
            <strong>Success!</strong> your survey is successfully submitted.
        </div>
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 survey-container">
            <h2>BII survey</h2>
            <p class="survey-description">
                Implant illness doesnʼt end after explant. While many women feel instant relief some others still
                have lingering symptoms. The body still has years of toxic exposure to undo, along with other toxic
                environmental
                exposure. Left untouched heavy metals can replace minerals in the bones. Chemicals and parasites can
                burrow deep into tissue and lymphatic movement can slow or almost halt. And estrogen dominance can stop
                weight loss
                and attribute to cancer growths.<br><br> Find out what your dominate toxic issues are.
            </p>
            <form action="survey_submit.php" method="post">
                <input type="hidden" class="form-control" id="email" name="email">
                <div class="form-group">
                    <label>What type of implants did you have?:</label>
                    <input type="text" class="form-control" id="implants" name="What type of implants did you have?">
                </div>
                <div class="form-group">
                    <label for="brand">Brand?:</label>
                    <input type="text" class="form-control" id="brand" name="Brand?">
                </div>
                <div class="form-group">
                    <label for="Length of time">Length of time?:</label>
                    <input type="text" class="form-control" id="time-length" name="Length of time?">
                </div>
                <div class="form-group">
                    <label for="pwd">Main symptoms?:</label><br>
                    <input type="checkbox" name="Main-symptoms[]" value="Trouble breathing"> Trouble breathing<br>
                    <input type="checkbox" name="Main-symptoms[]" value="Theezing"> Theezing<br>
                    <input type="checkbox" name="Main-symptoms[]" value="A stuffy nose"> A stuffy nose<br>
                    <input type="checkbox" name="Main-symptoms[]" value="A runny nose"> A runny nose<br>
                    <input type="checkbox" name="Main-symptoms[]" value="Red eyes"> Red eyes<br>
                    <input type="checkbox" name="Main-symptoms[]" value="Itchy skin or eyes"> Itchy skin or eyes<br>
                    <input type="checkbox" name="Main-symptoms[]" value="A sore or itchy throat"> A sore or itchy throat<br>
                    <input type="checkbox" name="Main-symptoms[]" value="Nosebleeds"> Nosebleeds<br>
                </div>
                <div class="form-group">
                    <label>Do you live by the water?:</label>
                    <input type="text" class="form-control" id="live-by-water" name="Do you live by the water?">
                </div>
                <div class="form-group">
                    <label>Do you have a keen nose for moldy smells?:</label>
                    <input type="text" class="form-control" id="keen-nose"
                           name="Do you have a keen nose for moldy smells?">
                </div>
                <div class="form-group">
                    <label>Do you get allergies easily?:</label>
                    <input type="text" class="form-control"
                           name="Do you get allergies easily?">
                </div>
                <div class="form-group">
                    <label>Vertigo?:</label><br>
                    <input type="checkbox" name="Vertigo[]" value="Morning stiffness"> Morning stiffness<br>
                    <input type="checkbox" name="Vertigo[]" value="Trouble breathing"> Trouble breathing<br>
                    <input type="checkbox" name="Vertigo[]" value="Trouble finding words?"> Trouble finding words?<br>
                </div>
                <div class="form-group">
                    <label>Do you crave sugar, carbs ,
                        alcohol?:</label>
                    <input type="text" class="form-control"
                           name="Do you crave sugar, carbs ,alcohol?">
                </div>
                <div class="form-group">
                    <label>Bloat easily after eating?:</label><br>
                    <input type="checkbox" name="Bloat-easily-after-eating[]" value="Tired"> Tired<br>
                    <input type="checkbox" name="Bloat-easily-after-eating[]" value="Skin and nail fungal infections">
                    Skin and nail fungal infections<br>
                    <input type="checkbox" name="Bloat-easily-after-eating[]" value="Zoney feeling"> Zoney feeling<br>
                    <input type="checkbox" name="Bloat-easily-after-eating[]" value="Anxiety/ anxious"> Anxiety/ anxious<br>
                    <input type="checkbox" name="Bloat-easily-after-eating[]" value="Oral thrush"> Oral thrush<br>
                    <input type="checkbox" name="Bloat-easily-after-eating[]" value="Digestive issues"> Digestive issues<br>
                    <input type="checkbox" name="Bloat-easily-after-eating[]" value="Sinus infections"> Sinus infections<br>
                </div>
                <div class="form-group">
                    <label>Puffiness:</label><br>
                    <input type="checkbox" name="Puffiness[]" value="Bloating"> Bloating<br>
                    <input type="checkbox" name="Puffiness[]" value="Swelling and tenderness in your breasts">
                    Swelling and tenderness in your breasts<br>
                    <input type="checkbox" name="Puffiness[]" value="Fibrocystic lumps in your breasts"> Fibrocystic
                    lumps in your breasts<br>
                    <input type="checkbox" name="Puffiness[]" value="Decreased sex drive"> Decreased sex drive<br>
                    <input type="checkbox" name="Puffiness[]" value="Irregular menstrual periods / infertility">
                    Irregular menstrual periods / infertility<br>
                    <input type="checkbox" name="Puffiness[]" value="Increased symptoms of premenstrual syndrome (PMS)">
                    Increased symptoms of premenstrual syndrome (PMS)<br>
                    <input type="checkbox" name="Puffiness[]" value="Mood swings"> Mood swings<br>
                    <input type="checkbox" name="Puffiness[]" value="Headaches"> Headaches<br>
                    <input type="checkbox" name="Puffiness[]" value="Anxiety and panic attacks"> Anxiety and panic
                    attacks<br>
                    <input type="checkbox" name="Puffiness[]" value="Weight gain "> Weight gain <br>
                    <input type="checkbox" name="Puffiness[]" value="Hair loss "> Hair loss <br>
                    <input type="checkbox" name="Puffiness[]" value="Cold hands or feet"> Cold hands or feet<br>
                    <input type="checkbox" name="Puffiness[]" value="Trouble sleeping sleepiness or fatigue  "> Trouble
                    sleeping sleepiness or fatigue  <br>
                    <input type="checkbox" name="Puffiness[]" value="Memory problems"> Memory problems<br>
                    <input type="checkbox" name="Puffiness[]" value="Kidney pain or changes"> Kidney pain or changes<br>
                    <input type="checkbox" name="Puffiness[]" value="Anxiety irritability "> Anxiety irritability <br>
                    <input type="checkbox" name="Puffiness[]" value="Shortness of breathe chills"> Shortness of breathe
                    chills<br>
                    <input type="checkbox" name="Puffiness[]" value=" Weakness"> Weakness<br>
                    <input type="checkbox" name="Puffiness[]" value="Tingling in hands and feet"> Tingling in hands and
                    feet<br>
                    <input type="checkbox" name="Puffiness[]" value="Endocrine issues ( thyroid or infertility)">
                    Endocrine issues ( thyroid or infertility)<br>
                    <input type="checkbox" name="Puffiness[]" value="Liver issues"> Liver issues<br>
                    <input type="checkbox" name="Puffiness[]" value="Nervous system issues "> Nervous system issues <br>
                    <input type="checkbox" name="Puffiness[]" value="Chronic fatigue "> Chronic fatigue <br>
                    <input type="checkbox" name="Puffiness[]" value="Confusion "> Confusion <br>
                    <input type="checkbox" name="Puffiness[]" value="Stiffness in limbs "> Stiffness in limbs <br>
                    <input type="checkbox" name="Puffiness[]" value="Mental abnormalities"> Mental abnormalities<br>
                    <input type="checkbox" name="Puffiness[]" value="Depression"> Depression<br>
                    <input type="checkbox" name="Puffiness[]" value="Headaches"> Headaches<br>
                    <input type="checkbox" name="Puffiness[]" value="Slurred speech"> Slurred speech<br>
                    <input type="checkbox" name="Puffiness[]" value="Pale skin "> Pale skin <br>
                    <input type="checkbox" name="Puffiness[]" value="Seizures"> Seizures<br>
                    <input type="checkbox" name="Puffiness[]" value="Protein in urine "> Protein in urine <br>
                    <input type="checkbox" name="Puffiness[]" value="Focus or learning issues"> Focus or learning issues<br>
                    <input type="checkbox" name="Puffiness[]" value="ADD"> ADD<br>
                    <input type="checkbox" name="Puffiness[]" value="Joint pain"> Joint pain<br>
                    <input type="checkbox" name="Puffiness[]" value=" High BP "> High BP <br>
                    <input type="checkbox" name="Puffiness[]" value="Restless sleep"> Restless sleep<br>
                </div>
                <div class="form-group">
                    <label>Do you have or had Dental Implants? Any with mercury?:</label>
                    <input type="text" class="form-control"
                           name="Do you have or had Dental Implants? Any with mercury?">
                </div>
                <div class="form-group">
                    <label>Do you eat seafood? How many times per week?:</label>
                    <input type="text" class="form-control"
                           name="Do you eat seafood? How many times per week?">
                </div>
                <div class="form-group">
                    <label>Do you smoke?:</label>
                    <input type="text" class="form-control"
                           name="Do you smoke?">
                </div>
                <div class="form-group">
                    <label>Have you or do you live in a home built before 1978:</label>
                    <input type="text" class="form-control"
                           name="Have you or do you live in a home built before 1978">
                </div>
                <div class="form-group">
                    <label>Do you eat foods or supplements made in India or China?</label>
                    <input type="text" class="form-control"
                           name="Do you eat foods or supplements made in India or China?">
                </div>
                <div class="form-group">
                    <label>Do you have Mucus in the Am?</label>
                    <input type="text" class="form-control"
                           name="Do you have Mucus in the Am?">
                </div>
                <div class="form-group">
                    <label>Lots of mucus after dairy or flour?</label>
                    <input type="text" class="form-control"
                           name="Lots of mucus after dairy or flour?">
                </div>
                <div class="form-group">
                    <label>Unable to lose weight?</label>
                    <input type="text" class="form-control"
                           name="Unable to lose weight?">
                </div>
                <div class="form-group">
                    <label>Soreness stiffness in the am?</label>
                    <input type="text" class="form-control"
                           name="Soreness stiffness in the am?">
                </div>
                <div class="form-group">
                    <label>Stiffness along the spine</label>
                    <input type="text" class="form-control"
                           name="Stiffness along the spine">
                </div>
                <div class="form-group">
                    <label>Lack of energy?</label>
                    <input type="text" class="form-control"
                           name="Lack of energy?">
                </div>
                <div class="form-group">
                    <label>Swollen tonsils or lymph nodes?</label>
                    <input type="text" class="form-control"
                           name="Swollen tonsils or lymph nodes?">
                </div>
                <div class="form-group">
                    <label>Headaches?</label>
                    <input type="text" class="form-control"
                           name="Headaches?">
                </div>
                <div class="form-group">
                    <label>Brain fog?</label>
                    <input type="text" class="form-control"
                           name="Brain fog?">
                </div>
                <div class="form-group">
                    <label>Skin issues including dry skin?</label>
                    <input type="text" class="form-control"
                           name="Skin issues including dry skin?">
                </div>
                <div class="form-group">
                    <label>Itchy skin?</label>
                    <input type="text" class="form-control"
                           name="Itchy skin?">
                </div>
                <div class="form-group">
                    <label>Constipation?</label>
                    <input type="text" class="form-control"
                           name="Constipation?">
                </div>
                <div class="form-group">
                    <label>Sore breast during or before menstrual cycle?</label>
                    <input type="text" class="form-control"
                           name="Sore breast during or before menstrual cycle?">
                </div>
                <button type="submit" class="btn btn-default btn-submit-form" style="display: none">Submit</button>
            </form>
            <button type="button" class="btn btn-default" onclick="submitForm();">Submit</button>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h2 class="modal-title" id="myModalLabel">Subscribe to our Newsletter.</h2>
                <p>survey results will Be emailed to your email within 24 hours.</p>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="#">
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control input-lg" placeholder="Your email here"
                                       id="modal-email">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="button" class="btn btn-default" value="Submit" onclick="submitData();">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
