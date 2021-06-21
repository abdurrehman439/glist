<?php

function getReview($post_id,$type)
{
    $CI = get_instance();
    $mod = $CI->load->model('UserModel');
    $res = $CI->UserModel->getReview($post_id, $type);

    return $res;
}
