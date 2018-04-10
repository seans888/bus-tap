<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = News::orderBy('created_at', 'asc')->paginate(10);
        return view('news.index')->with('announcements', $announcements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'news_title' => 'required',
            'news_article' => 'required'
        ]);

        //Add News
        $announcement = new News;
        $announcement->news_title = $request->input('news_title');
        $announcement->news_article = $request->input('news_article');
        $announcement->save();

        return redirect('/news')->with('success', 'News Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = News::find($id);
        return view('news.show')->with('announcement', $announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = News::find($id);
        return view('news.edit')->with('announcement', $announcement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'news_title' => 'required',
            'news_article' => 'required'
        ]);

        //Edit News
        $announcement = News::find($id);
        $announcement->news_title = $request->input('news_title');
        $announcement->news_article = $request->input('news_article');
        $announcement->save();

        return redirect('/news')->with('success', 'News Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = News::find($id);
        $announcement->delete();
        return redirect('/news')->with('success', 'News Removed');
    }
}
