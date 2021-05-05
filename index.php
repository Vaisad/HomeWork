<?php

require_once 'pp.php';
$form = new pp;


echo $form->select('pet', 'pet-select');
echo $form->newLine();
echo $form->option('dog', 'dog');
echo $form->newLine();
echo $form->option1('cat', 'cat');
echo $form->newLine();
echo $form->option2('hamster', 'hamster');
echo $form->newLine();
echo $form->option3('parrot', 'parrot');
echo $form->newLine();
echo $form->option4('spider', 'spider');
echo $form->newLine();
echo $form->option5('goldfish', 'goldfish');
echo $form->newLine();
echo $form->label1('kraken');
echo $form->newLine();
echo $form->input('radio', 'kraken');
echo $form->newLine();
echo $form->label2('Sasquatch');
echo $form->newLine();
echo $form->input2('radio', 'sasquatch');
echo $form->newLine();
echo $form->label3('Mothman');
echo $form->newLine();
echo $form->input3('radio', 'mothman');
echo $form->newLine();
echo $form->img('');




echo $form->open('index.php', 'POST');
echo $form->newLine();
echo $form->label('username');
echo $form->input1('text', 'Enter username');
echo $form->newLine();
echo $form->label('  surname ');
echo $form->input('text', 'Enter surname');
echo $form->newLine();
echo $form->label('  password');
echo $form->password('Enter password');
echo $form->newLine();
echo $form->submit('go');
echo $form->close();

?>