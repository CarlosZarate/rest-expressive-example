<?php
/**
 * Abstract Resource
 *
 * @since     Dec 2015
 * @author    Haydar KULEKCI  <haydarkulekci@gmail.com>
 */
namespace Api\V1\User;

use Api\V1\AbstractResource;
use Zend\Diactoros\Response\JsonResponse;
use ZF\ApiProblem\ApiProblem;


class UserResource extends AbstractResource
{
    public function __construct()
    {
    }

    /**
     * @SWG\Get(
     *     path="/user/{id}",
     *     @SWG\Response(response="200", description="User fetching endpoint"),
     *     @SWG\Response(response="500", description="Some errors"),
     *     @SWG\Parameter(required=true, name="id", in="path", type="integer")
     * )
     */
    public function fetch($id)
    {
        return [];
    }

    /**
     * @SWG\Get(
     *     path="/user",
     *     @SWG\Response(response="200", description="Users fetching endpoint"),
     *     @SWG\Response(response="500", description="Some errors"),
     *     @SWG\Parameter(name="keyword", in="query", type="string"),
     *     @SWG\Parameter(name="type", in="query", type="integer")
     * )
     */
    public function fetchAll($params = [])
    {
        return [];
    }

    /**
     * @SWG\Post(
     *     path="/user",
     *     @SWG\Response(response="200", description="User create endpoint description"),
     *     @SWG\Response(response="500", description="Some errors"),
     *     @SWG\Response(response="400", description="Some parameter errors")
     * )
     */
    public function create($data = [])
    {
        return [];
    }
}
