<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Member\DestroyMember;
use App\Http\Requests\Admin\Member\IndexMember;
use App\Http\Requests\Admin\Member\StoreMember;
use App\Http\Requests\Admin\Member\UpdateMember;
use App\Models\Member;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMember $request
     * @return Response|array
     */
    public function index(IndexMember $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Member::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'surname', 'email', 'birthday', 'department', 'position'],

            // set columns to searchIn
            ['id', 'name', 'surname', 'email', 'position']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.member.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.member.create');

        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMember $request
     * @return Response|array
     */
    public function store(StoreMember $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Member
        $member = Member::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/members'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/members');
    }

    /**
     * Display the specified resource.
     *
     * @param Member $member
     * @throws AuthorizationException
     * @return void
     */
    public function show(Member $member)
    {
        $this->authorize('admin.member.show', $member);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Member $member
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Member $member)
    {
        $this->authorize('admin.member.edit', $member);


        return view('admin.member.edit', [
            'member' => $member,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMember $request
     * @param Member $member
     * @return Response|array
     */
    public function update(UpdateMember $request, Member $member)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Member
        $member->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/members'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMember $request
     * @param Member $member
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyMember $request, Member $member)
    {
        $member->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyMember $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyMember $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Member::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
