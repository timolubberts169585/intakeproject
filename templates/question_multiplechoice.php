<div class="question__id">
    <p>Vraag <?php echo $question['placement']; ?></p>
</div>
<div class="question__title">
    <h5><?php echo $question['question']; ?></h5>
</div>
<div class="question__description">
    <p><?php echo $question['description']; ?></p>
</div>
<div class="question__wrapper multiplechoice">
    <form action="#">
        <?php

        $options = explode(',', $question['options']);
        $ctr = 1;
        foreach($options as $option){
            ?>
            <input id="option-<?php echo $ctr; ?>" class="input" type="radio" name="option">
            <label for="option<?php echo $ctr; ?>"><?php echo htmlentities($option); ?></label>

            <?php
            $ctr++;
        }

        ?>
        
        
    </form>
    
</div>