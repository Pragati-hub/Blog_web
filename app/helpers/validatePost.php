<?php

function validatePost($post)
{
    $errors = array();

    if(empty($post['title'])){
        array_push($errors, 'Title is required');
    }
    
    if(empty($post['body'])){
        array_push($errors, 'Body is required');
    }

    if(empty($post['topic_id'])){
        array_push($errors, 'Please select a topic');
    }


    $existingPost = selectOne('posts' , ['title' => $post['title']]);
    if(($existingPost)){
       array_push($errors, 'post with that title already exists');
    }
   return $errors;
}
