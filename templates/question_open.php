<div class="question__id">
    <p>Vraag <?php echo $question['placement']; ?></p>
</div>
<div class="question__title">
    <h5><?php echo $question['question']; ?></h5>
</div>
<div class="question__description">
    <p><?php echo $question['description']; ?></p>
</div>
<div class="question__wrapper open">
    <form action="#">
        <textarea id="input-<?php echo $question['id']; ?>" name="input" cols="30" rows="10"></textarea>
    </form>

</div>
<div class="question__answer">
    <div class="question__answer--correct">

    </div>
    <div class="question__answer--false">

    </div>
</div>