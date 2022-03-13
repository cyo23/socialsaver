<?php
require_once ("config.php");
require_once ("services/UserService.php");

$userService = new UserService();
$resp = array("message" => "unrecognised action", "code" => 400, "data" => "");
// Send the output out as JSON
header('Content-Type: application/json');

$json = file_get_contents('php://input');
$data = json_decode($json);

// Whether action request action is from JSON body or traditional post data
$action = isset($data->action) ? $data->action : $_POST['action'];

switch($action) {
    case 'validate_name':
            $name = $_POST['name'];
            if($userService->isNameTaken($name)) {
                $resp['data'] = true;
                $resp['code'] = 400;
                $resp['message'] = 'Name is taken. Sorry!';
                http_response_code(400);
            } else {
                $resp['data'] = false;
                $resp['code'] = 200;
                $resp['message'] = 'Name is available';
            }
        break;

    case 'submit_name':
        $name = $_POST['name'];
        if($userService->saveName($name)) {
            $resp['message'] = 'Name has saves successfully';
            $resp['code'] = 200;
            /* set cookie to expire in 30 days*/
            setcookie("username", $name, time()+3600*24*30);
        } else {
            $resp['message'] = 'Unable to save name. Try again later.';
            $resp['code'] = 500;
            http_response_code(500);
        }

        break;
    case "update_score":
        if($userService->updateUserScore($data->name, $data->score)) {
            $resp['message'] = 'Score has been successfully updated';
            $resp['code'] = 200;
        } else {
            $resp['message'] = 'Unable to update score. Try again later.';
            $resp['code'] = 500;
            http_response_code(500);
        }
        break;
    case "update_best_matching_game_time":
        if($userService->updateMatchingGameTime($data->name, $data->time)) {
            $resp['message'] = 'best time has been successfully updated';
            $resp['code'] = 200;
        } else {
            $resp['message'] = 'Unable to update time for matching game. Try again later.';
            $resp['code'] = 500;
            http_response_code(500);
        }
        break;

    default:
        http_response_code(400);
}


echo json_encode($resp);