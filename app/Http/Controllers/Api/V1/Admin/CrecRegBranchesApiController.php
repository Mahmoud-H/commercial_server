<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCrecRegBranchRequest;
use App\Http\Requests\UpdateCrecRegBranchRequest;
use App\Http\Resources\Admin\CrecRegBranchResource;
use App\Models\CrecRegBranch;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrecRegBranchesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_branch_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegBranchResource(CrecRegBranch::with(['crec_reg_request', 'country', 'governorate', 'city', 'branch_work_class'])->get());
    }

    public function store(StoreCrecRegBranchRequest $request)
    {
        $crecRegBranch = CrecRegBranch::create($request->all());

        return (new CrecRegBranchResource($crecRegBranch))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CrecRegBranch $crecRegBranch)
    {
        abort_if(Gate::denies('crec_reg_branch_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegBranchResource($crecRegBranch->load(['crec_reg_request', 'country', 'governorate', 'city', 'branch_work_class']));
    }

    public function update(UpdateCrecRegBranchRequest $request, CrecRegBranch $crecRegBranch)
    {
        $crecRegBranch->update($request->all());

        return (new CrecRegBranchResource($crecRegBranch))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CrecRegBranch $crecRegBranch)
    {
        abort_if(Gate::denies('crec_reg_branch_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegBranch->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
