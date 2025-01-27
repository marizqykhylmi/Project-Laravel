<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LogApi;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $logApi = new LogApi();
        $logApi->name = LogApi::API_USER_LIST;
        $logApi->url = $request->url();
        $logApi->method = $request->method();
        $logApi->header = json_encode($request->header());
        $logApi->request_body = json_encode($request->all());
        $logApi->request_datetime = new \DateTime();

        $user = [];
        try {
            $users = User::all();

            $logApi->response_body = json_encode($users);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_OK,
                'status' => 'success',
                'users' => $users,
            ];

            return response()->json($data);
        } catch (\Throwable $e) {
            $errors = [
                'error_code' => $e->getCode(),
                'message' => $e->getMessage(),
                'trace_as_string' => $e->getTraceAsString(),
            ];

            $logApi->response_body = json_encode($errors);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_BAD_REQUEST,
                'status' => 'failed',
                'errors' => $errors,
            ];

            return response()->json($data, Response::HTTP_BAD_REQUEST);
        }


}

    public function create(Request $request, $id)
    {
        $logApi = new LogApi();
        $logApi->name = LogApi::API_USER_LIST;
        $logApi->url = $request->url();
        $logApi->method = $request->method();
        $logApi->header = json_encode($request->header());
        $logApi->request_body = json_encode($request->all());
        $logApi->request_datetime = new \DateTime();

        $user = [];
        try {
            $user = User::find($id);

            $logApi->response_body = json_encode($user);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_OK,
                'status' => 'success',
                'user' => $user,
            ];

            return response()->json($data);
        } catch (\Throwable $e) {
            $errors = [
                'error_code' => $e->getCode(),
                'message' => $e->getMessage(),
                'trace_as_string' => $e->getTraceAsString(),
            ];

            $logApi->response_body = json_encode($errors);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_BAD_REQUEST,
                'status' => 'failed',
                'errors' => $errors,
            ];

            return response()->json($data, Response::HTTP_BAD_REQUEST);
        }
    }
    public function read(Request $request)
    {
        $logApi = new logApi();
        $logApi->name = LogApi::API_USER_LIST;
        $logApi->url = $request->url();
        $logApi->method = $request->method();
        $logApi->header = json_encode($request->header());
        $logApi->request_body = json_encode($request->all());
        $logApi->request_datetime = new \DateTime();

        $user = [];
        try {
            $user = User::create($request->all());

            $logApi->response_body = json_encode($user);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_CREATED,
                'status' => 'success',
                'user' => $user,
            ];

            return response()->json($data, Response::HTTP_CREATED);
        } catch (\Throwable $e) {
            $errors = [
                'error_code' => $e->getCode(),
                'message' => $e->getMessage(),
                'trace_as_string' => $e->getTraceAsString(),
            ];

            $logApi->response_body = json_encode($errors);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_BAD_REQUEST,
                'status' => 'failed',
                'errors' => $errors,
            ];

            return response()->json($data, Response::HTTP_BAD_REQUEST);
        }
    }
    public function update(Request $request)
    {
        $logApi = new logApi();
        $logApi->name = LogApi::API_USER_LIST;
        $logApi->url = $request->url();
        $logApi->method = $request->method();
        $logApi->header = json_encode($request->header());
        $logApi->request_body = json_encode($request->all());
        $logApi->request_datetime = new \DateTime();

        $user = [];
        try {
            $user = User::create($request->all());

            $logApi->response_body = json_encode($user);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_CREATED,
                'status' => 'success',
                'user' => $user,
            ];

            return response()->json($data, Response::HTTP_CREATED);
        } catch (\Throwable $e) {
            $errors = [
                'error_code' => $e->getCode(),
                'message' => $e->getMessage(),
                'trace_as_string' => $e->getTraceAsString(),
            ];

            $logApi->response_body = json_encode($errors);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_BAD_REQUEST,
                'status' => 'failed',
                'errors' => $errors,
            ];

            return response()->json($data, Response::HTTP_BAD_REQUEST);
        }
    }
    public function delete(Request $request)
    {
        $logApi = new logApi();
        $logApi->name = LogApi::API_USER_LIST;
        $logApi->url = $request->url();
        $logApi->method = $request->method();
        $logApi->header = json_encode($request->header());
        $logApi->request_body = json_encode($request->all());
        $logApi->request_datetime = new \DateTime();

        $user = [];
        try {
            $user = User::create($request->all());

            $logApi->response_body = json_encode($user);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_CREATED,
                'status' => 'success',
                'user' => $user,
            ];

            return response()->json($data, Response::HTTP_CREATED);
        } catch (\Throwable $e) {
            $errors = [
                'error_code' => $e->getCode(),
                'message' => $e->getMessage(),
                'trace_as_string' => $e->getTraceAsString(),
            ];

            $logApi->response_body = json_encode($errors);
            $logApi->response_datetime = new \DateTime();
            $logApi->save();

            $data = [
                'code' => Response::HTTP_BAD_REQUEST,
                'status' => 'failed',
                'errors' => $errors,
            ];

            return response()->json($data, Response::HTTP_BAD_REQUEST);
        }
    }
}
