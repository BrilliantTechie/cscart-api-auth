<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class Login extends AEntity
{
    public function index($id = 0, $params = array())
    {
        list($code, $message) = fn_api_login_authenticate_user($params['user_login'], $params['password']);
        return array(
            'status' => Response::STATUS_OK,
            'data' => array(
                "message_code" => $code,
                "auth_message" => $message
            ),
        );
    }

    public function create($params)
    {
        error_log("creteindex");
        return array(
            'status' => Response::STATUS_METHOD_NOT_ALLOWED,
            'data' => array()
        );
    }

    public function update($id, $params)
    {
        error_log("updateindex");
        return array(
            'status' => Response::STATUS_METHOD_NOT_ALLOWED,
            'data' => array()
        );
    }

    public function delete($id)
    {
        error_log("deleteindex");
        return array(
            'status' => Response::STATUS_METHOD_NOT_ALLOWED,
        );
    }
}