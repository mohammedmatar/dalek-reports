<?php
/**
 * Project: snso-framework-hosted
 * User: Mohammed Matar
 * Date: 06/09/17
 * Time: 02:49 ص
 */
namespace Dalek;
interface Component
{
    public function setCaption($caption);
    public function getCaption();
    public function setDimension($width, $height);
    public function getDimension();
    public function getBuilder();
}