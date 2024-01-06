<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('isAdmin');
        return view('pages.dashboard.member.index', [
            'members' => Member::paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'name' => 'required|max:255',
            'nickname' => 'required|max:255',
            'jikoshoukai' => 'required|max:255',
            'generation' => 'required|numeric|in:1,2,3,4,5,6,7,8,9,10,11,12',
            'status' => 'required|in:Member,Trainee,Inactive',
            'birthday' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('members');
        }

        Member::create($validatedData);

        return redirect("dashboard/members")->with('success', 'Member created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('pages.dashboard.member.show', [
            'member' => $member,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('pages.dashboard.member.edit', [
            'member' => $member,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $rules = [
            'photo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'name' => 'required|max:255',
            'nickname' => 'required|max:255',
            'jikoshoukai' => 'required|max:255',
            'generation' => 'required|numeric|in:1,2,3,4,5,6,7,8,9,10,11,12',
            'status' => 'required|in:Member,Trainee,Inactive',
            'birthday' => 'required|date',
        ];

        $validatedData = $request->validate($rules);

        if ($request->hasFile('photo')) {
            if ($request->oldPhoto) {
                Storage::delete($request->oldPhoto);
            }
            $validatedData['photo'] = $request->file('photo')->store('members');
        }

        $member->where('id', $member->id)->update($validatedData);

        return redirect("dashboard/members")->with('success', 'Member updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        if ($member->photo) {
            Storage::delete($member->photo);
        }
        $member->delete();

        return redirect("dashboard/members")->with('success', 'Member deleted successfully!');
    }
}
