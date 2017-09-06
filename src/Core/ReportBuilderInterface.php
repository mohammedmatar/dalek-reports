<?php
/**
 * Project: snso-framework-hosted
 * User: Mohammed Matar
 * Date: 06/09/17
 * Time: 01:32 ص
 */

namespace Dalek;


interface ReportBuilderInterface
{
    const LABELS_STRING = 'labels';
    const DESCRIPTION_STRING = 'desc';

    public function createReportJson();
    public function getObject();
    public function getHeaders();
    public function getData();
    public function getType();
    public function attachProperty($name, $value);
    public function setData($data);
    public function setHeaders($headers);
}