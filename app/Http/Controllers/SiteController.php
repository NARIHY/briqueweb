<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    /**
     * Actuality view
     * @return \Illuminate\View\View
     */
    public function actualite(): View
    {
        return view($this->viewPath().'actualite');
    }
    /**
     * Propos view
     * @return \Illuminate\View\View
     */
    public function propos(): View
    {
        return view($this->viewPath().'apropos');
    }

    /**
     * Contact View
     * @return \Illuminate\View\View
     */
    public function contact(): View
    {
        return view($this->viewPath().'contact');
    }

    /**
     * Home view
     * @return \Illuminate\View\View
     */
    public function home(): View
    {
        return view($this->viewPath().'home');
    }
    /**
     * Realisation View
     * @return \Illuminate\View\View
     */
    public function realisation(): View
    {
        return view($this->viewPath().'realisation');
    }

    /**
     * service view
     * @return \Illuminate\View\View
     */
    public function service(): View
    {
        return view($this->viewPath().'service');
    }

    /**
     * blog view
     * @return \Illuminate\View\View
     */
    public function blog(): View
    {
        return view($this->viewPath(). 'blog');
    }
    /**
     * View path
     * @return string
     */
    private function viewPath(): string
    {
        $view = "public.site.";
        return $view;
    }

}
