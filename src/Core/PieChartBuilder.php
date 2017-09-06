<?php
/**
 * Project: snso-framework-hosted
 * User: Mohammed Matar
 * Date: 06/09/17
 * Time: 01:41 ص
 */

namespace Dalek;


class PieChartBuilder implements ReportBuilderInterface
{
    const HEADER_KEY = 'labels';

    private $object;
    private $meta;
    private $data;

    public function __construct( $meta, $data )
    {
        $meta[self::HEADER_KEY] = $meta[self::LABELS_STRING];
        $this->meta = $meta;
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function createReportJson()
    {
        return $this->object = [
            'meta'=> $this->meta,
            'data'=> $this->data
        ];
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->meta[self::HEADER_KEY];
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return ReportType::PIE_CHART;
    }
    /**
     * @return mixed
     */
    public function attachProperty($name, $value)
    {
        $this->meta[$name] = $value;
        $this->setObject(['meta'=> $this->meta, 'data'=> $this->data]);
        return $this->getObject();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->setObject(['meta'=> $this->meta, 'data'=> $this->data]);
        return $this->getObject();
    }

    /**
     * @param $headers
     * @return void
     */
    public function setHeaders($headers)
    {
        $this->meta[self::HEADER_KEY] = $headers;
    }
    private function setObject($object)
    {
        $this->object = $object;
    }

}