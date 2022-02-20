<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComWorkClassRequest;
use App\Http\Requests\UpdateComWorkClassRequest;
use App\Http\Resources\Admin\ComWorkClassResource;
use App\Models\ComWorkClass;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComWorkClassApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_work_class_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComWorkClassResource(ComWorkClass::all());
    }

    public function store(StoreComWorkClassRequest $request)
    {
        $comWorkClass = ComWorkClass::create($request->all());

        return (new ComWorkClassResource($comWorkClass))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ComWorkClass $comWorkClass)
    {
        abort_if(Gate::denies('com_work_class_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComWorkClassResource($comWorkClass);
    }

    public function update(UpdateComWorkClassRequest $request, ComWorkClass $comWorkClass)
    {
        $comWorkClass->update($request->all());

        return (new ComWorkClassResource($comWorkClass))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ComWorkClass $comWorkClass)
    {
        abort_if(Gate::denies('com_work_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comWorkClass->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
