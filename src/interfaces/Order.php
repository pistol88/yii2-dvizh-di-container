<?php
namespace dvizh\dic\interfaces;

interface Order
{
    function getId();
    function getElements();
    function getClient();
    function getSeller();
}
