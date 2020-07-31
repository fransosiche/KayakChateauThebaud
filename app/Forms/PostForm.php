<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PostForm extends Form
{
    public function buildForm()
    {
        $this->formOptions =[
            'method' => 'POST',
            'url'=>route('blog_post_form')];
        $this
            ->add('Nom du Post','text',[
                'rules'=> 'required'
            ])
            ->add('Description','textarea',[
                'rules'=> 'required'
            ])

            ->add('Image', 'file')

            ->add('Sauvegarder', 'submit');
    }
}
