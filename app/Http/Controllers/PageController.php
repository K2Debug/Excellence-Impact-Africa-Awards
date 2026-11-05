<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return $this->page('pages.home', 'Home');
    }

    public function categories(): View
    {
        return $this->page('pages.categories', 'Categories', 'Explore 200 award categories across 16 clusters recognising achievement and impact across Africa.');
    }

    public function guidelines(): View
    {
        return $this->page('pages.guidelines', 'Guidelines', 'Eligibility, evaluation criteria, nomination process, key dates, rules and answers to common questions.');
    }

    public function judging(): View
    {
        return $this->page('pages.judging', 'Judging', 'How the awards approach fairness, independence, evaluation criteria and winner selection.');
    }

    public function about(): View
    {
        return $this->page('pages.about', 'About', 'The story, mission, vision and values of Excellence Impact African Awards.');
    }

    public function contact(): View
    {
        return $this->page('pages.contact', 'Contact', 'Contact the awards team about general enquiries, partnerships, media and nominees.');
    }

    public function submitContact(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:120'],
            'email' => ['required', 'email', 'max:254'],
            'enquiry_type' => ['required', 'in:General,Partnerships,Media,Nominations'],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
        ]);

        return back()->with('contact_status', 'Your details are valid. Message delivery is not available yet, so no message has been sent.');
    }

    private function page(string $view, string $title, ?string $description = null): View
    {
        $content = config('eiaa.content');
        $content['categories'] = json_decode(file_get_contents(config_path('award-categories.json')), true, flags: JSON_THROW_ON_ERROR);

        return view($view, [
            'site' => config('eiaa.site'),
            'content' => $content,
            'title' => $title,
            'description' => $description,
        ]);
    }
}
