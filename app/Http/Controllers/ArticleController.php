<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    // Direct route to login Page
    public function loginPage()
    {
        return view('articles.index');
    }
    //Direct route to Register Page
    public function registerPage()
    {
        return view('articles.register');
    }
    //Direct Route to edit page
    public function editPage($id)
    {
        $articles = Article::where('id', $id)->first()->toArray();
        return view('articles.update', compact('articles'));
    }
    //Direct route to article show page
    public function home()
    {

        $data = Article::paginate(3);
        // dd($data);
        // $data->appends(request()->all());
        return view('articles.show_list', ['datas' => $data]);
    }
    //Direct route to article create page
    public function createPage()
    {
        return view('articles.create');
    }
    //Add Article Function
    public function addArticle(Request $request)
    {
        $this->checkValidation($request);
        $data = $this->getData($request);
        // dd($data);
        Article::create($data);
        return redirect()->route('homePage');
    }
    //Update article function
    public function update(Request $request)
    {
        $this->checkValidation($request);
        $updateData = $this->getData($request);
        $id = $request->articleId;
        Article::where('id', $id)->update($updateData);
        return redirect()->route('homePage')->with(['insertSuccess' => 'Post Updated Successfully']);
    }
    //Delete Article Function
    public function delete($id)
    {
        $article = Article::where('id', $id)->delete();
        return redirect()->route('homePage')->with(['deleteSuccess' => 'Delete Article Successfully']);
    }
    //Private Function for get article data from FormData
    private function getData(Request $request)
    {
        return [
            'title' => $request->title,
            'description' => $request->description,
        ];
    }
    //Check Validation for Add article form
    private function checkValidation($request)
    {
        Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ])->validate();
    }
}
