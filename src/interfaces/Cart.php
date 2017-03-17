<?php
namespace dvizh\dic\interfaces;

interface Cart
{
    function getElements();
    function truncate();
}
