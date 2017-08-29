<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Studies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rounds'), ['controller' => 'Rounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Round'), ['controller' => 'Rounds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studies form large-9 medium-8 columns content">
    <?= $this->Form->create($study) ?>
    <fieldset>
        <legend><?= __('Add Study') ?></legend>
        <?php
        echo $this->Form->control('seats');
        //echo $this->Form->control('completed');
        echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true ]);
        echo $this->Form->control('users._ids', ['type' => 'select', 'multiple' => true, 'options' => $users]);
        echo $this->Form->control('rounds.0.id');
        echo $this->Form->control('rounds.0.number')

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<script>

    function getQuestionsByCategory(category_id, callback)
    {
        $.ajax({
            type: "GET",
            url: "/admin/studies/getQuestions",
            dataType: 'json',
            data: { category_id : category_id
            },
            success: function(data){
                callback(data)
            }
        });
    }
$(document).ready(function()
{
    $('#category-id').change(function (){

        getQuestionsByCategory($('#category-id').val(), function(data)
        {
            $('#question-selector').detach();

            var length = data.questions.length;
            var options = '<option value =""></option>';
            for(i = 0; i < length; i++)
            {
                options += '<option value ="'+data.questions[i].id +'">'+data.questions[i].description+'</option>'
            }
            $('fieldset').append('<div id = question-selector class="input select">' +
                '<label for="rounds-0-question_id]">Questions</label>' +
                '<select name="rounds[0][question_id]" id="rounds-0-question_id]">'+ options +'</select>' +
                '</div>');
        });
    });

});
</script>
