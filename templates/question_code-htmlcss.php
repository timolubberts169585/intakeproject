<div class="question__id">
    <p>Vraag <?php echo $question['placement']; ?></p>
</div>
<div class="question__title">
    <h5><?php echo $question['question']; ?></h5>
</div>
<div class="question__description">
    <p><?php echo $question['description']; ?></p>
</div>
<div class="question__wrapper code-htmlcss">
    <div class="code-htmlcss__container">
        <div id="left" class="code-htmlcss__container--left">
            <form action="#">
                <textarea name="input" id="input-<?php echo $question['id']; ?>" cols="30" rows="10">
                    <?php echo trim($question['options']); ?>
                </textarea>
            </form>
        </div>
        <div class="divider"></div>
        <div id="right" class="code-htmlcss__container--right">
            <div id="output-<?php echo $question['id']; ?>" class="output">
                
            </div>
        </div>
    </div>
    <div class="code-htmlcss__check">

    </div>
</div>
<div class="question__answer">
        <div class="question__answer--correct">
            <p>
                Correct! Het antwoord is <?php echo htmlentities($question['correct_answer']); ?>
            </p>
        </div>
        <div class="question__answer--false">
            <p>
                Onjuist... Het correcte antwoord is <?php echo htmlentities($question['correct_answer']); ?>
            </p>
        </div>
</div>