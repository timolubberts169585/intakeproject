<div class="question__id">
    <p>Vraag <?php echo $question['placement']; ?></p>
</div>
<div class="question__title">
    <h5><?php echo $question['question']; ?></h5>
</div>
<div class="question__description">
    <p><?php echo $question['description']; ?></p>
</div>
<div class="question__wrapper">
    <form action="#">
        <?php

        $options = explode(',', $question['options']);
        $ctr = 1;
        foreach($options as $option){
            ?>
            <div class="question__wrapper--option">
                <input type="radio" name="option<?php echo $ctr; ?>">
                <label for="option<?php echo $ctr; ?>"><?php echo htmlentities($option); ?></label>
            </div>

            <?php
            $ctr++;
        }

        ?>
        
        
    </form>
    
</div>