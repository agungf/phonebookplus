<?php
$config['rules']['contact'] =  array(
                                    'name' => array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    'email' => array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|valid_email'
                                         ),
                                    'phone' => array(
                                            'field' => 'phone',
                                            'label' => 'Phone',
                                            'rules' => 'required'
                                         ),

                                    'note' => array(
                                            'field' => 'note',
                                            'label' => 'Note',
                                            'rules' => 'required'
                                         )
                                    );
?>