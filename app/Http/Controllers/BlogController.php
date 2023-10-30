<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    // Notice: Only View / Name of routes / Codes logique Cannot be change

    /**
     * listing all blog
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $blog = Blog::orderBy('created_at', 'desc')
                        ->paginate(10);
        return view('admin.blog.index',[
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for creating a new blog
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('admin.blog.action.random');
    }


    /**
     * Notice: POST Methods
     * Store a newly created resource in storage.
     * Code steps
     *          -Steep 1:
     *              Boucle in try catch everything to make sure there is no error
     *          -Steep 2:
     *              Create BlogRequest for validating information giving by user
     *          -Steep 3:
     *              there are many action what my code do
     *                  - get information validated and affect it to $validated
     *                  - store information validated Picture here is nullable but it can change
     *                  - get the media
     *                  - verify if media has files
     *                  - if isset media of types Image, save it in our blog table
     *          -Steep 4:
     *              if success give your routes redirection //remplace the routes  to your existing
     *              if errorr give your routes redirection //remplace the routes to your routes
     * @param \App\Http\Requests\BlogRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BlogRequest $request): RedirectResponse
    {
        try {
            $validated = $request->validated();
            $blog = Blog::create($validated);
            $media = $request->validated('media');
            if ($media !== null && !$media->getError()) {
                $data['media'] = $media->store('blog', 'public');
            }
            $blog->update($data);
            //insert 0 to info for publication visibility
            $info = ['info' => 0];
            $blog->update($info);
            return redirect()->route('')->with('success', 'Ajout du blog réussi');
        } catch (\Exception $e) {
            return redirect()->route('')->with('error', 'Oups, il y a eu une erreur:'. $e->getMessage());
        }
    }



    /**
     * Show the form for editing the specified blog
     * @param string $id //get the id of the post in URL
     * @return \Illuminate\View\View
     */
    public function edit(string $id): View
    {
        return view('admin.blog.action.random');
    }


    /**
     * Notice: PUT methods
     *  Update the specified resource in storage.
     * Codes steps:
     *          Step 1:
     *              Create a validation rules (BlogUpdateRequest)
     *              Find the ressources to update
     *          Step 2:
     *              Boucle in try catch to have real controlls of the script (Verry helpfull to find errors)
     *              Insert the informationValidated by our validation rules into $update
     *          Step 3:
     *              verify if media has updated by user or not
     *              if isset media save it to our database and (need to remove old media but it's can be not removed)
     *          Step 4:
     *              Update every information given
     *          Step 5:
     *              REdirect user to success or error
     * @param \App\Http\Requests\BlogUpdateRequest $request
     * @param string $id //Id of the blog to modify
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BlogUpdateRequest $request, string $id): RedirectResponse
    {
        try {
            $update = $request->validated();
            $media = $request->validated('media');
            $blog = Blog::findOrFail($id);
            $blog->update($update);
            if (empty($media)){
                $media = $blog->$media;
            } else {
                $data['media'] = $media->store('blog', 'public');
                $blog->update($data);
            }
            return redirect()->route('')->with('success', 'Modification réussi');
        } catch(\Exception $e) {
            return redirect()->route('')->with('error', 'Oups, il y a eu une erreur:'. $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage and Data Base.
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();
            return redirect()->route('')->with('success', 'Supréssion réussi');
        } catch(\Exception $e) {
            return redirect()->route('')->with('error', 'Oups, il y a eu une erreur:'. $e->getMessage());
        }
    }
}
