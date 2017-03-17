<?php
namespace dvizh\dic\interfaces;

interface CartElement
{
    function getId();
    function getName();
    function getPrice($withTriggers = true);
    function getCount();
    function getModelName();
    function getItemId();
    function getOptions();
}
