<?php
namespace JasonKaz\FormBuild;

class Submit extends FormElement
{
	
	private $Text;
	
    public function __construct($Text, $Attribs = array())
    {
        $this->Attribs = $Attribs;
        $this->Text = $Text;
        $this->setAttributeDefaults(array('class' => 'btn btn-default'));
    	$this->Code .= '<button type="submit"' . $this->parseAttribs($this->Attribs) . '>' . $this->Text . '</button>';
    }
}