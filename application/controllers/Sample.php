<?php


class Sample extends CI_Controller
{
    public function index()
    {
        $this->load->view('sample', array(
            'title' => '<h2>タイトル</h2>',
            'body1' => array(
                'red'    => '<font color="red">赤</font>',
                'blue'   => '<font color="blue">青</font>',
                'yellow' => '<font color="yellow">黄色</font>',
            ),
            'body2' => (object)array(
                'green' => '<font color="green">緑</font>',
            ),
        ));
    }
}