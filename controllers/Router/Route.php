<?php
/** Implémentation des routes*/

abstract class Route
{
    protected array $params;

    /**
     * @param array $params
     */
    public function __construct( array $params = [])
    {
        $this->params = $params;
    }

    /**
     * @param array $params
     * @param string $method
     */

    public function action(array $params = [], string $method = 'GET'): void
    {
        if ($method === 'POST') {
            $this->get($params);
        } else {
            $this->post($params);
        }
    }

    /**
     * @param array $array
     * @param string $paramName
     * @param bool $canBeEmpty
     * @return string
     * @throws Exception
     */

    protected function getParam(array $array, string $paramName, bool $canBeEmpty = false): string
    {
        if (isset($array[$paramName])) {
            if ($canBeEmpty || !empty($array[$paramName])) {
                return $array[$paramName];
            }
        }
        throw new Exception("Paramètre '$paramName' manquant");
    }

    /**
     * @param array $params
     * @return mixed
     */
    abstract function get(array $params = []);
    
    abstract function post(array $params = []);
}