<?php

function sortByDate(array $posts, array $posts1): bool
{
    return ($posts)['date'] < ($posts1)['date'];
}

usort($posts, 'sortByDate');
