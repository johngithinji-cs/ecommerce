<?php
$config = array(
array(
'field' => 'username',
'label' => 'Username',
'rules' => 'required'
),
array(
'field' => 'password',
'label' => 'Password',
'rules' => 'trim|required|min_length[8]'
),
array(
'field' => 'passconf',
'label' => 'Password Confirmation',
'rules' => 'trim|required|matches[password]'
),
array(
'field' => 'email',
'label' => 'Email',
'rules' => 'trim|required|valid_email'
)
);
?>
