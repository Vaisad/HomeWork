<?php
        
            
            if(isset($_POST['submit']))
            {
                
                if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
                {
                    
                    if($_POST['operation'] == 'plus')
                    {
                        $total = $_POST['number1'] + $_POST['number2'];	
                    }
                    if($_POST['operation'] == 'minus')
                    {
                        $total = $_POST['number1'] - $_POST['number2'];	
                    }
                    if($_POST['operation'] == 'times')
                    {
                        $total = $_POST['number1'] * $_POST['number2'];	
                    }
                    if($_POST['operation'] == 'divided by')
                    {
                        $total = $_POST['number1'] / $_POST['number2'];	
                    }
                    
                    
                    echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}</h1>";
                
                } else {
                    
                    
                    echo 'Enter Number First !';
                
                }
            }
        
        ?>