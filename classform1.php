<?php

class pp
{
	public function open($action, $method, $class = '', $id = '')
	{
		
		return sprintf('<form action="%s" method="%s" class="%s" id="%s">', $action, $method, $class, $id);
    }

                    // 1. Select kartu su option         

    public function select($name, $id = '')
	{
		return sprintf('<select name="pets" id= "pet-select">', $name, $id);
	}
    public function option($type = 'dog', $value = 'Dog')
	{
		return sprintf('<option type="%s" value="%s">Dog</option>', $type, $value);
	}
    public function option1($type = 'cat', $value = 'cat')
	{
		return sprintf('<option type="%s" value="%s">Cat</option>', $type, $value);
	}
    
    public function option2($type = 'hamster', $value = 'hamster')
	{
		return sprintf('<option type="%s" value="%s">Hamster</option>', $type, $value);
	}
    
    public function option3($type = 'parrot', $value = 'parrot')
	{
		return sprintf('<option type="%s" value="%s">Parrot</option>', $type, $value);
	}
    
    public function option4($type = 'spider', $value = 'spider')
	{
		return sprintf('<option type="%s" value="%s">Spider</option>', $type, $value);
	}
    
    public function option5($type = 'goldfish', $value = 'goldfish')
	{
        return sprintf('<option type="%s" value="%s">Goldfish</option></select>', $type, $value);
    }


                    // 2. Bandziau radio type padaryt, bet nesigavo radio, gavosi inputai paprasti...
    
    public function label1($title, $class = '')
	{
		return sprintf('<label class="%s">Kraken</label>', $class, $title);
    }
    public function input($type='radio', $id='kraken', $name='monster' )
	{
		return sprintf('<input name="%s" id="%s" type="%s">',$type, $id, $name);
    }
    
    public function label2($title, $class = '')
	{
		return sprintf('<label class="%s">Sasquatch</label>', $class, $title);
    }
    public function input2($type='radio', $id='sasquatch', $name='monster' )
	{
		return sprintf('<input name="%s" id="%s" type="%s">',$type, $id, $name);
    }
    
    public function label3($title, $class = '')
	{
		return sprintf('<label class="%s">Mothman</label>', $class, $title);
	}
    public function input3($type='radio', $id='mothman', $name='monster' )
	{
		return sprintf('<input name="%s" id="%s" type="%s">',$type, $id, $name);
	}

                    // Isvesta foto i ekrana
                    
    public function img($class = '', $src= '')
	{
		return sprintf('<img src= html-2.png>',$src, $class);
	}



                       // Kirilo kodas 


    public function label($title, $class = '')
	{
		return sprintf('<label class="%s">%s</label>', $class, $title);
	}

	public function input1($type = 'text', $placeholder = '', $value = '')
	{
		return sprintf('<input type="%s" value="%s" placeholder="%s">', $type, $value, $placeholder);
	}

	public function password($placeholder = '')
	{
		
		return $this->input('password', $placeholder);
	}

	public function submit($title)
	{
		return sprintf('<button type="submit">%s</button>', $title);
	}

	public function textarea($placeholder = '', $value = '')
	{
		return sprintf('<textarea placeholder="%s">%s</textarea>', $placeholder, $value);
	}

	public function close()
	{
		return '</form>';
	}

	public function newLine()
	{
		return "<br>\n";
	}
}











?>



