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
        if ( self::HEADER_KEY !== self::LABELS_STRING ) {
            $meta[self::HEADER_KEY] = $meta[self::LABELS_STRING];
            unset($meta[self::LABELS_STRING]);
        } else {
            $meta[self::HEADER_KEY] = $meta[self::LABELS_STRING];
        }
        $this->meta = $meta;
        $this->data = $data;

        $this->createReportJson();
    }

    /**
     * @return array
     */
    public function createReportJson()
    {
        return $this->setObject([
            'meta'=> $this->meta,
            'data'=> $this->data
        ]);
    }

    /**
     * @return array
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return string
     */
    public function getObjectAsJson()
    {
        return json_encode($this->object);
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->meta[self::HEADER_KEY];
    }

    /**
     * @return array
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